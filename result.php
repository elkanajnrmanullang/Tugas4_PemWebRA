<?php
session_start();
if (!isset($_SESSION['data'])) {
    die('No data found.');
}

$data = $_SESSION['data'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Result</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="result-container">
        <h2>Registration Details</h2>
        <table border="1">
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Full Name</td>
                <td><?= htmlspecialchars($data['fullName']) ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?= htmlspecialchars($data['username']) ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?= htmlspecialchars($data['email']) ?></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><?= htmlspecialchars($data['phoneNumber']) ?></td>
            </tr>
            <tr>
                <td>Browser Info</td>
                <td><?= htmlspecialchars($data['browserInfo']) ?></td>
            </tr>
        </table>

        <h3>Uploaded File Content</h3>
        <table border="1">
            <tr>
                <th>Line</th>
                <th>Content</th>
            </tr>
            <?php foreach ($data['fileContent'] as $index => $line): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= htmlspecialchars($line) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>