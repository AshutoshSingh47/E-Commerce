<?php if (!isset($_SESSION["cID"])) {
    header("Location: http://localhost/fitnationx/signin") ?>
<?php } else {
    $customerid = $_SESSION["cID"]; ?>
    <html>

    <head>
        <title>FitNationX - Shipping Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/css/shippingDetails.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <body>
        <div class="navbar">
            <a href="<?= BASE_URI ?>"><img class="logo" src="<?= BASE_URI ?>View/images/logo4.png"></a>
            <ul class="list">
                <li class="items"><a href="<?= BASE_URI ?>">Home</a></li>
                <li class="items"><a href="<?= BASE_URI ?>cart">Cart</a></li>
                <li class="items"><a href="<?= BASE_URI ?>logout">Log out</a></li>
            </ul>
        </div>
        <div id="shippingDetails-container">
            <div id="shipping-address">
                <h1>Shipping Address</h1>
                <div id="message"></div>
                <button id="btn-add-new-address" type="submit">+ New Address</button>
                <div id="modal">
                    
                        <form id="address">
                        <span id="close">&times;</span>
                            <div id="row1">
                                <label for="houseno">Flat/House No.</label>
                                <input type="text" id="houseno" name="houseno">
                            </div>
                            <div class="row">
                                <label for="streetname">Street Name</label>
                                <textarea name="streetname" id="streetname"></textarea>
                            </div>
                            <div class="row">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city">
                            </div>
                            <div class="row">
                                <label for="state">State/Province</label>
                                <input type="text" name="state" id=state>
                            </div>
                            <div class="row">
                                <label for="country">Country</label>
                                <input type="text" name="country" id=country>
                            </div>
                            <div class="row">
                                <label for="pincode">Pincode</label>
                                <input type="text" name="pincode" id=pincode>
                            </div>
                            <button type="submit">Submit</button>
                        </form>
                    
                </div>
            </div>
            <script src="../../fitnationx/View/js/shipping-detail.js"></script>
    </body>

    </html>
<?php } ?>