<?php 
session_start();
include 'conn.php';

if (empty($_POST["newusername"]) || empty($_POST["newuserpassword"]) || empty($_POST["useremail"])) {
    header("Location: login.php");
    exit();
}

$newusername = $_POST["newusername"];
$email = $_POST["useremail"];
$password = $_POST["newuserpassword"];


$stmt = $connection->prepare("UPDATE users SET username=:newuser WHERE email=:mail AND password=:pass");
$result = $stmt->execute(['newuser' => $newusername, 'mail' => $email, 'pass' => $password]);
$users = $stmt->fetch();

$_SESSION['user'] = $newusername;
header("Location: account.php");
?>
