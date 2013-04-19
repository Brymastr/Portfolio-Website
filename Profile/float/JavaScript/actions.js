$(document).ready(function() {
	mouseOver(".item", 20, .8);
	mouseOver(".item_wide", 20, .8)

});

function mouseOver(id, time, multiplier) {
	var bounce_element = id;
	var timer = 0;
	$(bounce_element).mouseenter(function(i) {

		
		timer = (timer*multiplier + time);
		$(this).animate({top: "-8px"}, timer);
	});
	$(bounce_element).mouseleave(function(i) {

		timer = (timer*multiplier + time);
		$(this).animate({top: "0"}, timer);
	});

}