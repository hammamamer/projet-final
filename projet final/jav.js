
$(document).ready(function(){
    
        $(".slide2").css("transform","translate(200px,0)");
        $(".slide2").css("opacity", 1);

    });

$(document).ready(function(){
   
        $(".slide3").css("transform","translate(200px,0)");
        $(".slide3").css("opacity", 1);

    });

$(document).ready(function(){
        $(".slide4").hover(function()
        {
             $(".slide4").css("transform","translate(200px,0)");
        $(".slide4").css("opacity", 1);
        })
       

    });

$(document).ready(function(){
   
        $(".slide5").css("transform","translate(200px,0)");
        $(".slide5").css("opacity", 1);

    });

$(document).ready(function(){
        
        $(".slide6").css("transform","translate(200px,0)");
        $(".slide6").css("opacity", 1);

    });

$(document).ready(function(){
    
        $(".slide7").css("transform","translate(200px,0)");
        $(".slide7").css("opacity", 1);

    });

$(document).ready(function(){
    
        $(".slide8").css("transform","translate(200px,0)");
        $(".slide8").css("opacity", 1);

    });

$(document).ready(function(){
    
        $(".slide9").css("transform","translate(200px,0)");
        $(".slide9").css("opacity", 1);

    });

$(document).ready(function(){
    
        $(".slide10").css("transform","translate(200px,0)");
        $(".slide10").css("opacity", 1);

    });
;
$(document).ready(function(){
    
        $(".slide11").css("transform","translate(200px,0)");
        $(".slide11").css("opacity", 1);

    });

// Sticky Header
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".top-nav").addClass("light-header");
    } else {
        $(".top-nav").removeClass("light-header");
    }
});

// Year for copy content
$(function(){
var theYear = new Date().getFullYear();
$('#year').html(theYear);
});