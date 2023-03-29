<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="this is my cartinternal">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [03-29-2023] 
        Version:      1.0     
        Description:  This is the inner section of the cart excluding header and footer
    -->
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="css/cart.css">
</head> 
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
    
    