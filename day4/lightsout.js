$(document).ready(() => {

  $("td").click( (event) => {
    $(event.currentTarget).toggleClass("on");

    var data = $(event.currentTarget).index();

    var row = $(event.currentTarget).parent().index();

    let left = data;
    let rdata = data + 1;
    let right = data + 2;
    let up = row ;
    let rrow = row + 1;
    let down = row + 2;

    $("tr:nth-of-type(" + rrow + ") td:nth-of-type(" + left + ")").toggleClass("on");
    $("tr:nth-of-type(" + rrow + ") td:nth-of-type(" + right + ")").toggleClass("on");
    $("tr:nth-of-type(" + up + ") td:nth-of-type(" + rdata + ")").toggleClass("on");
    $("tr:nth-of-type(" + down + ") td:nth-of-type(" + rdata + ")").toggleClass("on");

    let ans = 0;

    for (var i = 1; i < 6; i++) {

      for (var w = 1; w < 6; w++) {
         if ($("tr:nth-of-type(" + i + ") td:nth-of-type(" + w + ")").hasClass("on") != true) {
           ans++;
         }
      }

    }


    if (ans == 25) {
      $("table").addClass("win");
      $("h1").removeClass("won");


    }

  });


});
