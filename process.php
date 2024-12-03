<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    // Validasi Nama
    $name = trim($_POST['name']);
    if (strlen($name) < 3 || strlen($name) > 50) {
        $errors[] = "Nama harus memiliki 3-50 karakter.";
    }

    // Validasi Email
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if (!$email) {
        $errors[] = "Email tidak valid.";
    }

    // Validasi Usia
    $age = intval($_POST['age']);
    if ($age < 1 || $age > 120) {
        $errors[] = "Usia harus di antara 1-120.";
    }

    // Validasi Jenis Kelamin
    $gender = $_POST['gender'];
    if (empty($gender)) {
        $errors[] = "Jenis kelamin harus dipilih.";
    }

    // Validasi File
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $allowedTypes = ["text/plain"];
        $maxSize = 1024 * 1024; // 1MB

        if ($file['size'] > $maxSize) {
            $errors[] = "Ukuran file tidak boleh lebih dari 1MB.";
        }

        if (!in_array($file['type'], $allowedTypes)) {
            $errors[] = "File harus berupa teks (.txt).";
        }

        if (empty($errors)) {
            $fileContent = file_get_contents($file['tmp_name']);
            $fileRows = explode("\n", $fileContent);
        }
    } else {
        $errors[] = "File harus diupload.";
    }

    if (!empty($errors)) {
        echo "<h1>Terjadi Kesalahan:</h1><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        echo "<a href='index.php'>Kembali ke Form</a>";
        exit();
    }

    // Simpan Data di Session untuk Result
    session_start();
    $_SESSION['result'] = [
        'name' => $name,
        'email' => $email,
        'age' => $age,
        'gender' => $gender,
        'fileRows' => $fileRows,
        'userAgent' => $_SERVER['HTTP_USER_AGENT']
    ];
    header("Location: result.php");
    exit();
}
?>