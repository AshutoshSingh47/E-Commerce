<?php $data = $result->fetch_assoc();
$session = 0;
if (isset($_SESSION["cID"])) {
    $session = $_SESSION["cID"];
} else {
    $session = 0;
} ?>
<html>

<head>
    <title>FitNationX - ProductDetails :
        <?= $data["ProductName"] ?>
    </title>
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
    <link rel="stylesheet" href="<?= BASE_URI ?>View/css/productdetails.css">
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="navbar">
        <a href="<?= BASE_URI ?>"><img class="logo" src="<?= BASE_URI ?>View/images/logo4.png"></a>
        <ul class="list">
            <?php if (isset($_SESSION["cID"])) { ?>
                <li class="items"><a href="<?= BASE_URI ?>">Home</a></li>
                <li class="items"><a href="<?= BASE_URI ?>products">Products</a></li>
                <li class="items"><a href="<?= BASE_URI ?>aboutus">About Us</a></li>
                <li class="items"><a href="<?= BASE_URI ?>blogs">Blogs</a></li>
                <li class="items"><a href="<?= BASE_URI ?>cart">Cart</a></li>
                <li class="items"><a href="<?= BASE_URI ?>logout">Log out</a></li>
            <?php } else { ?>
                <li class="items"><a href="<?= BASE_URI ?>">Home</a></li>
                <li class="items"><a href="<?= BASE_URI ?>signin">Sign In</a></li>
                <li class="items"><a href="<?= BASE_URI ?>signup">Sign Up</a></li>
                <li class="items"><a href="<?= BASE_URI ?>products">Products</a></li>
                <li class="items"><a href="<?= BASE_URI ?>aboutus">About Us</a></li>
                <li class="items"><a href="<?= BASE_URI ?>blogs">Blogs</a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="container">
        <img id="product-image" src="<?= BASE_URI ?>View/images/<?= $data["ProductImage"] ?>">
        <div id="description-box">
            <div id="product-name">
                <?= $data["ProductName"] ?>
            </div>
            <div id="product-attribute">
                <div id="product-price">
                    $<?= $data["Price"] ?>.00
                </div>
                <div id="product-sku">SKU :
                    <?= $data["ProductSKU"] ?>
                </div>
            </div>
            <hr>
            <div id="product-description">
                <?= $data["ProductDescription"] ?>
            </div>
            <hr>
            <div id="product-quantity">Qty</div>
            <select name="quantity" id="quantity">
                <?php for ($i = 1; $i <= $data["Quantity"]; $i++) { ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>
            </select>
            <form action="" method="post"><button id="buy-now-button" title="Buy Now" data-id="<?= $data["pID"] ?>"
                    data-session="<?= $session ?>">Buy Now</button></form>
            <form action="" method="post"><button id="add-to-cart-button" title="Add to Cart"
                    data-id="<?= $data["pID"] ?>" data-session="<?= $session ?>">Add to Cart</button></form>
        </div>
        <?php include("../FitNationX/View/frontend/footer.php"); ?>
    </div>

    <script src="../FitNationX/View/js/add-to-cart.js"></script>
    <script src="../FitNationX/View/js/buy-now.js"></script>

</body>

</html>