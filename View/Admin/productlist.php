<?php
if (isset($_SESSION["aID"])) { ?>

    <html>

    <head>
        <title>Admin Products</title>
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/css/productlist.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">
    </head>

    <body>
        <div class="navbar">
            <a href="<?= BASE_URI ?>admin"><img class="logo" src="<?= BASE_URI ?>View/images/logo4.png"></a>
            <ul class="list">
            <li class="items"><a href="<?= BASE_URI ?>admin">Home</a></li>
                <li class="items"><a href="">Customer</a></li>
                <li class="items"><a href="">Sales</a></li>
                <li class="items"><a href="<?= BASE_URI ?>admin/logout">Log out</a></li>
            </ul>
        </div>
        <h1>Product Listing</h1>
        <form action="<?= BASE_URI ?>admin/addproduct" method="post"><button type="submit">Add Product</button></form>

        <table class="productListing">
            <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product SKU</th>
                    <th>Product Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($item = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><img class="productImage" src="<?= BASE_URI ?>View/images/<?= $item["ProductImage"] ?>"></img></td>
                        <td>
                            <?= $item["ProductName"] ?>
                        </td>
                        <td>
                            <?= $item["ProductSKU"] ?>
                        </td>
                        <td>
                            <?= $item["ProductDescription"] ?>
                        </td>
                        <td>
                            $<?= $item["Price"] ?>
                        </td>
                        <td>
                            <?= $item["Quantity"] ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php include("../E-Commerce/View/Admin/footer.php");?>
    </body>

    </html>
<?php } else {
    header("Location: http://localhost/E-Commerce/admin/signin");
} ?>