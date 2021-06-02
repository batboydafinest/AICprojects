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
        $("tr:nth-of-type(28) td:nth-of-type(56)").addClass("redhat");
        x = 56;
        y = 28;
      }
    }
  }

  $("tr:nth-of-type(28) td:nth-of-type(56)").addClass("homeexit");
  $("tr:nth-of-type(28) td:nth-of-type(55)").addClass("homeexit");
  $("tr:nth-of-type(28) td:nth-of-type(54)").addClass("homeexit");
  $("tr:nth-of-type(28) td:nth-of-type(53)").addClass("homeexit");

  for (var i = 0; i < 82; i++) {
    for (var j = 0; j < 7; j++) {
      $("tr:nth-of-type("+j+") td:nth-of-type("+i+")").addClass("building");
    }
  }

  for (var i = 0; i < 82; i++) {
    for (var j = 29; j < 38; j++) {
      $("tr:nth-of-type("+j+") td:nth-of-type("+i+")").addClass("building");
    }
  }

  for (var i = 0; i < 21; i++) {
    for (var j = 7; j < 29; j++) {
      $("tr:nth-of-type("+j+") td:nth-of-type("+i+")").addClass("building");
    }
  }

  for (var i = 60; i < 82; i++) {
    for (var j = 7; j < 29; j++) {
      $("tr:nth-of-type("+j+") td:nth-of-type("+i+")").addClass("building");
    }
  }

  for (var i = 40; i < 49; i++) {
    for (var j = 19; j < 25; j++) {
      $("tr:nth-of-type("+j+") td:nth-of-type("+i+")").addClass("table");
    }
  }

  for (var i = 7; i < 18; i++) {
    $("tr:nth-of-type("+i+") td:nth-of-type(34)").addClass("table");
  }

  for (var i = 25; i < 30; i++) {
    for (var j = 7; j < 13; j++) {
      $("tr:nth-of-type("+j+") td:nth-of-type("+i+")").addClass("bed");
    }
  }



  $("tr:nth-of-type(7) td:nth-of-type(26)").addClass("pillow");
  $("tr:nth-of-type(7) td:nth-of-type(27)").addClass("pillow");
  $("tr:nth-of-type(7) td:nth-of-type(28)").addClass("pillow");

  $(".pillow").removeClass("bed");

  $("tr:nth-of-type(18) td:nth-of-type(42)").addClass("pinkhat");

  $("tr:nth-of-type(18) td:nth-of-type(41)").addClass("talk");
  $("tr:nth-of-type(18) td:nth-of-type(43)").addClass("talk");
  $("tr:nth-of-type(17) td:nth-of-type(42)").addClass("talk");





  $(".building").removeClass("ground");



  $(document).keypress( (e) => {


    if (e.key== "s") {

      y = y+1;

      if (y == 38 || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "building" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "pinkhat" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "table" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "bed" )) {
        y = y - 1;
      }
      else {
        $(".redhat").removeClass("redhat");
        $("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").addClass("redhat");
      }

    }

    if (e.key == "w") {



      y = y-1;

      if (y == 0 || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "building") || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "pinkhat" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "table" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "bed" )) {
        y = y+1;
      }
      else {
        $(".redhat").removeClass("redhat");
        $("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").addClass("redhat");
      }

    }

    if (e.key == "d") {

      x = x+1;

      if (x == 82 || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "building" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "pinkhat" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "table" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "bed" )) {
        x = x-1;
      }
      else {
        $(".redhat").removeClass("redhat");
        $("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").addClass("redhat");
      }

    }

    if (e.key == "a") {

      x = x-1;

      if (x == 0 || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "building" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "pinkhat" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "table" )|| $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "bed" )) {
        x = x+1;
      }
      else {
        $(".redhat").removeClass("redhat");
        $("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").addClass("redhat");
      }



    }


    if ($("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").hasClass("talk")) {
      $("#gamealerts form:nth-of-type(1) button").removeClass("hidden");
    }

    else if ($( "#gamealerts form:nth-of-type(1) button" ).hasClass( "hidden" ) == false) {
      $("#gamealerts form:nth-of-type(1) button").addClass("hidden");
    }

    if ($("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").hasClass("homeexit")) {
      $("#gamealerts form:nth-of-type(2) button").removeClass("hidden");
    }

    else if ($( "#gamealerts form:nth-of-type(2) button" ).hasClass( "hidden" ) == false) {
      $("#gamealerts form:nth-of-type(2) button").addClass("hidden");
    }




  });



});
