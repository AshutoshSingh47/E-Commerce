<?php
if (isset($_SESSION["cID"])) {
    header("Location: http://localhost/fitnationx/"); ?>
<?php } else { ?>
    <html>

    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/index.css">
    </head>

    <body>
        <div class="navbar">
            <a href="<?= BASE_URI ?>"><img class="logo" src="<?= BASE_URI ?>View/images/logo4.png"></a>
            <ul class="list">
                <li class="items"><a href="<?= BASE_URI ?>signin">Sign In</a></li>
            </ul>
        </div>
        <h1>Sign Up</h1>
        <form name="registration" method="post" action="<?= BASE_URI ?>customer/signup" id="registration">
            <div class="row">
                <label for="fname">First Name :</label>
                <input type="text" name="fname" id="fname" required><br><br>
            </div>
            <div class="row">
                <label for="lname">Last Name :</label>
                <input type="text" name="lname" id="lname" required><br><br>
            </div>
            <div class="row">
                <label for="phoneno">Phone No :</label>
                <input type="tel" name="phoneno" id="phoneno" required><br><br>
            </div>
            <div class="row">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required><br><br>
            </div>
            <div class="row">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" required><br><br>
            </div>
            <button type="submit">Register</button>
        </form>
    </body>

    </html>
<?php } ?>