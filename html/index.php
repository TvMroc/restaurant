
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>restaurant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julee&family=VT323&display=swap" rel="stylesheet">
    <script src="shop.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./images/pizza-logo.png">
        </div>
        <div class="nav">
            <a>Home</a>
            <a>Menu</a>
            <a>About</a>
            <div class="spacer"></div>
            <a href="pages/login.php">Login</a>
        </div>
    </header>
    <div class="container">
        <div class="info">
            <div class="pizza">
                <p class="pizza-txt">Discover pizza perfection at our restaurant, where every bite is a delight!</p>
            </div>
        </div>
        <div class="shop">
            
<?php
include 'pages/conn.php';

$sql = 'SELECT id, name, image, description FROM products';
$stmt = $connection->query($sql);

while ($row = $stmt->fetch()) {
    echo '<div class="shop-item">';
    echo '<img src="../images/' . $row['image'] . '">';
    echo $row['name'] . $row['description'];
    echo '€' . $row['image'];
    echo '</div>';
}
?>
        </div>
    </div>
</body>
</html>