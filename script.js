document
  .getElementById("registrationForm")
  .addEventListener("submit", function (event) {
    const fileInput = document.getElementById("file");
    const file = fileInput.files[0];

    if (file) {
      const maxSize = 1024 * 1024; // 1MB
      const allowedTypes = ["text/plain"];

      if (!allowedTypes.includes(file.type)) {
        alert("File harus berupa teks (.txt)");
        event.preventDefault();
        return;
      }

      if (file.size > maxSize) {
        alert("Ukuran file tidak boleh lebih dari 1MB");
        event.preventDefault();
      }
    }
  });
