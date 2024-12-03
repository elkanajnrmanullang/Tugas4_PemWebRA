document
  .getElementById("registrationForm")
  .addEventListener("submit", function (event) {
    const fileInput = document.getElementById("fileUpload");
    const file = fileInput.files[0];
    const maxFileSize = 2 * 1024 * 1024; // 2 MB

    if (file) {
      const fileType = file.type;
      const fileSize = file.size;

      if (fileType !== "text/plain") {
        alert("File must be a .txt file");
        event.preventDefault();
        return;
      }

      if (fileSize > maxFileSize) {
        alert("File size must be less than 2MB");
        event.preventDefault();
        return;
      }
    }
  });
