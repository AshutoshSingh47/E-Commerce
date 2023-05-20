<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/index.css">
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">
</head>

<body>
    <?php if (isset($_SESSION["aID"])) {
        include("../E-Commerce/View/Admin/header.php"); ?>
    <?php } else { ?>
        <?php include("../E-Commerce/View/Admin/signIn.php");
    } ?>
    <?php include("../E-Commerce/View/Admin/footer.php"); ?>
</body>

</html>