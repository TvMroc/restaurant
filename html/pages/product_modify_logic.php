<?php 
session_start();
include 'conn.php';
    if (empty($_POST["productname"]) || empty($_POST["productid"]) || empty($_POST["modimage"]) || empty($_POST["modingredients"]) || empty($_POST["modprice"])) {
        header("Location: upper_dashboard.php");
        exit();
    }
    $productname = $_POST["productname"];
    $productid = $_POST["productid"];
    $image = $_POST["modimage"];
    $ingredients = $_POST["modingredients"];
    $price = $_POST["modprice"];

    $stmt = $connection->prepare("UPDATE products SET name=:pname, image=:img, description=:ingred, price=:prc WHERE id=:pid");
    $result = $stmt->execute(['pid' => $productid, 'pname' => $productname, 'img' => $image, 'ingred' => $ingredients, 'prc' => $price]);

    header("Location: upper_dashboard.php");
?>