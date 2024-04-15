<?php
session_start();
include 'conn.php';

if (empty($_POST["delid"])) {
    header("Location: upper.php");
    exit();
}

$productid = $_POST["delid"];

$sql = "DELETE FROM products WHERE id=:pid";
$stmt = $connection->prepare($sql);
$stmt->execute(['pid' => $productid]);
header("Location: upper.php");
?>
