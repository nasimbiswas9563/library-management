<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Library Management System</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    
    <div class="login-bannar">
    <div class="login-form">
        
        <h1>Login</h1>
        
        <form action="login_process.php" method="POST">
            <h4>User</h4>
            <input type="text" name="username" placeholder="Username" required>
            <h4>Password</h4>
            <input type="password" name="password" placeholder="Password" required>
            <button class="button" type="submit">Login</button>
            <a href="signup.php">Registration Here</a>
        </form>
    </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
