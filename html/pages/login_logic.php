<?php 
session_start();
include 'conn.php';
if (empty($_POST["username"]) || empty($_POST["password"])) {
    header("Location: login.php");
    exit();
}
 
$username = $_POST["username"];
$password = $_POST["password"];
 
$stmt = $connection->prepare("SELECT * FROM users WHERE username=:user AND password=:pass");
$stmt->execute(['user' => $username, 'pass' => $password]);
$users = $stmt->fetch();

if (!$users) {
    header("Location: login.php");
} else {
    $_SESSION['user'] = $username;
    $_SESSION['role'] = $users['role'];
    header("Location: dashboard.php");
}
?>