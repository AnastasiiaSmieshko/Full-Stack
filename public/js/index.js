$(document).ready(function(){
    $("#slider").slick({
        dots: false,
        dotsClass:'slick-dots',
        prevArrow:'<div class="arrow-prev"><i class="fas fa-arrow-left"></i></div>',
        nextArrow:'<div class="arrow-next"><i class="fas fa-arrow-right"></i></div>',
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});

$(function() {
	
    var start = $("#trip").text(); 
    
    $({Value: start}).animate({Value: 100}, {
    
        duration: 500,
        easing: "linear",
        
        step: function(val) {
        
            $("#trip").html(Math.ceil(val)); 
            
        }
        
    });
    
});
$(function() {
	
    var start = $("#trаveler").text(); 
    
    $({Value: start}).animate({Value: 1000}, {
    
        duration: 600, 
        easing: "linear",
        
        step: function(val) {
        
            $("#traveler").html(Math.ceil(val)); 
            
        }
        
    });
    
});
$(function() {
	
    var start = $("#year").text(); 
    
    $({Value: start}).animate({Value: 5}, {
    
        duration: 500, 
        easing: "linear",
        
        step: function(val) {
        
            $("#year").html(Math.ceil(val)); 
            
        }
        
    });
    
});

$("#show-menu").on("click", function(){
    $("#hidden-menu").animate({
        "right": 0
    }, 500);
});

$("#hidden-menu .close").on("click", function(){
    $("#hidden-menu").animate({
        "right": "-300px"
    }, 200);
});
