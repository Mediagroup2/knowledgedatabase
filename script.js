 $(document).ready(function(e) {
    //menubar//
    $('#mainNav nav ul li').mouseenter(function(){
        
        $(this).children('ul').stop(450).slideDown(100);
    });
    
    $('#mainNav nav ul li').mouseleave(function(){
        
        $(this).children('ul').stop(450).slideUp(100);
    });
    
    $('#mainNav nav ul li > ul li ul').parent('li').children('a').css({background: '#f00'});

//einde menubar//
});

  $(function() {
    $( "button" ).dialog({
      autoOpen: false,
      show: {
      effect: "blind",
      duration: 1000
      },
      hide: {
      effect: "explode",
      duration: 1000
      }
    });
 
    $( "#opener" ).click(function() {
      $( "button" ).dialog( "open" );
    });
  });



function slideSwitch() {  //Functie is slideshow
    var active = $('#slideshow IMG.active');  //Eerste foto word actief
    if ( active.length == 0 ) active = $('#slideshow IMG:last');  //Nadat de eerste foto actief is geweest krijg hij last mee van last active
    var next =  active.next().length ? active.next() //Hij gaat naar de volgende afbeelding
        : $('#slideshow IMG:first');  //
    $(active).addClass('last-active'); //Hij voegt last active toe aan je laatst gebruikte foto

    next.css({opacity: 0.0}) //Helderheid is niks
        .addClass('active') //De eerste afbeelding word active
        .animate({opacity: 2.0}, 5000, function() { // Na 1.0 opacity is de afbeelding helemaal verhelderd zodat hij naar de volgende afbeelding gaat.
            active.removeClass('active last-active'); // hij verwijderd last active.
            slideSwitch();// slidshow sluiten
        });
}

slideSwitch();
    