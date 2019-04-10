window.addEventListener('scroll', doParallax);
function doParallax(){
    var positionY = window.pageYOffset/2;
    var positionYa = window.pageYOffset/4;
    var positionYb = window.pageYOffset/8;
    var intro = document.getElementById("intro");
    intro.style.backgroundPosition = "0 -" + positionY + "px";
    var social = document.getElementById("social");
    social.style.backgroundPosition = "0 -" + positionYa + "px";
    var skill = document.getElementById("skill");
    skill.style.backgroundPosition = "0 -" + positionYb + "px";
    var contact = document.getElementById("contact");
    contact.style.backgroundPosition = "0 -" + positionYb + "px";
}