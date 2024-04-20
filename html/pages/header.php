<header>
    <div class="logo">
        <img src="../images/pizza-logo.png">
    </div>
    <div class="nav">
        <a href="dashboard.php">Home</a>
        <a>Menu</a>
        <a>About</a>
        <?php
        if (isset($_SESSION)) {
            if ($_SESSION["role"] > 2) {
                echo '<a href="upper_dashboard.php">Manage</a>';
            }
            echo '<div class="spacer"></div>';
            if (isset($_SESSION["user"])) {
                echo '<a href="account.php">Account</a>';
            }
        } else {
            echo '<div class="spacer"></div>';
            echo '<a href="pages/login.php">Login</a>';
        }
        ?>
    </div>
</header>