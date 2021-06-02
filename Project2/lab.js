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
        $("tr:nth-of-type(28) td:nth-of-type(26)").addClass("redhat");
        x = 26;
        y = 28;
      }
    }
  }

  $("tr:nth-of-type(28) td:nth-of-type(26)").addClass("labexit");
  $("tr:nth-of-type(28) td:nth-of-type(25)").addClass("labexit");
  $("tr:nth-of-type(28) td:nth-of-type(24)").addClass("labexit");
  $("tr:nth-of-type(28) td:nth-of-type(23)").addClass("labexit");

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

  for (var i = 10; i < 26; i++) {

    $("tr:nth-of-type("+i+") td:nth-of-type(50)").addClass("table");

  }

  for (var i = 51; i < 60; i++) {

    $("tr:nth-of-type(10) td:nth-of-type("+i+")").addClass("table");
    $("tr:nth-of-type(25) td:nth-of-type("+i+")").addClass("table");

  }

  $("tr:nth-of-type(17) td:nth-of-type(51)").addClass("yellowhat");

  $("tr:nth-of-type(17) td:nth-of-type(49)").addClass("talk");









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


    if ($("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").hasClass("labexit")) {
      $("#gamealerts form:nth-of-type(1) button").removeClass("hidden");
    }

    else if ($( "#gamealerts form:nth-of-type(1) button" ).hasClass( "hidden" ) == false) {
      $("#gamealerts form:nth-of-type(1) button").addClass("hidden");
    }

    if ($("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").hasClass("talk")) {
      $("p.hidden").removeClass("hidden");
    }

    else if ($( "#gamealerts p" ).hasClass( "hidden" ) == false) {
      $("#gamealerts p ").addClass("hidden");
    }




  });



});
