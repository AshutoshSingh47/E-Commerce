<?php
if (isset($_SESSION["aID"])) {
    header("Location: http://localhost/E-Commerce/admin"); ?>
<?php } else { ?>
    <html>

    <head>
        <title>Admin Sign Up</title>
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/index.css">
        <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">
    </head>

    <body>
        <div class="navbar">
            <a href="<?= BASE_URI ?>admin"><img class="logo" src="<?= BASE_URI ?>View/images/logo4.png"></a>

        </div>
        <h1>Sign Up</h1>
        <form name="registration" method="post" action="<?= BASE_URI ?>admin/adminsignup" id="registration">
            <div class="row">
                <label for="fname">First Name :</label>
                <input type="text" name="fname" id="fname" required><br><br>
            </div>
            <div class="row">
                <label for="lname">Last Name :</label>
                <input type="text" name="lname" id="lname" required><br><br>
            </div>
            <div class="row">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required><br><br>
            </div>
            <div class="row">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" required><br><br>
            </div>
            <div class="row">
                <label for="phoneno">Phone No :</label>
                <input type="tel" name="phoneno" id="phoneno" required><br><br>
            </div>
            <div class="row">
                <label for="gymname">Gym Name :</label>
                <input type="text" name="gymname" id="gymname" required><br><br>
            </div>
            <div class="row">
                <label for="address">Address :</label>
                <textarea name="address" id="address" required></textarea>
            </div>
            <button type="submit">Register</button>
        </form>
    </body>

    </html>
<?php } ?>