<?php 
session_start();
include 'conn.php';
 
if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"])) {
    header("Location: register.php");
    exit();
}
 
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$stmt = $connection->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
$stmt->bindParam(":username", $username);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":password", $password);
$stmt->execute();

header("Location: login.php");
?>