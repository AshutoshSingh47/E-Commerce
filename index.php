<?php
ini_set("disply_errors", 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

define("BASE_URI", "http://localhost/E-Commerce/");
$request = $_SERVER["REQUEST_URI"];
$request = str_replace("E-Commerce/", "", $request);
if ($request == "/admin") {
    include("../E-commerce/View/Admin/admin.php");
} else if ($request == "/admin/signup") {
    include("../E-commerce/View/Admin/signUp.php");
} else if ($request == "/admin/logout") {
    include("../E-commerce/Controller/Admin/LogOut.php");
} else if ($request == "/admin/signin") {
    include("../E-commerce/View/Admin/signIn.php");
} else if ($request == "/admin/adminsignin") {
    include("../E-Commerce/Controller/Admin/SignIn.php");
} else if ($request == "/admin/adminsignup") {
    include("../E-Commerce/Controller/Admin/SignUp.php");
} else if ($request == "/admin/products") {
    include("../E-Commerce/Controller/Admin/ProductList.php");
    include("../E-Commerce/View/Admin/productlist.php");
} else if ($request == "/admin/addproduct") {
    include("../E-Commerce/View/Admin/products.php");
} else if ($request == "/admin/adminproducts") {
    include("../E-Commerce/Controller/Admin/Products.php");
} else if ($request == "/") {
    include("../E-Commerce/View/frontend/home.php");
} else if ($request == "/signup") {
    include("../E-Commerce/View/frontend/signUp.php");
} else if ($request == "/signin") {
    include("../E-Commerce/View/frontend/signIn.php");
} else if ($request == "/logout") {
    include("../E-Commerce/Controller/Frontend/LogOut.php");
} else if ($request == "/products") {
    include("../E-Commerce/Controller/Frontend/Products.php");
    include("../E-Commerce/View/frontend/products.php");
} else if ($request == "/aboutus") {
    include("../E-Commerce/View/frontend/aboutUs.php");
} else if ($request == "/blogs") {
    include("../E-Commerce/View/frontend/blogs.php");
} else if ($request == "/cart") {
    include("../E-Commerce/Controller/Frontend/Cart.php");
    include("../E-Commerce/View/frontend/cart.php");
} else if ($request == "/customer/signup") {
    include("../E-Commerce/Controller/Frontend/SignUp.php");
} else if ($request == "/customer/signin") {
    include("../E-Commerce/Controller/Frontend/SignIn.php");
}else if (stristr($request,"/productdetails")!=false) {
    include("../E-Commerce/Controller/Frontend/ProductDetails.php");
    include("../E-Commerce/View/frontend/productDetails.php");
}else if ($request == "/addtocart") {
    include("../E-Commerce/Controller/Frontend/AddToCart.php");
}
?>