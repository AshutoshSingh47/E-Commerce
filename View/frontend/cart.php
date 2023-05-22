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
                <table>
                    <thead>
                        <tr>
                            <th id="item">Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($data = $result->fetch_assoc()) {
                            $pID[$rows] = $data["pID"];
                            $sql = "SELECT ProductImage, ProductName, Price, Quantity FROM adminproducts WHERE pID='$pID[$rows]'";
                            $result2 = $conn->query($sql); ?>
                            <?php while ($data2 = $result2->fetch_assoc()) { ?>
                                <tr>
                                    <td id="product-image">
                                        <img id="item-image" src="<?= BASE_URI ?>View/images/<?= $data2["ProductImage"] ?>">
                                        <div id="item-name">
                                            <?= $data2["ProductName"] ?>
                                        </div></img>
                                    </td>
                                    <td>
                                        $<?= $data2["Price"] ?>.00
                                    </td>
                                    <td id="product-quantity">
                                        <select name="quantity" id="quantity" placeholder="3">
                                        <option value=""><?= $data["Quantity"] ?></option>
                                        <?php for ($i = 1; $i <= $data2["Quantity"]; $i++) { ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php } ?>
                                        </select>
                                    </td>
                                    <td id="product-total-price">$
                                        <?= $data["TotalPrice"] ?>.00
                                    </td>
                                </tr>
                            <?php }
                            $rows--; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="cart-total">

            </div>
            <?php include("../E-Commerce/View/frontend/footer.php"); ?>
        </div>

    </body>

    </html>

<?php } ?>