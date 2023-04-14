<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="index.php">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [03-27-2023] 
        Version:      1.0     
        Description:  This is my index page
    -->
    <link rel="stylesheet" href="css/indexabout.css">
    <link rel="icon" type="image/x-icon" href="../images/other/favicon.ico" >
</head>
<body>
    <?php include('includes/header.php');?>

        <div class="bannercard">
            <h1 class="welcomebanner">Welcome</h1>
            <button class="shopnowbutton" onclick='location.href="shop.php"'>Shop Our Store</button>

        </div>
    
    <br>

    <?php include('includes/footer.html'); ?>
    </body>
</html>