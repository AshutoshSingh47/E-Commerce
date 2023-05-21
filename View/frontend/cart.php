<?php if (!isset($_SESSION["cID"])) {
    header("Location: http://localhost/E-Commerce/signin") ?>
<?php } else { ?>
    <html>

    <head>
        <title>FitNationX - Cart</title>
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/css/cart.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">


    </head>

    <body>
        <div class="navbar">
            <a href="<?= BASE_URI ?>"><img class="logo" src="<?= BASE_URI ?>View/images/logo4.png"></a>
            <ul class="list">
                <li class="items"><a href="<?= BASE_URI ?>">Home</a></li>
                <li class="items"><a href="<?= BASE_URI ?>products">Products</a></li>
                <li class="items"><a href="<?= BASE_URI ?>logout">Log out</a></li>
            </ul>
        </div>
        <div id="cart-container">
            <div id="cart-table">

            </div>
            <div id="cart-total">

            </div>
        </div>
        <?php include("../E-Commerce/View/frontend/footer.php"); ?>
    </body>

    </html>

<?php } ?>