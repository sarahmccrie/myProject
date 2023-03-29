
function submitAndRedirectCheckout(){
    location.href="checkout.php";
}


var frame = document.querySelector("iframe");
header = frame.contentDocument.querySelector("header");
header.remove();
footer = frame.contentDocument.querySelector("footer");
footer.remove();