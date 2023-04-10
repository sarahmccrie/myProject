//call validate() function, and submit if can validate
function validateAndSubmit(){
    if(validate()){
        window.location.href = 'confirmation.php';
    }
    else {
        return;
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
  
    if (fname == "" || lname == "" || addressnum == "" || addressstreet == "" || addresscity == "" || addressprovince == "" || country == "-1" || creditcard == "-1" || creditcardnum == "") {
        alert("Please ensure that all fields are filled");
        return false;
    }
    else {
        localStorage.setItem('fname', fname);
        localStorage.setItem('lname', lname);
        localStorage.setItem('addressnum', addressnum);
        localStorage.setItem('addressstreet', addressstreet);
        localStorage.setItem('addresscity', addresscity);
        localStorage.setItem('addressprovince', addressprovince);
        localStorage.setItem('country', country);
        localStorage.setItem('creditcard', creditcard);
        localStorage.setItem('creditcardnum', creditcardnum);
        localStorage.setItem('donationamount', document.getElementById('donationamount').innerHTML);
        return true;
    }
}
