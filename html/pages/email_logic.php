<?php 
session_start();
include 'conn.php';

if (empty($_POST["mailpassword"]) || empty($_POST["email"]) || empty($_POST["mailusername"])) {
    header("Location: login.php");
    exit();
}

$username = $_POST["mailusername"];
$newemail = $_POST["email"];
$password = $_POST["mailpassword"];

$stmt = $connection->prepare("UPDATE users SET email=:newmail WHERE username=:user AND password=:pass");
$result = $stmt->execute(['newmail' => $newemail, 'user' => $username, 'pass' => $password]);
$users = $stmt->fetch();

header("Location: account.php");
?>
