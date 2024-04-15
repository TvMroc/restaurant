<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="form login">
            <h1>Login</h1>
            <form name="login" action="login_logic.php" method="post">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="John" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="!12345689_" required>
                </div>
                <input type="submit" value="Login">
            </form>
            <a href="register.php">Register</a>
        </div>
    </div>
</body>
</html>