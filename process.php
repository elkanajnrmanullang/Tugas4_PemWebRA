<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $browserInfo = $_SERVER['HTTP_USER_AGENT'];

    // File handling
    $file = $_FILES['fileUpload'];
    $fileName = $file['name'];
    $fileTmp = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileType = mime_content_type($fileTmp);

    // Validasi file
    if ($fileType !== 'text/plain') {
        die('Only .txt files are allowed.');
    }

    if ($fileSize > 2 * 1024 * 1024) {
        die('File size exceeds 2MB limit.');
    }

    // Read file content
    $fileContent = file($fileTmp, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Redirect ke halaman result
    session_start();
    $_SESSION['data'] = compact('fullName', 'username', 'email', 'phoneNumber', 'browserInfo', 'fileContent');
    header('Location: result.php');
    exit;
}
?>