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
                        <h1>Ship To</h1>

                        <div id="row3">
                            <div id="row2">
                                <label id="firstname" for="fname">First Name</label>
                                <input type="text" name="fname" id="fname" placeholder="<?=$data["FirstName"]?>">
                            </div>
                            <div id="row2">
                                <label id="lastname" for="lname">Last Name</label>
                                <input type="text" name="lname" id="lname" placeholder="<?=$data["LastName"]?>">
                            </div>
                        </div>
                        <div id="row1">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="<?=$data["Email"]?>">
                        </div>
                        <div id="row1">
                            <label for="phoneno">Phone No</label>
                            <input type="tel" name="phoneno" id="phoneno" placeholder="<?=$data["PhoneNo"]?>">
                        </div>

                        <div id="row1">
                            <label for="houseno">Flat/House No.</label>
                            <input type="text" id="houseno" name="houseno" required>
                        </div>
                        <div class="row">
                            <label for="streetname">Street Name</label>
                            <textarea name="streetname" id="streetname" required></textarea>
                        </div>
                        <div class="row">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" required>
                        </div>
                        <div class="row">
                            <label for="state">State/Province</label>
                            <input type="text" name="state" id=state required>
                        </div>
                        <div class="row">
                            <label for="country">Country</label>
                            <input type="text" name="country" id=country required>
                        </div>
                        <div class="row">
                            <label for="pincode">Pincode</label>
                            <input type="text" name="pincode" id=pincode required>
                        </div>
                        <button id="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <script src="../../fitnationx/View/js/shipping-detail.js"></script>
    </body>

    </html>
<?php } ?>