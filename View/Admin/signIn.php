<html>

<head>
    <title>Admin Sign In</title>
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/index.css">
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">
</head>

<body>
    <div class="navbar">
        <a href="<?= BASE_URI ?>admin"><img class="logo" src="<?= BASE_URI ?>View/images/logo4.png"></a>
        <ul class="list">
            <li class="items"><a href="<?= BASE_URI ?>admin/signup">Sign Up</a></li>
        </ul>
    </div>
    <h1>Sign In</h1>
    <form name="registration" method="post" action="<?= BASE_URI ?>admin/adminsignin">

        <div class="row">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required><br><br>
        </div>
        <div class="row">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required><br><br>
        </div>

        <button type="submit">Log In</button>
    </form>
    <div id="forgot-password"><a id="forgot-password" href="" >Forgot Password ?</a></div>
    <?php include("../FitNationX/View/Admin/footer.php"); ?>
</body>

</html>