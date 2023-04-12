<div class="navbar">
    <a href="<?= BASE_URI ?>admin"><img class="logo" src="<?= BASE_URI ?>View/images/logo.png"></a>
    <ul class="list">
        <?php if (isset($_SESSION["aID"])) { ?>
            <li class="items"><a href="<?= BASE_URI ?>admin">Home</a></li>
            <li class="items"><a href="">Customer</a></li>
            <li class="items"><a href="<?= BASE_URI ?>admin/products">Products</a></li>
            <li class="items"><a href="">Sales</a></li>
            <li class="items"><a href="<?= BASE_URI ?>admin/logout">Log Out</a></li>
        <?php } else { ?>
            <li class="items"><a href="<?= BASE_URI ?>admin">Home</a></li>
            <li class="items"><a href="<?= BASE_URI ?>admin/signin">Sign In</a></li>
            <li class="items"><a href="<?= BASE_URI ?>admin/signup">Sign Up</a></li>
        <?php } ?>
    </ul>
</div>