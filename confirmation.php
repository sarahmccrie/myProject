<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Page</title>
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
</head>
<body>
    <?php include('includes/header.php'); ?>
    <br>
    <h1 class="thankyouheader">Thank you!</h1>
    <h3 class="thankyousubheader">Hi <b><span id="fname"></span> <span id="lname"></span></b>! We really appreciate your donation!</h3>
	<div class="splitscreen">
		<div class="sectionflexcontainer">
			<div class="infoareaitem">
				<h2>Personal Information</h2>
				<p><b>Address:</b> <br>
                    <span id="addressnum"></span> <span id="addressstreet"></span><br> <span id="addresscity"></span>, <span id="addressprovince"></span>, <span id="country"></span></p>
			</div>
			<div class="infoareaitem">
				<h2>Payment Information</h2>
				<p><b>Card Type: </b><span id="creditcard"></span>
                <br>
                <b>Credit Card Number: </b>xxxx - xxxx - xxxx - xxxx </p>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		//Retrieve data from local storage and display on confirmation page
		document.getElementById('fname').innerHTML = localStorage.getItem('fname');
		document.getElementById('lname').innerHTML = localStorage.getItem('lname');
		document.getElementById('addressnum').innerHTML = localStorage.getItem('addressnum');
		document.getElementById('addressstreet').innerHTML = localStorage.getItem('addressstreet');
		document.getElementById('addresscity').innerHTML = localStorage.getItem('addresscity');
		document.getElementById('addressprovince').innerHTML = localStorage.getItem('addressprovince');
		document.getElementById('country').innerHTML = localStorage.getItem('country');
		document.getElementById('creditcard').innerHTML = localStorage.getItem('creditcard');
		document.getElementById('creditcardnum').innerHTML = localStorage.getItem('creditcardnum');
		document.getElementById('donationamount').innerHTML = localStorage.getItem('donationamount');

	</script>
    <?php include('includes/footer.html'); ?>
    
</body>
</html>