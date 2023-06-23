<?php
if (isset($_SESSION["aID"])) { ?>
    <html>

    <head>
        <title>FitNationX | Admin | Edit Product</title>
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/index.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <body>
        <div class="navbar">
            <a href="<?= BASE_URI ?>admin"><img class="logo" src="<?= BASE_URI ?>View/images/logo4.png"></a>
            <ul class="list">
                <li class="items"><a href="<?= BASE_URI ?>admin">Home</a></li>
                <li class="items"><a href="">Customer</a></li>
                <li class="items"><a href="<?= BASE_URI ?>admin/products">Products</a></li>
                <li class="items"><a href="">Sales</a></li>
                <li class="items"><a href="<?= BASE_URI ?>admin/logout">Log out</a></li>
            </ul>
        </div>
        <h1>Edit Product</h1>
        <form name="product_edit" id="product_edit" enctype="multipart/form-data">
            <div class="row">
                <label for="pname">Product Name :</label>
                <input type="text" name="pname" id="pname" placeholder="<?= $data["ProductName"] ?>"><br><br>
            </div>
            <div class="row">
                <label for="psku">Product SKU :</label>
                <input type="text" name="psku" id="psku" placeholder="<?= $data["ProductSKU"] ?>"><br><br>
            </div>
            <div class="row">
                <label for="pdescription">Product Description :</label>
                <input type="text" name="pdescription" id="pdescription"
                    placeholder="<?= $data["ProductDescription"] ?>"><br><br>
            </div>
            <div class="row">
                <label for="price">Price :</label>
                <input type="number" name="price" id="price" placeholder="<?= $data["Price"] ?>"><br><br>
            </div>
            <div class="row">
                <label for="quantity">Quantity :</label>
                <input type="number" name="quantity" id="quantity" placeholder="<?= $data["Quantity"] ?>"><br><br>
            </div>
            <div class="row">
                <label for="image">Product Image :</label>
                <input type="file" name="image" id="image" accept="image/*" placeholder="<?= $data["ProductImage"] ?>">
            </div>
            <button id="update-btn" type="submit" data-productid="<?= $productid ?>">Update</button>
        </form>
        <script src="../../FitNationX/View/js/admin-edit-product.js"></script>
    </body>

    </html>
<?php } else {
    header("Location: http://localhost/fitnationx/admin/signin");
} ?>