<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="process.php" method="POST" enctype="multipart/form-data" id="registrationForm">
            <h1>Registration</h1>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="full_name" placeholder="Full Name" required minlength="3">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="username" placeholder="Username" required minlength="3">
                    <i class='bx bxs-user'></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxl-gmail'></i>
                </div>
                <div class="input-field">
                    <input type="number" name="phone" placeholder="Phone Number" required>
                    <i class='bx bxs-phone'></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" required minlength="6">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-field">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required
                        minlength="6">
                    <i class='bx bxs-lock-alt'></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="file" name="upload_file" required accept=".txt">
                    <i class='bx bx-upload'></i>
                </div>
            </div>
            <button class="btn" type="submit">Register</button>
        </form>
    </div>

    <script>
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        const fileInput = document.querySelector('input[name="upload_file"]');
        const file = fileInput.files[0];

        if (file) {
            const allowedSize = 2 * 1024 * 1024; // 2MB
            if (file.size > allowedSize) {
                alert("File size must be less than 2MB!");
                event.preventDefault();
            }
        }
    });
    </script>
</body>

</html>