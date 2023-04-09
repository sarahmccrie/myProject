<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Page</title>
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
</head>
<body>
    <?php include('includes/header.php'); ?>
	<div class="container">
		<h1>Thank you for your donation!</h1>
		<p>Please review the information below:</p>
		<div class="splitrow">
			<div class="leftcol">
				<h2>Personal Information</h2>
				<p>Name: <span id="fname"></span> <span id="lname"></span></p>
				<p>Address: <span id="addressnum"></span> <span id="addressstreet"></span>, <span id="addresscity"></span>, <span id="addressprovince"></span>, <span id="country"></span></p>
			</div>
			<div class="rightcol">
				<h2>Payment Information</h2>
				<p>Credit Card: <span id="creditcard"></span></p>
				<p>Credit Card Number: <span id="creditcardnum"></span></p>
				<p>Total Donation: $<span id="donationamount"></span></p>
			</div>
		</div>
		<button type="button" onclick="window.print()">Print Confirmation</button>
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
		//Clear local storage
		localStorage.clear();
	</script>
    
</body>
</html>