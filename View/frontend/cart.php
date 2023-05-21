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
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($data = $result->fetch_assoc()) {
                            $pID[$rows] = $data["pID"];
                            $sql = "SELECT ProductImage, ProductName, Price FROM adminproducts WHERE pID='$pID[$rows]'";
                            $result2 = $conn->query($sql);?>
                            <?php while($data2 = $result2->fetch_assoc()){ ?>
                            <tr>
                                <td><img src="<?=BASE_URI?>View/images/<?=$data2["ProductImage"]?>"></img><span><?=$data2["ProductName"]?></span></td>
                                <td><?=$data2["Price"]?></td>
                                <td><?=$data["Quantity"]?></td>
                                <td><?=$data["TotalPrice"]?></td>
                            </tr>
                            <?php }$rows--;?>
                       <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="cart-total">

            </div>
        </div>
        <?php include("../E-Commerce/View/frontend/footer.php"); ?>
    </body>

    </html>

<?php } ?>