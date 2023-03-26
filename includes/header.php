<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $page_title; ?></title>
<link rel="stylesheet" href="css/headernav.css">
<link href="css/sticky-footer-navbar.css" rel="stylesheet">
</head>
<body>
    <nav id="navbar">
        
        <a <?php if ($_SERVER['REQUEST_URI'] == "/myProject/index.php") { ?> class="active" <?php } ?> href="index.php">Home</a>
        
        <a <?php if ($_SERVER['REQUEST_URI'] == "/myProject/shop.php") { ?> class="active" <?php } ?> href="shop.php">Shop Our Store</a>
        
        <a <?php if ($_SERVER['REQUEST_URI'] == "/myProject/about.php") { ?> class="active" <?php } ?> href="about.php">About</a>
        <a <?php if ($_SERVER['REQUEST_URI'] == "/myProject/register.php") { ?> class="active" <?php } ?> href="register.php">Register</a>
        <a <?php if ($_SERVER['REQUEST_URI'] == "/myProject/view_users.php") { ?> class="active" <?php } ?> href="view_users.php">View Users</a>
        <a <?php if ($_SERVER['REQUEST_URI'] == "/myProject/password.php") { ?> class="active" <?php } ?> href="password.php">Change Password</a>
        <a <?php if ($_SERVER['REQUEST_URI'] == "/myProject/cart.php") { ?> class="active" <?php } ?> href="cart.php">Cart</a>


    </nav>
<div class="container">

<!-- header.html -->