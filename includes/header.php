<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [04-10-2023] 
        Version:      1.0     
        Description:  This is my header to be used on all pages
    -->
    <title><?php echo $page_title; ?></title>
    <link rel="icon" href="../../../favicon.ico" type="image/icon type">
    <link rel="stylesheet" href="css/headernav.css">
</head>
<body>
    <nav id="navbar">
        <a <?php if ($_SERVER['REQUEST_URI'] == "/project/myProject/index.php") { ?> class="active" <?php } ?> href="index.php">Home</a>
        
        <a <?php if ($_SERVER['REQUEST_URI'] == "/project/myProject/shop.php") { ?> class="active" <?php } ?> id= "dropdown" href="shop.php">Shop Our Store</a>
        
        <a <?php if ($_SERVER['REQUEST_URI'] == "/project/myProject/about.php") { ?> class="active" <?php } ?> href="about.php">About</a>
        
        <a <?php if ($_SERVER['REQUEST_URI'] == "/project/myProject/register.php") { ?> class="active" <?php } ?> href="register.php">Register</a>
        
        <a <?php if ($_SERVER['REQUEST_URI'] == "/myProject/view_users.php") { ?> class="active" <?php } ?> href="view_users.php">Users</a>
        
        <a <?php if ($_SERVER['REQUEST_URI'] == "/project/myProject/password.php") { ?> class="active" <?php } ?> href="password.php">Password</a>
        
        <div class="rightfloatsection">
            <div class="navbarsearch">

                <form method="get" action="search.php">
                    <input class="searchbarforinput" type="text" placeholder="dog" name="search" id="search">
                    <button class="gobutton" type="submit" name="search_button" value="search">Go</button>
                </form>
            </div>

            <a <?php if ($_SERVER['REQUEST_URI'] == "/project/myProject/cart.php") { ?> class="activecart" <?php } ?> id="cartnavicon" href="cart.php"><img class="cartnaviconimage" src="images/other/cart.png"></a>
        </div>
    </nav>
<div class="container">

<!-- header.html -->