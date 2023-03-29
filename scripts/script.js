//script for changing aboutimage on about page depending on which button is clicked

var maisieBtn = document.getElementById("showmaisie");
var juniBtn = document.getElementById("showjuni");
var freddieBtn = document.getElementById("showfreddie");
var aboutImage = document.querySelector(".aboutimage");

maisieBtn.addEventListener("click", function () {
  aboutImage.src = "images/other/maisie.jpg";
});

juniBtn.addEventListener("click", function () {
  aboutImage.src = "images/other/juni.jpg";
});

freddieBtn.addEventListener("click", function () {
  aboutImage.src = "images/other/freddie.jpg";
});