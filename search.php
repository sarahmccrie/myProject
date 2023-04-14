<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="search.php">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [04-08-2023] 
        Version:      1.0     
        Description:  This is my search page
    -->
    <link rel="stylesheet" type="text/css" href="css/shop.css">
</head>
<body>
    <?php include('includes/header.php'); 
    if (!function_exists('str_contains')) {
        function str_contains($haystack, $needle){
            return (strpos($haystack, $needle) !== false);
        }
    }
    echo '<h3>Search Results: </h3>';
    ?>
    <div class="imagecontainer">
    <?php
    //connect to db
    require('../../mysqli_connect.php'); 
        
    $matches_found = false;
        
    //for artitems table in db
    if(isset($_GET['search'])) {
        $search = mysqli_real_escape_string($dbc, $_GET['search']);
        $query = "SELECT * FROM artitems WHERE product_name LIKE '%$search%' OR tags LIKE '%$search%'";
        $result = mysqli_query($dbc, $query);

        $path = 'images/art';
        $files = array_diff(scandir($path), array('.', '..'));

//        if(mysqli_num_rows($result) == 0) {
//            echo "<div class='nomatch'><h2>No matches found.</h2><br><h4>Please try a different search query, for example: try searching 'dog'.</div>";
//        } else {
        if(mysqli_num_rows($result) > 0) {
            $matches_found = true;
            while($row = mysqli_fetch_array($result)) {
                $item_id = $row['product_id'];
                $product_name = $row['product_name'];
                $likes = $row['likes'];
                $carts = $row['carts'];

                foreach ($files as $thisimagename) {
                    if (str_contains($thisimagename, $row['image_name'])) { 
                        $image_name = $thisimagename;
                        break;
                    }
                }

                $likebutton = '<form method="post" action="scripts/add_like.php">
                    <input type="hidden" name="product_id" value="' . $item_id . '">
                    <button class="likebutton" type="submit">
                    <img class="buttonimage" src="images/other/like.png">' . $likes . '</button>                    
                </form>';

                $addtocartbutton = '<form method="post" action="scripts/add_cart.php">
                    <input type="hidden" name="product_id" value="' . $item_id . '">
                    <button class="addtocartbutton" type="submit">
                    <img class="buttonimage" src="images/other/cart.png">' . $carts . '</button>                    
                </form>';

                $productnamediv = '<div class="productname">' . $product_name . '</div>';

                $imageitem = '<div class="imageitem">' . $productnamediv . '<img class="images" src="images/art/' . $image_name . '">' . $likebutton . $addtocartbutton . '</div>';

                echo $imageitem; 
            }
        }
    }

    if(isset($_GET['search'])) {
        $search = mysqli_real_escape_string($dbc, $_GET['search']);
        $query = "SELECT * FROM cat_products WHERE product_name LIKE '%$search%'";
        $result = mysqli_query($dbc, $query);

        $path = 'images/petproducts/cats';
        $files = array_diff(scandir($path), array('.', '..'));

        if(mysqli_num_rows($result) > 0) {
            $matches_found = true;
            while($row = mysqli_fetch_array($result)) {
                $item_id = $row['product_id'];
                $product_name = $row['product_name'];
                $likes = $row['likes'];
                $carts = $row['carts'];
                $image_name = $row['image_name'];

                foreach ($files as $thisimagename) {
                    if (str_contains($thisimagename, $image_name)) { 
                        $image_name = $thisimagename;
                        break;
                    }
                }

                $likebutton = '<form method="post" action="scripts/add_like.php">
                <input type="hidden" name="product_id" value="' . $item_id . '">
                <button class="likebutton" type="submit">
                <img class="buttonimage" src="images/other/like.png">' . $likes . '</button>                    
                </form>';

                $addtocartbutton = '<form method="post" action="scripts/add_cart.php">
                <input type="hidden" name="product_id" value="' . $item_id . '">
                <button class="addtocartbutton" type="submit">
                <img class="buttonimage" src="images/other/cart.png">' . $carts . '</button>                    
                </form>';

                $productnamediv = '<div class="productname">' . $product_name . '</div>';

                $imageitem = '<div class="imageitem">' . $productnamediv . '<img class="images" src="images/petproducts/cats/' . $image_name . '">' . $likebutton . $addtocartbutton . '</div>';

                echo $imageitem; 
            }
        }
    }
    if(isset($_GET['search'])) {
        $search = mysqli_real_escape_string($dbc, $_GET['search']);
        $query = "SELECT * FROM dog_products WHERE product_name LIKE '%$search%'";
        $result = mysqli_query($dbc, $query);

        $path = 'images/petproducts/dogs';
        $files = array_diff(scandir($path), array('.', '..'));

        if(mysqli_num_rows($result) > 0) {
            $matches_found = true;
            while($row = mysqli_fetch_array($result)) {
                $item_id = $row['product_id'];
                $product_name = $row['product_name'];
                $likes = $row['likes'];
                $carts = $row['carts'];
                $image_name = $row['image_name'];

                foreach ($files as $thisimagename) {
                    if (str_contains($thisimagename, $image_name)) { 
                        $image_name = $thisimagename;
                        break;
                    }
                }   

                $likebutton = '<form method="post"  action="scripts/add_like.php">
                <input type="hidden" name="product_id" value="' . $item_id . '">
                <button class="likebutton" type="submit">
                <img class="buttonimage" src="images/other/like.png">' . $likes . '</button>                    
                </form>';

                $addtocartbutton = '<form method="post" action="scripts/add_cart.php">
                <input type="hidden" name="product_id" value="' . $item_id . '">
                <button class="addtocartbutton" type="submit">
                <img class="buttonimage" src="images/other/cart.png">' . $carts . '</button>                    
                </form>';

                $productnamediv = '<div class="productname">' . $product_name . '</div>';

                $imageitem = '<div class="imageitem">' . $productnamediv . '<img class="images" src="images/petproducts/dogs/' . $image_name . '">' . $likebutton . $addtocartbutton . '</div>';

                echo $imageitem; 
            }
        }
    }
   
    require('../../mysqli_connect.php'); 
    if(isset($_GET['search'])) {
        $search = mysqli_real_escape_string($dbc, $_GET['search']);
        $query = "SELECT * FROM foryou_products WHERE product_name LIKE '%$search%'";
        $result = mysqli_query($dbc, $query);

        $path = 'images/petproducts/foryou';
        $files = array_diff(scandir($path), array('.', '..'));

        if(mysqli_num_rows($result) > 0) {
            $matches_found = true;
            while($row = mysqli_fetch_array($result)) {
                $item_id = $row['product_id'];
                $product_name = $row['product_name'];
                $likes = $row['likes'];
                $carts = $row['carts'];
                $image_name = $row['image_name'];

                foreach ($files as $thisimagename) {
                    if (str_contains($thisimagename, $image_name)) { 
                        $image_name = $thisimagename;
                        break;
                    }
                }

                $likebutton = '<form method="post" action="scripts/add_like.php">
                <input type="hidden" name="product_id" value="' . $item_id . '">
                <button class="likebutton" type="submit">
                <img class="buttonimage" src="images/other/like.png">' . $likes . '</button>                    
                </form>';

                $addtocartbutton = '<form method="post" action="scripts/add_cart.php">
                <input type="hidden" name="product_id" value="' . $item_id . '">
                <button class="addtocartbutton" type="submit">
                <img class="buttonimage" src="images/other/cart.png">' . $carts . '</button>                    
                </form>';

                $productnamediv = '<div class="productname">' . $product_name . '</div>';

                $imageitem = '<div class="imageitem">' . $productnamediv . '<img class="images" src="images/petproducts/foryou/' . $image_name . '">' . $likebutton . $addtocartbutton . '</div>';

                echo $imageitem; 
            }
        }
        //close db connection
        mysqli_close($dbc); 
    }
        if(!$matches_found) {
    echo "<div class='nomatch'><h2>No matches found.</h2><br><h4>Please try a different search query, for example: try searching 'dog'.</div>";
}
        
        
    ?>
    </div>
    <?php include('includes/footer.html'); ?>
</body>