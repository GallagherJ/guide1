$(document).on('pageinit', "#event_page", function() {

});


$( document ).on( "swiperight", "#event_page", function(){window.history.back()});
$( document ).on( "swiperight", "#venue_page", function(){window.history.back()});


$(document).on('pageinit', "#landing_page", function() {

});


$(document).on('pageinit', function(){  
setResponsive();
});



function goto(page, trans, rev){ ///params are which page to go to, which transition to use, and whether the transition should be reversed or not
    $("body").pagecontainer("change", page);
    alert('goto'+page+trans+rev);
}




function setResponsive(){////sets the dimensions of elements based on device width and height, called after new elements added to DOM

}


var window_width = $(window).width();
function vw(percent){ ////returns the pixel measurements for a certain percentage of the screen width like css vw
  return (window_width * percent)/100;
}

var window_height = $(window).height();
function vh(percent){ ////returns the pixel measurements for a certain percentage of the screen height like css vw
  return (window_height * percent)/100;
}