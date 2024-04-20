<?php 
session_start();
include 'conn.php';
 
if (empty($_POST["name"]) || empty($_POST["image"]) || empty($_POST["ingredients"]) || empty($_POST["price"])) {
    header("Location: upper_dashboard.php");
    exit();
}

$name = $_POST["name"];
$image = $_POST["image"];
$ingredients = $_POST["ingredients"];
$price = $_POST["price"];
$description = $_POST["ingredients"];

$stmt = $connection->prepare("INSERT INTO products (name, image, description, price) VALUES (:pname, :pimage, :pdescription, :pprice)");
$stmt->bindParam(":pname", $name);
$stmt->bindParam(":pimage", $image);
$stmt->bindParam(":pdescription", $description);
$stmt->bindParam(":pprice", $price);
$stmt->execute();

header("Location: upper_dashboard.php");
?>