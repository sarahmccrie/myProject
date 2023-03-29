<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="this is my shop page">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [03-27-2023] 
        Version:      1.0     
        Description:  This is my shop page
    -->
    <link rel="stylesheet" href="css/shop.css">
</head>
<body>
    <?php include('includes/header.php');?>
    <div class="categorycontainer">
        <a href="art.php">
            <div class="categoryitem">
                <img class="shopcategoryimage" src="images/art/gigi.jpg">
                <h2 class="tiledescription">Personalized Art Pieces</h2>
            </div>
        </a>
        <a href="petproducts.php">
            <div class="categoryitem">
                <img class="shopcategoryimage" src="images/petproducts/cats/cat4.png">
                <h2 class="tiledescription">Pet Products</h2>
            </div>
        </a>
    </div>
    <br>
    <?php include('includes/footer.html');?>
</body>
</html>