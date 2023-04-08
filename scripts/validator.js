function validateAndSubmit(){
    if (validate()){
        
        echo '<div class="boxarea"><h1 class="messageheader">Thank you!</h1>
        <p class="messagetext">You are now registered and will be able to login to your account from now on!</p><p><br></p></div>';

		  } 
    }
}
   
function validate(){
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var addressnum = document.getElementById('addressnum').value;
    var addressstreet = document.getElementById('addressstreet').value;
    var addresscity = document.getElementById('addresscity').value;
    var addressprovince = document.getElementById('addressprovince').value;
    var country = document.getElementById('country').value;
    var creditcard = document.getElementById('creditcard').value;
    var creditcardnum = document.getElementById('creditcardnum').value;
    var donationamount = document.getElementById('donationamount').value;

    if (fname == "" || lname == "" || addressnum == "" || addressstreet == "" || addresscity == "" || addressprovince == "" || country == "-1" || creditcard == "-1" || creditcardnum == "" || donationamount == "") {
        alert("Please ensure that all fields are filled");
        return false;
    }
}


function submitAndRedirectCheckout(){
    location.href="checkout.php";
}

