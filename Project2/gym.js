$(document).ready(() => {

  $("button#signout").click( () => {
    location.href = "https://atdpsites.berkeley.edu/jwong/Project2/signout.php";
  });


  var x;
  var y;
  var test = 0;

  for (i=0; i < 37; i++) {
    for (e=0; e < 81; e++) {
      if ($( "tr:nth-of-type("+ i +") td:nth-of-type("+ e +")" ).hasClass( "redhat" )) {
        x = e;
        y = i;
        test = 1;
      }
      else if (i==36 && e == 80 && test == 0) {
        $("tr:nth-of-type(37) td:nth-of-type(41)").addClass("redhat");
        x = 41;
        y = 37;
      }
    }
  }

  $("tr:nth-of-type(23) td:nth-of-type(69)").addClass("greenhat");
  $("tr:nth-of-type(7) td:nth-of-type(70)").addClass("greenhat");
  $("tr:nth-of-type(23) td:nth-of-type(15)").addClass("greenhat");






  $("tr:nth-of-type(1) td:nth-of-type(36)").addClass("darkgreen");


  $("tr:nth-of-type(37) td:nth-of-type(41)").addClass("gymexit");
  $("tr:nth-of-type(37) td:nth-of-type(42)").addClass("gymexit");
  $("tr:nth-of-type(37) td:nth-of-type(40)").addClass("gymexit");
  $("tr:nth-of-type(37) td:nth-of-type(39)").addClass("gymexit");

  $(".labentrance").removeClass("building");

  $("tr:nth-of-type(37) td:nth-of-type(36)").addClass("building");
  $("tr:nth-of-type(37) td:nth-of-type(35)").addClass("building");
  $("tr:nth-of-type(37) td:nth-of-type(46)").addClass("building");
  $("tr:nth-of-type(37) td:nth-of-type(45)").addClass("building");
  $("tr:nth-of-type(36) td:nth-of-type(36)").addClass("building");
  $("tr:nth-of-type(36) td:nth-of-type(35)").addClass("building");
  $("tr:nth-of-type(36) td:nth-of-type(46)").addClass("building");
  $("tr:nth-of-type(36) td:nth-of-type(45)").addClass("building");
  $("tr:nth-of-type(35) td:nth-of-type(36)").addClass("building");
  $("tr:nth-of-type(35) td:nth-of-type(35)").addClass("building");
  $("tr:nth-of-type(35) td:nth-of-type(46)").addClass("building");
  $("tr:nth-of-type(35) td:nth-of-type(45)").addClass("building");
  $("tr:nth-of-type(34) td:nth-of-type(36)").addClass("building");
  $("tr:nth-of-type(34) td:nth-of-type(35)").addClass("building");
  $("tr:nth-of-type(34) td:nth-of-type(46)").addClass("building");
  $("tr:nth-of-type(34) td:nth-of-type(45)").addClass("building");

  $("tr:nth-of-type(37) td:nth-of-type(67)").addClass("building");
  $("tr:nth-of-type(36) td:nth-of-type(67)").addClass("building");
  $("tr:nth-of-type(35) td:nth-of-type(67)").addClass("building");
  $("tr:nth-of-type(34) td:nth-of-type(67)").addClass("building");
  $("tr:nth-of-type(33) td:nth-of-type(67)").addClass("building");
  $("tr:nth-of-type(32) td:nth-of-type(67)").addClass("building");
  $("tr:nth-of-type(31) td:nth-of-type(67)").addClass("building");
  $("tr:nth-of-type(30) td:nth-of-type(67)").addClass("building");
  $("tr:nth-of-type(29) td:nth-of-type(67)").addClass("building");
  $("tr:nth-of-type(28) td:nth-of-type(67)").addClass("building");
  $("tr:nth-of-type(27) td:nth-of-type(67)").addClass("building");

  $("tr:nth-of-type(37) td:nth-of-type(26)").addClass("building");
  $("tr:nth-of-type(36) td:nth-of-type(26)").addClass("building");
  $("tr:nth-of-type(35) td:nth-of-type(26)").addClass("building");
  $("tr:nth-of-type(34) td:nth-of-type(26)").addClass("building");
  $("tr:nth-of-type(33) td:nth-of-type(26)").addClass("building");
  $("tr:nth-of-type(32) td:nth-of-type(26)").addClass("building");
  $("tr:nth-of-type(31) td:nth-of-type(26)").addClass("building");
  $("tr:nth-of-type(30) td:nth-of-type(26)").addClass("building");
  $("tr:nth-of-type(39) td:nth-of-type(26)").addClass("oneway");

  $("tr:nth-of-type(29) td:nth-of-type(26)").addClass("building");

  for (var i = 4; i < 27; i++) {
    $("tr:nth-of-type(33) td:nth-of-type("+i+")").addClass("building");
  }

  for (var j = 4; j < 34; j++) {
    $("tr:nth-of-type("+j+") td:nth-of-type(4)").addClass("building");
  }

  for (var j = 14; j < 47 ; j++) {
    $("tr:nth-of-type(4) td:nth-of-type("+j+")").addClass("building");
  }

  for (var i = 5; i < 11 ; i++) {
    $("tr:nth-of-type("+i+") td:nth-of-type(23)").addClass("building");
  }

  for (var i = 16; i < 23; i++) {
    $("tr:nth-of-type(10) td:nth-of-type("+i+")").addClass("building");
  }

  for (var i = 10; i <27; i++) {
    $("tr:nth-of-type("+i+") td:nth-of-type(16)").addClass("building");
  }

  for (var i = 26; i <60 ; i++) {
    $("tr:nth-of-type(28) td:nth-of-type("+i+")").addClass("building");
  }

  for (var i = 24; i <28 ; i++) {
    $("tr:nth-of-type("+i+") td:nth-of-type(59)").addClass("building");
  }

  for (var i = 59; i < 74; i++) {
    $("tr:nth-of-type(24) td:nth-of-type("+i+")").addClass("building");
  }

  for (var i = 25; i < 32; i++) {
    $("tr:nth-of-type("+i+") td:nth-of-type(73)").addClass("building");
  }

  for (var i = 67; i < 82; i++) {
    $("tr:nth-of-type(18) td:nth-of-type("+i+")").addClass("building");
  }

  for (var i = 12; i <18 ; i++) {
    $("tr:nth-of-type("+i+") td:nth-of-type(67)").addClass("building");
  }

  for (var i = 68; i <75 ; i++) {
    $("tr:nth-of-type(12) td:nth-of-type("+i+")").addClass("building");
  }

  for (var i = 59 ; i < 75; i++) {
    $("tr:nth-of-type(8) td:nth-of-type("+i+")").addClass("building");
  }

  for (var i = 9; i < 19; i++) {
    $("tr:nth-of-type("+i+") td:nth-of-type(59)").addClass("building");
  }

  for (var i = 45; i < 59; i++) {
    $("tr:nth-of-type(12) td:nth-of-type("+i+")").addClass("building");
  }

  for (var i = 13; i < 28; i++) {
    $("tr:nth-of-type("+i+") td:nth-of-type(45)").addClass("building");
  }

  for (var i = 23; i <45 ; i++) {
    $("tr:nth-of-type(18) td:nth-of-type("+i+")").addClass("building");
  }

  for (var i = 34; i < 38; i++) {
    $("tr:nth-of-type("+i+") td:nth-of-type(26)").addClass("oneway");
  }



  $("tr:nth-of-type(3) td:nth-of-type(46)").addClass("building");
  $("tr:nth-of-type(2) td:nth-of-type(46)").addClass("building");
  $("tr:nth-of-type(1) td:nth-of-type(46)").addClass("building");






  $(".building").removeClass("floor");

  $(".oneway").removeClass("building");




  $(document).keypress( (e) => {


    if (e.key== "s") {

      y = y+1;

      if (y == 38 || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "building" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "greenhat" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "darkgreen" )) {
        y = y - 1;
      }
      else {
        $(".redhat").removeClass("redhat");
        $("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").addClass("redhat");
      }

    }

    if (e.key == "w") {



      y = y-1;

      if (y == 0 || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "building" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "greenhat" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "darkgreen" )) {
        y = y+1;
      }
      else {
        $(".redhat").removeClass("redhat");
        $("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").addClass("redhat");
      }

    }

    if (e.key == "d") {

      x = x+1;

      if (x == 82 || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "building" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "greenhat" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "darkgreen" )) {
        x = x-1;
      }
      else {
        $(".redhat").removeClass("redhat");
        $("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").addClass("redhat");
      }

    }

    if (e.key == "a") {

      x = x-1;

      if (x == 0 || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "building" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "oneway" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "greenhat" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "darkgreen" )) {
        x = x+1;
      }
      else {
        $(".redhat").removeClass("redhat");
        $("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").addClass("redhat");
      }

    }



    if ($("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").hasClass("gymexit")) {
      $("#gamealerts form:nth-of-type(1) button").removeClass("hidden");
    }

    else if ($( "#gamealerts form:nth-of-type(1) button" ).hasClass( "hidden" ) == false) {
      $("#gamealerts form:nth-of-type(1) button").addClass("hidden");
    }

    if ($( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "trainerone" )) {
      $(".trainer").removeClass("trainer");
      window.location.replace("https://atdpsites.berkeley.edu/jwong/Project2/battle.php");
    }

    else if ($( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "trainertwo" ) ) {
      $(".trainer").removeClass("trainer");
      window.location.replace("https://atdpsites.berkeley.edu/jwong/Project2/battle.php");
    }

    else if ($( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "trainerthree" )) {
      $(".trainer").removeClass("trainer");
      window.location.replace("https://atdpsites.berkeley.edu/jwong/Project2/battle.php");
    }

    else if ($( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "gymleader" )) {
      $(".trainer").removeClass("trainer");
      window.location.replace("https://atdpsites.berkeley.edu/jwong/Project2/battle.php");
    }

    else if ($( "#gamealerts h1:nth-of-type(1)" ).hasClass( "trainer" ) == false) {
      $("#gamealerts h1:nth-of-type(1)").addClass("trainer");

    }







  });



});
