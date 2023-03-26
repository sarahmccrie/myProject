<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/shop.css">
</head>
<body>
    <?php include('includes/header.html');?>
    
    <div class="imagecontainer">
        <?php
            $addtocartbutton = '<button class="addtocartbutton" type="button">Add to Cart</button>';    
            $imageitem = '<div class="imageitem">replaceme' . $addtocartbutton . '</div>';
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