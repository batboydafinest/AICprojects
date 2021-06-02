$(document).ready(()=> {

	$(".oldclassfrom1997").removeClass("oldclassfrom1997");

	$("#irrationalsongs").addClass("songerrors");
	$("#longsongs").addClass("songerrors");

	$("#futuremovies h4").remove();

	$("#futuremovies").append($("#futuremovies > p"));

	$("body > h2").before($("header")); //.prepend lists the item first in the tag and .before puts the item before the tag

	$("#irrationalsongs ul li:nth-child(4)").addClass("ironic");

	$( "input[type='text']" ).prop("required", true);

});
