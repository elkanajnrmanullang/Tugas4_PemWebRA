<?php
session_start();
if (!isset($_SESSION['form_data'])) {
    die("No data found.");
}

$data = $_SESSION['form_data'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    <h1>Form Submission Results</h1>
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
            <td>Phone</td>
            <td><?= htmlspecialchars($data['phone']) ?></td>
        </tr>
        <tr>
            <td>Browser Info</td>
            <td><?= htmlspecialchars($data['browserInfo']) ?></td>
        </tr>
    </table>

    <h2>File Contents</h2>
    <table border="1">
        <tr>
            <th>Line</th>
            <th>Content</th>
        </tr>
        <?php foreach ($data['fileRows'] as $index => $line): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= htmlspecialchars($line) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>