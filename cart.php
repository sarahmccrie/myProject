<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="this is my cart page">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [04-09-2023] 
        Version:      1.0     
        Description:  This is my cart page
    -->
    <link rel="stylesheet" href="css/cart.css">
    <script src="scripts/validator.js"></script>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <div class="backing-container">
        <h1 class="pageheader">Coming Soon!</h1>
        <hr>
        <p class="subheader">Thank you for your interest in supporting us! The cart is not active yet, but for now, you can donate by clicking the button below!</p>
        <hr>
        <button class="donatebutton" onclick='location.href="checkout.php"'>Donate Now</button>
        <br>
        <br>
    </div>
    <?php include('includes/footer.html'); ?>
<script src="scripts/validator.js"></script>
</body>
</html>