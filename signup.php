<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Library Management System</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    
    <div class="signup-banner">
        <div class="signup-form">
            <h1>Signup</h1>
            <form action="signup_process.php" method="POST">
                <h5>User Name</h5>
                <input type="text" name="username" placeholder="Username" required>
                <h5>Password</h5>
                <input type="password" name="password" placeholder="Password" required>
                <button class="signbutton" type="submit">Signup</button>
            </form>
            <a href="login.php">Login</a>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
