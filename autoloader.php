<?php
spl_autoload_register(function ($class) {
    $dir = __DIR__;
    $dir = str_replace("\\", "/", $dir);
    // echo $dir;
    $dir = "http://localhost/E-Commerce/";
    $path = $dir . str_replace("\\", "/", $class);
    echo $path;
    include("http://localhost/E-Commerce/Controller/Admin/Base.php");
});
?>