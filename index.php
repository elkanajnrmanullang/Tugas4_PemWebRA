<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="form-card">
            <h1>Registration</h1>
            <form id="registrationForm" action="process.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="text" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"
                        required>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="declaration" name="declaration" required>
                    <label for="declaration">I hereby declare that the above information is true and correct.</label>
                </div>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>
</body>

</html>