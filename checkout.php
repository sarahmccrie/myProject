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
        Updated:      [04-09-2023] 
        Version:      1.0     
        Description:  This is my checkout page
    -->
    <link rel="stylesheet" href="css/checkout.css">
    <script src="scripts/validator.js"></script>
<title>Checkout</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <form method="post">
    <div class="splitscreen">
        <div class="sectionflexcontainer">
            <div class="infoareaitem">
                <h1 class="sectionheader">Please Enter Personal Information Below:</h1>
                <div class="labelandfield">
                    <label class="inputlabel">Name:</label>
                    <input type="text" id="fname" class="inputfield" placeholder="First Name">
                    <input type="text" id="lname" class="inputfield" placeholder="Last Name">
                </div>
                <br>
                <div class="labelandfield">
                    <label class="inputlabel">Address:</label>
                    <input type="number" id="addressnum" min="1" placeholder="1234" class="inputfield">
                    <input type="text" id="addressstreet" class="inputfield" placeholder="Main Street">
                </div>
                <br>
                <div class="labelandfield">
                    <label class="inputlabel">City:</label>
                    <input type="text" id="addresscity" class="inputfield" placeholder="Mississauga">
                    <label class="inputlabel">Province:</label>
                    <input type="text" id="addressprovince" class="inputfield" placeholder="Ontario">
                </div>
                <br>
                <label class="inputlabel">Country:</label>
                <select name="country" id="country" class="boxes" required>
                    <option value="-1" name="selectcountry">Select</option>
                    <option value="Canada">Canada</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                </select>
            </div>
            <div class="infoareaitem">
                <h1 class="sectionheader">Please Enter Payment Information Below:</h1>
                <label class="inputlabel">Credit Card:</label>
                <select name="creditcard" id="creditcard" required class="boxes">
                    <option value="-1" name="selectcountry">Select</option>
                    <option value="MasterCard">MasterCard</option>
                    <option value="Visa">Visa</option>
                    <option value="American Express">American Express</option>
                </select>
                <br>
                <label class="inputlabel">Credit Card Number:</label>
                <input type="number" class="boxes" id="creditcardnum" minlength="16" max="16">
                <br>
                <div class="labelandfield">
                    <label class="inputlabel">Please input total to confirm order:</label>
                    <input type="text" class="inputfield" id="donationamount">
                </div>
                <br>
                <button type="button" class="confirmdonation" onclick="validateAndSubmit()">Confirm Donation</button>
            </div>
        </div>
    </div>
</form> 
    <?php include('includes/footer.html'); ?>
    
</body>
</html>