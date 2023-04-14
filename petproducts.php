<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pet Products</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="petproducts.php">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [04-09-2023] 
        Version:      1.0     
        Description:  This is my petproducts page
    -->
    <link rel="stylesheet" href="css/shop.css">
    <link rel="icon" type="image/x-icon" href="../images/other/favicon.ico" >
</head>
<body>
<?php include('includes/header.php');?>
<div class="allproductsarea">
    <div class="catproducts">
        <h2 class="sectionlabel">Cat Products</h2>
        <div class="imagecontainer">
        <?php
            //str_contains not built in to php 8 - fix for cpanel purposes
            if (!function_exists('str_contains')) {
            function str_contains($haystack, $needle){
                return (strpos($haystack, $needle) !== false);
            }
        }
            //connect to the db
            require('../../mysqli_connect.php'); 
        
            $imagetag = '<img class="images" src="images/petproducts/cats/replaceme">';
        
            $path = 'images/petproducts/cats';
        
            $files = array_diff(scandir($path), array('.', '..'));
        
            foreach ($files as $thisimagename) {
                //prevent hidden files like DS.Store from being displayed
                if (str_contains($thisimagename, 'Store')) { 
                    continue;
                }
                //for any images in images/art that match image_name in cat_products table of db
                $query = "SELECT product_id, product_name, likes, carts FROM cat_products WHERE image_name = '$thisimagename'";
                $result = mysqli_query($dbc, $query);
                $row = mysqli_fetch_array($result);
                $item_id = $row['product_id'];
                $product_name = $row['product_name'];
                $likes = $row['likes'];
                $carts = $row['carts'];
                
                //like button functionality - calls add_like.php to communicate with db
                $likebutton = '<form method="post" action="scripts/add_like_cats.php">
                    <input type="hidden" name="product_id" value="' . $item_id . '">
                    <button class="likebutton" type="submit">
                    <img class="buttonimage" src="images/other/like.png">' . $likes . '</button>                    
                </form>';
                
                //cart button functionality - calls add_cart.php to communicate with db
                $addtocartbutton = '<form method="post" action="scripts/add_cart_cats.php">
                    <input type="hidden" name="product_id" value="' . $item_id . '">
                    <button class="addtocartbutton" type="submit">
                    <img class="buttonimage" src="images/other/cart.png">' . $carts . '</button>                    
                </form>';
                
                $productnamediv = '<div class="productname">' . $product_name . '</div>';

                $imageitem = '<div class="imageitem">' . $productnamediv . str_replace('replaceme', $thisimagename, $imagetag) . $likebutton . $addtocartbutton . '</div>';

                //now show the image item
                echo $imageitem; 
            }

        //close db connection
        mysqli_close($dbc); 
        ?>
        </div>
    </div>
    <hr>
    <br>
    <div class="dogproducts">
        <h2 class="sectionlabel">Dog Products</h2>
        <div class="imagecontainer">
        <?php
            //connect to db
            require('../../mysqli_connect.php'); 
        
            $imagetag = '<img class="images" src="images/petproducts/dogs/replaceme">';
        
            $path = 'images/petproducts/dogs';
        
            $files = array_diff(scandir($path), array('.', '..'));
        
            foreach ($files as $thisimagename) {
                
                if (str_contains($thisimagename, 'Store')) { 
                    continue;
                }
                //for any images in images/art that match image_name in dog_products table of db
                $query = "SELECT product_id, product_name, likes, carts FROM dog_products WHERE image_name = '$thisimagename'";
                $result = mysqli_query($dbc, $query);
                $row = mysqli_fetch_array($result);
                $item_id = $row['product_id'];
                $product_name = $row['product_name'];
                $likes = $row['likes'];
                $carts = $row['carts'];
                
                //like button functionality
                $likebutton = '<form method="post" action="scripts/add_like_dogs.php">
                    <input type="hidden" name="product_id" value="' . $item_id . '">
                    <button class="likebutton" type="submit">
                    <img class="buttonimage" src="images/other/like.png">' . $likes . '</button>                    
                </form>';
                
                //cart button functionality
                $addtocartbutton = '<form method="post" action="scripts/add_cart_dogs.php">
                    <input type="hidden" name="product_id" value="' . $item_id . '">
                    <button class="addtocartbutton" type="submit">
                    <img class="buttonimage" src="images/other/cart.png">' . $carts . '</button>                    
                </form>';
                
                $productnamediv = '<div class="productname">' . $product_name . '</div>';

                $imageitem = '<div class="imageitem">' . $productnamediv . str_replace('replaceme', $thisimagename, $imagetag) . $likebutton . $addtocartbutton . '</div>';

                //show the image item
                echo $imageitem; 
            }

        //close db
        mysqli_close($dbc); 
        ?>
        </div>
    </div>
    <hr>
    <br> 
    <div class="foryou">
        <h2 class="sectionlabel">Products for You</h2>
        <div class="imagecontainer">
        <?php
            //connect to db
            require('../../mysqli_connect.php'); 
        
            $imagetag = '<img class="images" src="images/petproducts/foryou/replaceme">';
        
            $path = 'images/petproducts/foryou';
        
            $files = array_diff(scandir($path), array('.', '..'));
        
            foreach ($files as $thisimagename) {
                if (str_contains($thisimagename, 'Store')) { 
                    continue;
                }
                //for any images in images/art that match image_name in foryou_products table of db
                $query = "SELECT product_id, product_name, likes, carts FROM foryou_products WHERE image_name = '$thisimagename'";
                $result = mysqli_query($dbc, $query);
                $row = mysqli_fetch_array($result);
                $item_id = $row['product_id'];
                $product_name = $row['product_name'];
                $likes = $row['likes'];
                $carts = $row['carts'];
                
                //like button functionality
                $likebutton = '<form method="post" action="scripts/add_like_foryou.php">
                    <input type="hidden" name="product_id" value="' . $item_id . '">
                    <button class="likebutton" type="submit">
                    <img class="buttonimage" src="images/other/like.png">' . $likes . '</button>                    
                </form>';
                
                //cart button functionality
                $addtocartbutton = '<form method="post" action="scripts/add_cart_foryou.php">
                    <input type="hidden" name="product_id" value="' . $item_id . '">
                    <button class="addtocartbutton" type="submit">
                    <img class="buttonimage" src="images/other/cart.png">' . $carts . '</button>                    
                </form>';
                
                $productnamediv = '<div class="productname">' . $product_name . '</div>';

                $imageitem = '<div class="imageitem">' . $productnamediv . str_replace('replaceme', $thisimagename, $imagetag) . $likebutton . $addtocartbutton . '</div>';

                //show the image item
                echo $imageitem; 
            }
        
        //close db
        mysqli_close($dbc); 
        ?>
        </div>
    </div>
    </div>
    <?php include('includes/footer.html');?>
</body>
</html>