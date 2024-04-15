<?php 
session_start();
include 'conn.php';

if (empty($_POST["id"]) || empty($_POST["image"]) || empty($_POST["ingredients"]) || empty($_POST["price"])) {
    header("Location: upper.php");
    exit();
}

$productid = $_POST["id"];
$image = $_POST["image"];
$ingredients = $_POST["ingredients"];
$price= $_POST["price"];

$stmt = $connection->prepare("UPDATE products SET image=:img, description=:ingred, price=:prc WHERE id=:pid");
$result = $stmt->execute(['pid' => $productid, 'img' => $image, 'ingred' => $ingredients, 'prc' => $price]);

header("Location: upper.php");
?>