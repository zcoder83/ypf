window.addEventListener('scroll', doParallax);
function doParallax(){
    var positionY = window.pageYOffset/2;
    var intro = document.getElementById("intro");
    intro.style.backgroundPosition = "0 -" + positionY + "px";
    var social = document.getElementById("social");
    social.style.backgroundPosition = "0 -" + positionY + "px";
}