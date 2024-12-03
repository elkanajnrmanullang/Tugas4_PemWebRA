<?php
session_start();
if (!isset($_SESSION['result'])) {
    header("Location: index.php");
    exit();
}

$result = $_SESSION['result'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Hasil Pendaftaran</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <td><?= htmlspecialchars($result['name']); ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= htmlspecialchars($result['email']); ?></td>
        </tr>
        <tr>
            <th>Usia</th>
            <td><?= htmlspecialchars($result['age']); ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?= htmlspecialchars($result['gender']); ?></td>
        </tr>
        <tr>
            <th>Browser / OS</th>
            <td><?= htmlspecialchars($result['userAgent']); ?></td>
        </tr>
    </table>

    <h2>Isi File:</h2>
    <table border="1">
        <tr>
            <th>Baris</th>
            <th>Konten</th>
        </tr>
        <?php foreach ($result['fileRows'] as $index => $row): ?>
        <tr>
            <td><?= $index + 1; ?></td>
            <td><?= htmlspecialchars($row); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>