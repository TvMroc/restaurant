<?php
session_start();
if (!isset($_SESSION["user"])  || $_SESSION["role"] < 2) {
    header("Location: login.php");
    exit();
}
?>
<?php
$id = "";
$name = "";
$image = "";
$ingredients = "";
$price = "";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    $image = $_GET['image'];
    $ingredients = $_GET['ingredients'];
    $price = $_GET['price'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>restaurant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julee&family=VT323&display=swap" rel="stylesheet">
    <script src="../js/delete.js"></script>
    <script src="../js/shop.js"></script>
</head>
<body>
    <?php
    include 'header.php';
    ?>
    <div class="form-list">
        <div class="form">
            <h1>Modify products</h1>
            <form name="product" action="product_modify_logic.php" method="post">
                <div>
                    <label for="productid">Product id:</label>
                    <?php
                    echo '<input value="'.$id.'" type="text" id="productid" name="productid" placeholder="1" required>';
                    ?>
                </div>
                <div>
                    <label for="productname">Name:</label>
                    <?php
                    echo '<input value="'.$name.'" type="text" id="productname" name="productname" placeholder="pizza" required>';
                    ?>
                </div>
                <div>
                    <label for="modimage">Image:</label>
                    <?php
                    echo '<input value="'.$image.'" type="text" id="modimage" name="modimage" placeholder="pizza.png" required>';
                    ?>
                </div>
                <div>
                    <label for="modingredients">Ingredients:</label>
                    <?php
                    echo '<input value="'.$ingredients.'" type="text" id="modingredients" name="modingredients" required>';
                    ?>
                </div>
                <div>
                    <label for="modprice">Price:</label>
                    <?php
                    echo '<input value="'.$price.'" type="text" id="modprice" name="modprice" required>';
                    ?>
                </div>
                <input type="submit" value="Update">
            </form>
        </div>
        <div class="form">
            <h1>Delete products</h1>
            <form name="product" action="product_delete_logic.php" method="post">
                <div>
                    <label for="delid">Product id:</label>
                    <?php
                    echo '<input value="'.$id.'" type="text" id="delid" name="delid" placeholder="1" required>';
                    ?>
                </div>
                <input type="submit" value="delete">
            </form>
        </div>
        <div class="form">
            <h1>Create products</h1>
            <form name="product" action="product_create_logic.php" method="post">
                <div>
                    <label for="name">Name:</label>
                    <?php
                    echo '<input value="'.$name.'" type="text" id="name" name="name" placeholder="pizza" required>';
                    ?>
                </div>
                <div>
                    <label for="image">Image:</label>
                    <?php
                    echo '<input value="'.$image.'" type="text" id="image" name="image" placeholder="pizza.png" required>';
                    ?>
                </div>
                <div>
                    <label for="ingredients">Ingredients:</label>
                    <?php
                    echo '<input value="'.$ingredients.'" type="text" id="ingredients" name="ingredients" required>';
                    ?>
                </div>
                <div>
                    <label for="price">Price:</label>
                    <?php
                    echo '<input value="'.$price.'" type="text" id="price" name="price" required>';
                    ?>
                </div>
                <input type="submit" value="Create">
            </form>
        </div>
    </div>
    <input class="search" type="text" placeholder="search" id="search" onkeyup="shopSearch('product')">
    <div class="product-list">
<?php
include 'conn.php';

$sql = 'SELECT id, name, image, description, price FROM products';
$stmt = $connection->query($sql);

while ($row = $stmt->fetch()) {
    echo '<div id="' . $row['name'] . '" class="product">';
    echo '<p>' . $row['id'] . '</p>';
    echo '<p>' . $row['image'] . '</p>';
    echo '<p>' . $row['name'] . '</p><p>' . $row['description'] . '</p>';
    echo '<p>' . $row['price'] . '<p>';
    echo '<a href="upper_dashboard.php?id='.$row['id'].'&name='.$row['name'].'&image='.$row['image'].'&ingredients='.$row['description'].'&price='.$row['price'].'">Select</a>';
    echo '</div>';
}
?>
    </div>
</body>
</html>