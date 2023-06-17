<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/header.css">
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/index.css">
    <link rel="stylesheet" href="<?= BASE_URI ?>View/base/footer.css">
</head>

<body>
    <?php if (isset($_SESSION["aID"])) {
        include("../FitNationX/View/Admin/header.php"); ?>
    <?php } else { ?>
        <?php include("../FitNationX/View/Admin/signIn.php");
    } ?>
</body>

</html>