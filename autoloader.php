<?php
spl_autoload_register(function ($class) {
    $dir = __DIR__;
    $dir = str_replace("\\", "/", $dir)."/";
    $path = $dir . str_replace("\\", "/", $class);
    include $path.".php";
});
?>