<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="this is my checkout page">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [03-27-2023] 
        Version:      1.0     
        Description:  This is my checkout page
    -->
    <link rel="stylesheet" href="css/checkout.css">
<title>Checkout</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <form action="checkout.php" method="post">
        <div class="splitscreen">
        <div class="sectionflexcontainer">
            <div class="infoareaitem">
                <h1 class="sectionheader">Please Enter your Personal Information below:</h1>
                <div class="labelandfield"><label class="inputlabel">Name:</label><input type="text" id="fname" class="inputfield" placeholder="first"><input id="lname" type="text" class="inputfield" placeholder="last"></div><br>
                <label class="inputlabel">Country:</label>
                <select name="country" id="country" class="boxes" required >
                    <option value="-1" name="selectcountry">Select</option>
                    <option value="Canada">Canada</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                </select>
            </div>
            <div class="infoareaitem">
                <h1 class="sectionheader">Please Enter your Payment Information below:</h1>
                <label class="inputlabel">Credit Card:</label>
                <select name="creditcard" id="creditcard" required class="boxes">
                    <option value="-1" name="selectcountry">Select</option>
                    <option value="MasterCard">MasterCard</option>
                    <option value="Visa">Visa</option>
                    <option value="American Express">American Express</option>
                </select><br>
                <div class="labelandfield"><label class="inputlabel">Total:</label><p id="displaytotal"></p></div>
                <div class="labelandfield"><label class="inputlabel">Please input total to confirm order:</label><input type="text" class="inputfield"></div>
            </div>
        </div>
            <iframe src="cartinternal.php" width="40%" height="580px"></iframe>
        </div>
    </form>
    <?php include('includes/footer.html'); ?>
    <script src="scripts/validator.js"></script>
    <!--  end php section for cart items -->
</body>
</html>