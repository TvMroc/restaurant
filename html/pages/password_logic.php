<?php 
session_start();
include 'conn.php';

if (empty($_POST["oldpassword"]) || empty($_POST["newpassword"]) || empty($_POST["passemail"])) {
    header("Location: login.php");
    exit();
}

$newpassword = $_POST["newpassword"];
$email = $_POST["passemail"];
$password = $_POST["oldpassword"];

$stmt = $connection->prepare("UPDATE users SET password=:newpass WHERE email=:mail AND password=:pass");
$result = $stmt->execute(['newpass' => $newpassword, 'mail' => $email, 'pass' => $password]);
$users = $stmt->fetch();

header("Location: account.php");
?>