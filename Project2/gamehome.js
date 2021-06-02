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
          $("tr:nth-of-type(1) td:nth-of-type(1)").addClass("redhat");
          x = 1;
          y = 1;
        }
      }
    }


    $("tr:nth-of-type(20) td:nth-of-type(10)").addClass("building");
    $("tr:nth-of-type(20) td:nth-of-type(11)").addClass("building");
    $("tr:nth-of-type(20) td:nth-of-type(12)").addClass("building");
    $("tr:nth-of-type(20) td:nth-of-type(13)").addClass("building");
    $("tr:nth-of-type(20) td:nth-of-type(14)").addClass("building");
    $("tr:nth-of-type(20) td:nth-of-type(15)").addClass("building");
    $("tr:nth-of-type(20) td:nth-of-type(16)").addClass("building");
    $("tr:nth-of-type(20) td:nth-of-type(17)").addClass("building");
    $("tr:nth-of-type(20) td:nth-of-type(18)").addClass("building");
    $("tr:nth-of-type(20) td:nth-of-type(19)").addClass("building");
    $("tr:nth-of-type(20) td:nth-of-type(20)").addClass("building");
    $("tr:nth-of-type(21) td:nth-of-type(10)").addClass("building");
    $("tr:nth-of-type(21) td:nth-of-type(11)").addClass("building");
    $("tr:nth-of-type(21) td:nth-of-type(12)").addClass("building");
    $("tr:nth-of-type(21) td:nth-of-type(13)").addClass("building");
    $("tr:nth-of-type(21) td:nth-of-type(14)").addClass("building");
    $("tr:nth-of-type(21) td:nth-of-type(15)").addClass("building");
    $("tr:nth-of-type(21) td:nth-of-type(16)").addClass("building");
    $("tr:nth-of-type(21) td:nth-of-type(17)").addClass("building");
    $("tr:nth-of-type(21) td:nth-of-type(18)").addClass("building");
    $("tr:nth-of-type(21) td:nth-of-type(19)").addClass("building");
    $("tr:nth-of-type(21) td:nth-of-type(20)").addClass("building");
    $("tr:nth-of-type(22) td:nth-of-type(10)").addClass("building");
    $("tr:nth-of-type(22) td:nth-of-type(11)").addClass("building");
    $("tr:nth-of-type(22) td:nth-of-type(12)").addClass("building");
    $("tr:nth-of-type(22) td:nth-of-type(13)").addClass("building");
    $("tr:nth-of-type(22) td:nth-of-type(14)").addClass("building");
    $("tr:nth-of-type(22) td:nth-of-type(15)").addClass("building");
    $("tr:nth-of-type(22) td:nth-of-type(16)").addClass("building");
    $("tr:nth-of-type(22) td:nth-of-type(17)").addClass("building");
    $("tr:nth-of-type(22) td:nth-of-type(18)").addClass("building");
    $("tr:nth-of-type(22) td:nth-of-type(19)").addClass("building");
    $("tr:nth-of-type(22) td:nth-of-type(20)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(10)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(11)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(12)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(13)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(14)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(15)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(16)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(17)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(18)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(19)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(20)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(10)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(11)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(12)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(13)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(14)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(15)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(16)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(17)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(18)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(19)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(20)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(10)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(11)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(12)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(13)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(14)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(15)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(16)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(17)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(18)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(19)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(20)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(10)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(11)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(12)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(13)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(14)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(15)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(16)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(17)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(18)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(19)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(20)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(10)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(11)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(12)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(13)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(14)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(15)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(16)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(17)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(18)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(19)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(20)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(10)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(11)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(12)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(13)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(14)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(15)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(16)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(17)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(18)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(19)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(20)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(10)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(11)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(12)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(13)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(14)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(15)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(16)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(17)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(18)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(19)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(20)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(10)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(11)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(12)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(13)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(14)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(15)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(16)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(17)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(18)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(19)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(20)").addClass("building");

    $(".building").removeClass("ground");

    $("tr:nth-of-type(30) td:nth-of-type(19)").addClass("memecenterentrance");
    $("tr:nth-of-type(30) td:nth-of-type(18)").addClass("memecenterentrance");

    $(".memecenterentrance").removeClass("building");

    $("tr:nth-of-type(5) td:nth-of-type(44)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(45)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(46)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(47)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(48)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(49)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(50)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(51)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(52)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(53)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(54)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(55)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(56)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(57)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(58)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(59)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(60)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(61)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(62)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(63)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(5) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(44)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(45)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(46)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(47)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(48)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(49)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(50)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(51)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(52)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(53)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(54)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(55)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(56)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(57)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(58)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(59)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(60)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(61)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(62)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(63)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(6) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(44)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(45)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(46)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(47)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(48)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(49)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(50)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(51)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(52)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(53)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(54)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(55)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(56)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(57)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(58)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(59)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(60)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(61)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(62)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(63)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(7) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(44)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(45)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(46)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(47)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(48)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(49)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(50)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(51)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(52)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(53)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(54)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(55)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(56)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(57)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(58)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(59)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(60)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(61)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(62)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(63)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(8) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(44)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(45)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(46)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(47)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(48)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(49)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(50)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(51)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(52)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(53)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(54)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(55)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(56)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(57)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(58)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(59)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(60)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(61)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(62)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(63)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(9) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(44)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(45)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(46)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(47)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(48)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(49)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(50)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(51)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(52)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(53)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(54)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(55)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(56)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(57)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(58)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(59)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(60)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(61)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(62)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(63)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(10) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(44)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(45)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(46)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(47)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(48)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(49)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(50)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(51)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(52)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(53)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(54)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(55)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(56)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(57)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(58)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(59)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(60)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(61)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(62)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(63)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(11) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(44)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(45)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(46)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(47)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(48)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(49)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(50)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(51)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(52)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(53)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(54)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(55)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(56)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(57)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(58)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(59)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(60)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(61)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(62)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(63)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(12) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(44)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(45)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(46)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(47)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(48)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(49)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(50)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(51)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(52)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(53)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(54)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(55)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(56)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(57)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(58)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(59)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(60)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(61)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(62)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(63)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(13) td:nth-of-type(70)").addClass("building");

    $(".building").removeClass("ground");

    $("tr:nth-of-type(13) td:nth-of-type(56)").addClass("gymentrance");
    $("tr:nth-of-type(13) td:nth-of-type(57)").addClass("gymentrance");
    $("tr:nth-of-type(13) td:nth-of-type(58)").addClass("gymentrance");
    $("tr:nth-of-type(13) td:nth-of-type(59)").addClass("gymentrance");

    $(".gymentrance").removeClass("building");

    $("tr:nth-of-type(23) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(71)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(72)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(73)").addClass("building");
    $("tr:nth-of-type(23) td:nth-of-type(74)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(71)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(72)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(73)").addClass("building");
    $("tr:nth-of-type(24) td:nth-of-type(74)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(71)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(72)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(73)").addClass("building");
    $("tr:nth-of-type(25) td:nth-of-type(74)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(71)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(72)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(73)").addClass("building");
    $("tr:nth-of-type(26) td:nth-of-type(74)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(71)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(72)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(73)").addClass("building");
    $("tr:nth-of-type(27) td:nth-of-type(74)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(71)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(72)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(73)").addClass("building");
    $("tr:nth-of-type(28) td:nth-of-type(74)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(71)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(72)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(73)").addClass("building");
    $("tr:nth-of-type(29) td:nth-of-type(74)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(71)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(72)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(73)").addClass("building");
    $("tr:nth-of-type(30) td:nth-of-type(74)").addClass("building");
    $("tr:nth-of-type(31) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(31) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(31) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(31) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(31) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(31) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(31) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(31) td:nth-of-type(71)").addClass("building");
    $("tr:nth-of-type(31) td:nth-of-type(72)").addClass("building");
    $("tr:nth-of-type(31) td:nth-of-type(73)").addClass("building");
    $("tr:nth-of-type(31) td:nth-of-type(74)").addClass("building");
    $("tr:nth-of-type(32) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(32) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(32) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(32) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(32) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(32) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(32) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(32) td:nth-of-type(71)").addClass("building");
    $("tr:nth-of-type(32) td:nth-of-type(72)").addClass("building");
    $("tr:nth-of-type(32) td:nth-of-type(73)").addClass("building");
    $("tr:nth-of-type(32) td:nth-of-type(74)").addClass("building");
    $("tr:nth-of-type(33) td:nth-of-type(64)").addClass("building");
    $("tr:nth-of-type(33) td:nth-of-type(65)").addClass("building");
    $("tr:nth-of-type(33) td:nth-of-type(66)").addClass("building");
    $("tr:nth-of-type(33) td:nth-of-type(67)").addClass("building");
    $("tr:nth-of-type(33) td:nth-of-type(68)").addClass("building");
    $("tr:nth-of-type(33) td:nth-of-type(69)").addClass("building");
    $("tr:nth-of-type(33) td:nth-of-type(70)").addClass("building");
    $("tr:nth-of-type(33) td:nth-of-type(71)").addClass("building");
    $("tr:nth-of-type(33) td:nth-of-type(72)").addClass("building");
    $("tr:nth-of-type(33) td:nth-of-type(73)").addClass("building");
    $("tr:nth-of-type(33) td:nth-of-type(74)").addClass("building");

    $(".building").removeClass("ground");

    $("tr:nth-of-type(28) td:nth-of-type(64)").addClass("labentrance");
    $("tr:nth-of-type(29) td:nth-of-type(64)").addClass("labentrance");

    $(".labentrance").removeClass("building");






 $(document).keypress( (e) => {

   console.log("hi");

   console.log(e);

    if (e.key== "s") {

      y = y+1;

      if (y == 38 || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "building" )) {
        y = y - 1;
      }
      else {
        $(".redhat").removeClass("redhat");
        $("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").addClass("redhat");
      }

    }

    if (e.key == "w") {

      console.log("up");

      y = y-1;

      if (y == 0 || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "building" )) {
        y = y+1;
      }
      else {
        $(".redhat").removeClass("redhat");
        $("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").addClass("redhat");
      }

    }

    if (e.key == "d") {

      x = x+1;

      if (x == 82 || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "building" )) {
        x = x-1;
      }
      else {
        $(".redhat").removeClass("redhat");
        $("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").addClass("redhat");
      }

    }

    if (e.key == "a") {

      x = x-1;

      if (x == 0 || $( "tr:nth-of-type("+ y +") td:nth-of-type("+ x +")" ).hasClass( "building" )) {
        x = x+1;
      }
      else {
        $(".redhat").removeClass("redhat");
        $("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").addClass("redhat");
      }

    }


    if ($("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").hasClass("memecenterentrance")) {
      $("#gamealerts form:nth-of-type(1) button").removeClass("hidden");
    }

    else if ($( "#gamealerts form:nth-of-type(1) button" ).hasClass( "hidden" ) == false) {
      $("#gamealerts form:nth-of-type(1) button").addClass("hidden");
    }

    if ($("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").hasClass("gymentrance")) {
      $("#gamealerts form:nth-of-type(2) button").removeClass("hidden");
    }

    else if ($( "#gamealerts form:nth-of-type(2) button" ).hasClass( "hidden" ) == false) {
      $("#gamealerts form:nth-of-type(2) button").addClass("hidden");
    }

    if ($("tr:nth-of-type("+ y +") td:nth-of-type("+ x +")").hasClass("labentrance")) {
      $("#gamealerts form:nth-of-type(3) button").removeClass("hidden");
    }

    else if ($( "#gamealerts form:nth-of-type(3) button" ).hasClass( "hidden" ) == false) {
      $("#gamealerts form:nth-of-type(3) button").addClass("hidden");
    }


  });



});
