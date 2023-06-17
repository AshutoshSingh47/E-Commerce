<html>

<head>
    <title>FitNationX - Products</title>
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
    <link rel="stylesheet" href="<?= BASE_URI ?>View/css/products.css">
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">
</head>

<body>
    <div class="navbar">
        <a href="<?= BASE_URI ?>"><img class="logo" src="<?= BASE_URI ?>View/images/logo4.png"></a>
        <ul class="list">
            <?php if (isset($_SESSION["cID"])) { ?>
                <li class="items"><a href="<?= BASE_URI ?>">Home</a></li>
                <li class="items"><a href="<?= BASE_URI ?>aboutus">About Us</a></li>
                <li class="items"><a href="<?= BASE_URI ?>blogs">Blogs</a></li>
                <li class="items"><a href="<?= BASE_URI ?>cart">Cart</a></li>
                <li class="items"><a href="<?= BASE_URI ?>logout">Log out</a></li>
            <?php } else { ?>
                <li class="items"><a href="<?= BASE_URI ?>">Home</a></li>
                <li class="items"><a href="<?= BASE_URI ?>signin">Sign In</a></li>
                <li class="items"><a href="<?= BASE_URI ?>signup">Sign Up</a></li>
                <li class="items"><a href="<?= BASE_URI ?>aboutus">About Us</a></li>
                <li class="items"><a href="<?= BASE_URI ?>blogs">Blogs</a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="container">
        <?php while ($item = $result->fetch_assoc()) {
            $url = "?productid=" . $item["pID"]; ?>
            <div class="product-display">
                <img class="product-image" src="<?= BASE_URI ?>View/images/<?= $item["ProductImage"] ?>">
                <p>
                    <?= $item["ProductName"] ?>
                </p>
                <p>
                    $<?= $item["Price"] ?>
                </p>
                    <form method="post" action="<?= BASE_URI ?>productdetails<?= $url ?>">
                        <button class="button">View</button>
                    </form>
            </div>
        <?php } ?>
        <?php include("../FitNationX/View/frontend/footer.php"); ?>
    </div>
</body>

</html>