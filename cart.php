<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/cart.css">
<title>About</title>
</head>
<body>
<?php include('includes/header.php'); ?>
    <div class="cartcontainer">
        <h1 class="pageheading">Your Cart:</h1>
        
<!-- add php to put items that were added to cart into the cart: the following is an example for demonstrating css-->
        <div class="cartitemcontainer">
            <hr>
            <div class="cartitem">
                <img class="productimage" src="images/petproducts/foryou/you3.png";>
                <div class=cartiteminfo>
                    <h2 class="itemname">Item-Name</h2>
                    <p class="itemprice"><b>Item price:</b> $$</p>
                    <label><b>Quantity: </b></label><input class="quantinput" placeholder="1" min="1" type="number">
                    <br>
                    <button class="removefromcartbutton" type="button">Remove from Cart</button>
                </div>
            </div>
            <hr>
        </div>
<!--  end php section for cart items -->
    <h3 class="total">Total: $$$</h3>
    </div>
    <button class="continuetopaymentbutton" type="submit">Continue to Payment</button>
    
<?php include('includes/footer.html'); ?>
</body>
</html>