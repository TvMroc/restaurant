<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>restaurant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julee&family=VT323&display=swap" rel="stylesheet">
    <script src="../js/delete.js"></script>
</head>
<body class="account">
    <a class="back" onclick="history.back()">← Back<a>
    <div class="form">
        <h1>Change username</h1>
        <form name="username" action="username_logic.php" method="post">
            <div>
                <label for="newusername">New username:</label>
                <input type="text" id="newusername" name="newusername" placeholder="John" required>
            </div>
            <div>
                <label for="useremail">Email:</label>
                <input type="email" id="useremail" name="useremail" placeholder="example@example.com" required>
            </div>
            <div>
                <label for="newuserpassword">Password:</label>
                <input type="password" id="newuserpassword" name="newuserpassword" placeholder="!12345689_" required>
            </div>
            <input type="submit" value="Update">
        </form>
    </div>
    <div class="form">
        <h1>Change email</h1>
        <form name="email" action="email_logic.php" method="post">
            <div>
                <label for="mailusername">Username:</label>
                <input type="text" id="mailusername" name="mailusername" placeholder="John" required>
            </div>
            <div>
                <label for="email"> New email:</label>
                <input type="email" id="email" name="email" placeholder="example@example.com" required>
            </div>
            <div>
                <label for="mailpassword">Password:</label>
                <input type="password" id="mailpassword" name="mailpassword" placeholder="!12345689_" required>
            </div>
            <input type="submit" value="Update">
        </form>
    </div>
    <div class="form">
        <h1>Change password</h1>
        <form name="password" action="password_logic.php" method="post">        
            <div>
                <label for="passemail">Email:</label>
                <input type="email" id="passemail" name="passemail" placeholder="example@example.com" required>
            </div>
            <div>
                <label for="oldpassword">Old password:</label>
                <input type="password" id="oldpassword" name="oldpassword" placeholder="!12345689_" required>
            </div>
            <div>
                <label for="newpassword">New password:</label>
                <input type="password" id="newpassword" name="newpassword" placeholder="!12345689_" required>
            </div>
            <input type="submit" value="Update">
        </form>
    </div>
    <div class="form">
        <h1>Delete account</h1>
        <form name="delete" action="delete_logic.php" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="John" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="!12345689_" required>
            </div>
            <div class="del-reveal" onclick="deleteShow()">Delete</div>
            <div id="del">
                <p>Are you sure you want to delete your account?</p>
                <input type="submit" value="Delete">
            </div>
        </form>
    </div>
    <a class="logout" href="logout.php">Logout</a>
</body>
</html>