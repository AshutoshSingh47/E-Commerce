<?php
if (isset($_SESSION["aID"])) { ?>

    <html>

    <head>
        <title>Add Products</title>
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/index.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">
    </head>

    <body>
        <div class="navbar">
            <a href="<?= BASE_URI ?>admin"><img class="logo" src="<?= BASE_URI ?>View/images/logo4.png"></a>
            <ul class="list">
                <li class="items"><a href="">Customer</a></li>
                <li class="items"><a href="<?= BASE_URI ?>admin/products">Products</a></li>
                <li class="items"><a href="">Sales</a></li>
                <li class="items"><a href="<?= BASE_URI ?>admin/logout">Log Out</a></li>
            </ul>
        </div>
        <h1>Product Listing</h1>
        <form name="product_registration" method="post" action="<?= BASE_URI ?>admin/adminproducts" id="product_registration" enctype="multipart/form-data">
            <div class="row">
                <label for="pname">Product Name :</label>
                <input type="text" name="pname" id="pname" required><br><br>
            </div>
            <div class="row">
                <label for="psku">Product SKU :</label>
                <input type="text" name="psku" id="psku" required><br><br>
            </div>
            <div class="row">
                <label for="pdescription">Product Description :</label>
                <input type="text" name="pdescription" id="pdescription" required><br><br>
            </div>
            <div class="row">
                <label for="price">Price :</label>
                <input type="number" name="price" id="price" required><br><br>
            </div>
           
            <div class="row">
                <label for="quantity">Quantity :</label>
                <input type="number" name="quantity" id="quantity" required><br><br>
            </div>
            <div class="row">
                <label for="image">Product Image :</label>
                <input type="file" name="image" id="image" accept="image/*" required>
            </div>
            <button type="submit">Add Product</button>
        </form>
        <?php include("../E-Commerce/View/Admin/footer.php");?>
    </body>

    </html>
<?php } else {
    header("Location: http://localhost/E-Commerce/admin/signin");
} ?>