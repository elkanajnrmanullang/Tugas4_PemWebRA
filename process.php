<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = trim($_POST['full_name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm_password']);

    // Validasi di server
    if (empty($fullName) || strlen($fullName) < 3) {
        die("Full name is required and must be at least 3 characters long.");
    }
    if ($password !== $confirmPassword) {
        die("Passwords do not match!");
    }

    // File handling
    if (!isset($_FILES['upload_file'])) {
        die("File upload is required.");
    }

    $file = $_FILES['upload_file'];
    $fileType = mime_content_type($file['tmp_name']);
    $allowedTypes = ['text/plain'];
    $maxFileSize = 2 * 1024 * 1024; // 2MB

    if (!in_array($fileType, $allowedTypes)) {
        die("Invalid file type. Only .txt files are allowed.");
    }

    if ($file['size'] > $maxFileSize) {
        die("File size exceeds 2MB.");
    }

    // Read file contents
    $fileContents = file_get_contents($file['tmp_name']);
    $fileRows = explode("\n", trim($fileContents));

    // Browser and OS info
    $browserInfo = $_SERVER['HTTP_USER_AGENT'];

    // Save data to session
    session_start();
    $_SESSION['form_data'] = compact('fullName', 'username', 'email', 'phone', 'fileRows', 'browserInfo');
    header('Location: result.php');
}
?>