/*
 *  Author: Me
 *
 */


//window ready function
 $(window).load(function() {

  //Sticky footer
  // var winheight = $(window).height(),
  // head = $('header').height(),
  // foot = $('footer').height(),
  // contentHeight = winheight - (parseInt(((head + foot) * 1.68), 10));
  // $('.content .wrapper').css('min-height', contentHeight + 'px');

});


//Document ready function

$(document ).ready( function() {

  //Get code validation
  $( "#submit-data" ).click( function() {


    //alert("Please fill correct Name, E-mail & Mobile");

    var name = $('#gname').val();
    var email = $('#gemail').val();
    var mobile = $('#gmobile').val();

    if(name=="" || email=="" || mobile=="") { console.log("hi");
      alert("Please fill correct Name, E-mail & Mobile");
    }

  });

  //Contact us validation
   $( "#submit" ).click( function() {

    var name = $('#name').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();

    if(name=="" || email=="" || mobile=="") {
      alert("Please fill correct Name, E-mail & Mobile");
    }

  });

   // $("#menu").click( function() {
   //    //alert("hi");
   //    $(this).$("nav").show();
   // });

});

