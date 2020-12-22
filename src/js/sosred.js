/*$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
            pauseOnHover: false,
            responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});*/

document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '.splide', {
      perPage: 5,
      rewind : true,
      autoplay: true
    } ).mount();
  } );


function initialize() {
      
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
  
    // Resize stuff...
    google.maps.event.addDomListener(window, "resize", function() {
      var center = map.getCenter();
      google.maps.event.trigger(map, "resize");
      map.setCenter(center); 
    });
  
  }