<?php if (!isset($_SESSION["cID"])) {
    header("Location: http://localhost/fitnationx/signin") ?>
<?php } else {
    $customerid = $_SESSION["cID"]; ?>
    <html>

    <head>
        <title>FitNationX - Cart</title>
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/css/cart.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                        <?php $orderTotal = 0;
                        while ($data = $result->fetch_assoc()) {
                            $pID[$rows] = $data["pID"];
                            $orderTotal += $data["TotalPrice"];
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
                                        <select name="quantity" class="quantity" data-productid="<?= $data["pID"] ?>"
                                            data-customerid="<?= $customerid ?>">
                                            <option value="<?= $data["Quantity"] ?>"><?= $data["Quantity"] ?></option>
                                            <?php for ($i = 1; $i <= $data2["Quantity"]; $i++) { ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td id="product-total-price">
                                        <span id="product-price"></span>
                                        $<?= $data["TotalPrice"] ?>.00</span>
                                        <button class="delete-button" type="submit" data-cartid="<?= $data["cartID"] ?>"
                                            data-customerid=<?= $customerid ?>>Delete</button>
                                    </td>
                                </tr>
                            <?php }
                            $rows--; ?>
                        <?php } ?>
                    </tbody>
                </table>
                <button id="update-cart">Update Cart</button>
            </div>
            <div id="cart-total">
                <span id="cart-total-heading">Summary</span>
                <hr>
                <div id="sub-total">
                    <span>Subtotal</span>
                    <span id="">
                        $<?= $orderTotal ?>.00
                    </span>
                </div>
                <hr>
                <div id="order-total">
                    <span id="order-total-title">Order Total</span>
                    <span id="order-total-value">
                        $<?= $orderTotal ?>.00
                    </span>
                </div>
                <button id="proceed-to-checkout-button" title="Proceed To Checkout">Proceed to Checkout</button>
            </div>
        </div>
        <script src="../FitNationX/View/js/cart.js"></script>
        <script src="../FitNationX/View/js/delete-product-cart.js"></script>
    </body>

    </html>

<?php } ?>