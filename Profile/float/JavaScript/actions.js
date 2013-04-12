$(document).ready(function() {
	mouseOver(".item", 30, .8);

});

function mouseOver(id, time, multiplier) {
	var bounce_element = id;
	var timer = 0;
	$(bounce_element).mouseenter(function(i) {

		
		timer = (timer*multiplier + time);
		$(this).animate({top: "-10px"}, timer);
	});
	$(bounce_element).mouseleave(function(i) {

		timer = (timer*multiplier + time);
		$(this).animate({top: "0"}, timer);
	});

}

//function mouseOver(id) {
//document.getElementById(id).className = id + '_2';
//}

//function mouseOut(id) {
//document.getElementById(id).className = id;
//}