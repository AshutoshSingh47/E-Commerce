<?php
use Model\Db;
ini_set("disply_errors", 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

include("autoloader.php");

$conn=new Db();
$conn=$conn->getConnection();

define("BASE_URI", "http://localhost/fitnationx/");
$request = $_SERVER["REQUEST_URI"];
$request = str_replace("fitnationx/", "", $request);
if ($request == "/admin") {
    include("../fitnationx/View/Admin/admin.php");
} else if ($request == "/admin/signup") {
    include("../fitnationx/View/Admin/signUp.php");
} else if ($request == "/admin/logout") {
    include("../fitnationx/Controller/Admin/LogOut.php");
} else if ($request == "/admin/signin") {
    include("../fitnationx/View/Admin/signIn.php");
} else if ($request == "/admin/adminsignin") {
    include("../fitnationx/Controller/Admin/SignIn.php");
} else if ($request == "/admin/adminsignup") {
    include("../fitnationx/Controller/Admin/SignUp.php");
} else if ($request == "/admin/products") {
    include("../fitnationx/Controller/Admin/ProductList.php");
    include("../fitnationx/View/Admin/productlist.php");
} else if ($request == "/admin/addproduct") {
    include("../fitnationx/View/Admin/products.php");
} else if ($request == "/admin/adminproducts") {
    include("../fitnationx/Controller/Admin/Products.php");
} else if ($request == "/") {
    include("../fitnationx/View/frontend/home.php");
} else if ($request == "/signup") {
    include("../fitnationx/View/frontend/signUp.php");
} else if ($request == "/signin") {
    include("../fitnationx/View/frontend/signIn.php");
} else if ($request == "/logout") {
    include("../fitnationx/Controller/Frontend/LogOut.php");
} else if ($request == "/products") {
    include("../fitnationx/Controller/Frontend/Products.php");
    include("../fitnationx/View/frontend/products.php");
} else if ($request == "/aboutus") {
    include("../fitnationx/View/frontend/aboutUs.php");
} else if ($request == "/blogs") {
    include("../fitnationx/View/frontend/blogs.php");
} else if ($request == "/cart") {
    include("../fitnationx/Controller/Frontend/Cart.php");
    include("../fitnationx/View/frontend/cart.php");
} else if ($request == "/customer/signup") {
    include("../fitnationx/Controller/Frontend/SignUp.php");
} else if ($request == "/customer/signin") {
    include("../fitnationx/Controller/Frontend/SignIn.php");
}else if (stristr($request,"/productdetails")!=false) {
    include("../fitnationx/Controller/Frontend/ProductDetails.php");
    include("../fitnationx/View/frontend/productDetails.php");
}else if ($request == "/addtocart") {
    include("../fitnationx/Controller/Frontend/AddToCart.php");
}else if ($request == "/admindeleteproduct") {
    include("../fitnationx/Controller/Admin/DeleteProduct.php");
}else if ($request == "/admineditproduct") {
    include("../fitnationx/Controller/Admin/EditProduct.php");
}
?>