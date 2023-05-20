<div class="navbar">
    <a href="<?= BASE_URI ?>"><img class="logo" src="<?= BASE_URI ?>View/images/logo4.png"></a>
    <ul class="list">
        <?php if (isset($_SESSION["cID"])) { ?>
            <li class="items"><a href="<?= BASE_URI ?>">Home</a></li>
            <li class="items"><a href="<?= BASE_URI ?>products">Products</a></li>
            <li class="items"><a href="<?= BASE_URI ?>aboutus">About Us</a></li>
            <li class="items"><a href="<?= BASE_URI ?>blogs">Blogs</a></li>
            <li class="items"><a href="<?= BASE_URI ?>cart">Cart</a></li>
            <li class="items"><a href="<?= BASE_URI ?>logout">Log out</a></li>
        <?php } else { ?>
            <li class="items"><a href="<?= BASE_URI ?>">Home</a></li>
            <li class="items"><a href="<?= BASE_URI ?>signin">Sign In</a></li>
            <li class="items"><a href="<?= BASE_URI ?>signup">Sign Up</a></li>
            <li class="items"><a href="<?= BASE_URI ?>products">Products</a></li>
            <li class="items"><a href="<?= BASE_URI ?>aboutus">About Us</a></li>
            <li class="items"><a href="<?= BASE_URI ?>blogs">Blogs</a></li>
        <?php } ?>
    </ul>
</div>