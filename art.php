<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/shop.css">
</head>
<body>
    <?php include('includes/header.php');?>
    <h1 class="pageheading">Personalized Pet Portraits</h1>
    
    <div class="imagecontainer">
        <?php
            $addtocartbutton = '<button class="addtocartbutton" type="button">
            <img class="buttonimage" src="images/other/cart.png"></button>'; 
            $likebutton = '<button class="likebutton" type="button"><img class="buttonimage" src="images/other/like.png"></button>';
            $imageitem = '<div class="imageitem">replaceme' . $likebutton . $addtocartbutton . '</div>';
            $imagetag = '<img class="images" src="images/art/replaceme">';

            $path = 'images/art';
            $files = array_diff(scandir($path), array('.', '..'));
            foreach ($files as $thisimagename) {
                if (str_contains($thisimagename, 'Store')) { 
                    continue;
                }
            
                $theimage = str_replace('replaceme', $thisimagename, $imagetag);
                $theimageitem = str_replace('replaceme', $theimage, $imageitem);
                echo $theimageitem;
               
            }
        ?>
        
    </div>
     <?php include('includes/footer.html');?>
</body>
</html>