<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <h1>Form Pendaftaran</h1>
    <form id="registrationForm" action="process.php" method="POST" enctype="multipart/form-data">
        <label for="name">Nama Lengkap:</label>
        <input type="text" id="name" name="name" required minlength="3" maxlength="50">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="age">Usia:</label>
        <input type="number" id="age" name="age" required min="1" max="120">

        <label for="gender">Jenis Kelamin:</label>
        <select id="gender" name="gender" required>
            <option value="">--Pilih--</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label for="file">Upload File (Teks):</label>
        <input type="file" id="file" name="file" accept=".txt" required>

        <button type="submit">Kirim</button>
    </form>
</body>

</html>