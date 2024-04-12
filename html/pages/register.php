<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <h1>Register</h1>
            <form name="register" action="register_logic.php" method="post">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="John" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="!12345689_" required>
                </div>
                <input type="submit" value="Register">
            </form>
            <a href="login.php">Login</a>
        </div>
    </div>
</body>
</html>