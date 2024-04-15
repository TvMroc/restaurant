<?php
session_start();
include 'conn.php';

if (empty($_POST["username"]) || empty($_POST["password"])) {
    header("Location: login.php");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "DELETE FROM users WHERE username=:user AND password=:pass";
$stmt = $connection->prepare($sql);
$stmt->execute(['user' => $username, 'pass' => $password]);
    
session_unset();
session_destroy();
header("Location: ../index.php");
exit();
?>
