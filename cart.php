<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="this is my cart page">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [03-27-2023] 
        Version:      1.0     
        Description:  This is my cart page
    -->
    <link rel="stylesheet" href="css/cart.css">
    <script src="scripts/validator.js"></script>
<title>Cart</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <?php include('cartinternal.php'); ?>
    <button class="continuetopaymentbutton" type="button" onclick="submitAndRedirectCheckout()">Continue to Payment</button>
   
    <?php include('includes/footer.html'); ?>
<script src="scripts/validator.js"></script>
</body>
</html>