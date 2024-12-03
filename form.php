<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="form-container">
        <form id="registrationForm" action="process.php" method="POST" enctype="multipart/form-data">
            <h2>Registration</h2>
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="phoneNumber">Phone Number</label>
            <input type="text" id="phoneNumber" name="phoneNumber" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" minlength="8" required>

            <label for="fileUpload">Upload File (TXT only)</label>
            <input type="file" id="fileUpload" name="fileUpload" accept=".txt" required>

            <button type="submit">Register</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>