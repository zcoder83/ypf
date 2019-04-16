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

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loaders").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}


var $j = jQuery.noConflict();

$j(document).ready(function() {
  
    var scrollLink = $j('.scroll');
    
    // Smooth scrolling
    scrollLink.click(function(e) {
      e.preventDefault();
      $j('body,html').animate({
        scrollTop: $j(this.hash).offset().top
      }, 1000 );
    });
    
    // Active link switching
    $j(window).scroll(function() {
      var scrollbarLocation = $j(this).scrollTop();
      
      scrollLink.each(function() {
        
        var sectionOffset = $j(this.hash).offset().top - 20;
        
        if ( sectionOffset <= scrollbarLocation ) {
          $j(this).parent().addClass('active');
          $j(this).parent().siblings().removeClass('active');
        }
      })
    })
  })



  $j(document).ready(function() {
      
      /* Every time the window is scrolled ... */
      $j(window).scroll( function(){
      
          /* Check the location of each desired element */
          $j('.hideme').each( function(i){
              
              var bottom_of_object = $j(this).position().top + $j(this).outerHeight();
              var bottom_of_window = $j(window).scrollTop() + $j(window).height();
              
              /* If the object is completely visible in the window, fade it it */
              if( bottom_of_window > bottom_of_object ){
                  
                  $j(this).animate({'opacity':'1'},1500);
                      
              }
              
          }); 
      
      });
      
  });