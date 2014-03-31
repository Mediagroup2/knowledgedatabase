$(document).ready(function(e) {
    //menubar//
//menubar dicht houden door de functie hide//
//hide= Verbergt een element. De input is dan wel hetzelfde als bij show()//
    $('#mainNav nav ul li ul').hide();
    
//mouseenter=de muis van de gebruiker over een bepaald element heen gaat//
//show=Laat het verborgen element zien//
//slidedown= is een functie die een element weergeeft doordat het dan naar beneden word geschoven//
    $('#mainNav nav ul li').mouseenter(function(){
		$(this).children('ul').show();
        $(this).children('ul').stop(450).slideDown(50);
    });
//mouseleave=de muis van de gebruiker uit een bepaald element gaat//
//slideup= is een functie die een element verbergt doordat er dan naar boven word geschoven//
//children=Dit zijn de “kinderen” van het element waar je op zit.//
    $('#mainNav nav ul li').mouseleave(function(){
        $(this).children('ul').stop(450).slideUp(300);
    });
    
    $('#mainNav nav ul li > ul li ul').parent('li').children('a').css({background: '#f00'});

//einde menubar//
});

//Voeg toe button//
$(function() {
    $( "#dialog" ).dialog({
//autopen is false, zodat die niet automatisch open gaat//
//effect is toegevoegd met een explode//
//duration is hoe land die erover duurt om het te sluiten of het openen//
      autoOpen: false,
      show: {
      effect: "explode",
      duration: 1000
          
      },
      hide: {
      effect: "explode",
      duration: 1000
      }
    });
 //als je op de button opener klikt. dan word de dailog geopent//
    $( "#opener" ).click(function() {
    $( "#dialog" ).dialog( "open" );
    });
  });
//Einde voeg toe button//


//Voeg toe button//
$(function() {
    $( "#dialog2" ).dialog({
      autoOpen: false,
      show: {
      effect: "explode",
      duration: 1000
          
      },
      hide: {
      effect: "explode",
      duration: 1000
      }
    });
 
    $( "#toevoeg1" ).click(function() {
    $( "#dialog2" ).dialog( "open" );
    
//    $("#dialog").hide('complete hide');
    });
  });
//Einde voeg toe button//

//Voeg toe button//
$(function() {
    $( "#dialog3" ).dialog({
      autoOpen: false,
      show: {
      effect: "explode",
      duration: 1000
          
      },
      hide: {
      effect: "explode",
      duration: 1000
      }
    });
 
    $( "#toevoeg2" ).click(function() {
    $( "#dialog3" ).dialog( "open" );
    
//    $("#dialog").hide('complete hide');
    });
  });
//Einde voeg toe button//


//Voeg toe button//
$(function() {
    $( "#dialog4" ).dialog({
      autoOpen: false,
      show: {
      effect: "explode",
      duration: 1000
          
      },
      hide: {
      effect: "explode",
      duration: 1000
      }
    });
 
    $( "#toevoeg3" ).click(function() {
    $( "#dialog4" ).dialog( "open" );
    
//    $("#dialog").hide('complete hide');
        $(this).dialog('close');
       
    });
  });

//Voeg toe button//
$(function() {
    $( "#dialog5" ).dialog({
      autoOpen: false,
      show: {
      effect: "explode",
      duration: 1000
          
      },
      hide: {
      effect: "explode",
      duration: 1000
      }
    });
 
    $( "#toevoeg4" ).click(function() {
    $( "#dialog5" ).dialog( "open" );
    
//    $("#dialog").hide('complete hide');
        $(this).dialog('close');
       
    });
  });

//Voeg toe button//
$(function() {
    $( "#dialog6" ).dialog({
      autoOpen: false,
      show: {
      effect: "explode",
      duration: 1000
          
      },
      hide: {
      effect: "explode",
      duration: 1000
      }
    });
 
    $( "#toevoeg5" ).click(function() {
    $( "#dialog6" ).dialog( "open" );
    
//    $("#dialog").hide('complete hide');
        $(this).dialog('close');
       
    });
  });



//Einde voeg toe button//
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
    
