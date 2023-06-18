<?php
if (isset($_SESSION["aID"])) { ?>

    <html>

    <head>
        <title>Admin Products</title>
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/css/productlist.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
        <form action="<?= BASE_URI ?>admin/addproduct" method="post"><button id="add-product" type="submit">Add
                Product</button></form>

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
                        <td class="cell"><img class="productImage"
                                src="<?= BASE_URI ?>View/images/<?= $item["ProductImage"] ?>"></img></td>
                        <td class="cell">
                            <?= $item["ProductName"] ?>
                        </td>
                        <td class="cell">
                            <?= $item["ProductSKU"] ?>
                        </td>
                        <td class="cell">
                            <?= $item["ProductDescription"] ?>
                        </td>
                        <td class="cell">
                            $<?= $item["Price"] ?>
                        </td>
                        <td class="cell">
                            <?= $item["Quantity"] ?>
                        </td>
                        <td class="cell2">
                            <button class="delete-button" type="submit" data-productid="<?= $item["pID"] ?>">Delete</button>
                        </td>
                        <td class="cell2">
                            <button class="edit-button" type="submit" data-productid="<?= $item["pID"] ?>">Edit</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <script src="../../FitNationX/View/js/admin-delete-product.js"></script>
    </body>

    </html>
<?php } else {
    header("Location: http://localhost/fitnationx/admin/signin");
} ?>