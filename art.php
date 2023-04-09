<!DOCTYPE html>
<html lang="en">
<head>
    <title>Personalized Pet Portraits</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="this is my art page">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [04-07-2023] 
        Version:      1.0     
        Description:  This is my art page
    -->
    <link rel="stylesheet" href="css/shop.css">
</head>
<body>
    <?php include('includes/header.php');?>
    <h1 class="pageheading">Personalized Pet Portraits</h1>
    
    <div class="imagecontainer">
        <?php
        //str_contains not built in to php 8 - fix for cpanel purposes
        if (!function_exists('str_contains')) {
            function str_contains($haystack, $needle){
                return (strpos($haystack, $needle) !== false);
            }
        }
            //open db connection
            require('../../mysqli_connect.php'); 
        
            $imagetag = '<img class="images" src="images/art/replaceme">';
        
            $path = 'images/art';
        
            $files = array_diff(scandir($path), array('.', '..'));
        
            foreach ($files as $thisimagename) {
                if (str_contains($thisimagename, 'Store')) { 
                    continue;
                }
                //for any images in images/art that match image_name in artitems table of db
                $query = "SELECT product_id, product_name, likes, carts FROM artitems WHERE image_name = '$thisimagename'";
                $result = mysqli_query($dbc, $query);
                $row = mysqli_fetch_array($result);
                $item_id = $row['product_id'];
                $product_name = $row['product_name'];
                $likes = $row['likes'];
                $carts = $row['carts'];
                
                //like button functionality and declaration - calls add_like.php
                $likebutton = '<form method="post" action="scripts/add_like.php">
                    <input type="hidden" name="product_id" value="' . $item_id . '">
                    <button class="likebutton" type="submit">
                    <img class="buttonimage" src="images/other/like.png">' . $likes . '</button>                    
                </form>';
                
                //cart button functionality and declaration - calls add_cart.php
                $addtocartbutton = '<form method="post" action="scripts/add_cart.php">
                    <input type="hidden" name="product_id" value="' . $item_id . '">
                    <button class="addtocartbutton" type="submit">
                    <img class="buttonimage" src="images/other/cart.png">' . $carts . '</button>                    
                </form>';
                
                $productnamediv = '<div class="productname">' . $product_name . '</div>';

                $imageitem = '<div class="imageitem">' . $productnamediv . str_replace('replaceme', $thisimagename, $imagetag) . $likebutton . $addtocartbutton . '</div>';

                //show the imageitem
                echo $imageitem; 
                
            }
        
        //close the db connection
        mysqli_close($dbc); 
        ?>
    </div>
     <?php include('includes/footer.html');?>
</body>
</html>