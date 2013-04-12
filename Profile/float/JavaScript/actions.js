$(document).ready(function() {
   bounce(".item", 25, 15, 150, .8);

});

function bounce(id, over, out, time, multiplier) {
	var bump_element = id;
	var timer = 0;
	$(bump_element).each(function(i) {
		
		$(this).css("margin-left","-100px");
		timer = (timer*multiplier + time);
		$(this).animate({marginLeft: "0"}, timer);
		$(this).animate({marginLeft: "15px"}, timer);
		$(this).animate({marginLeft: "0"}, timer);
	});
}



//JavaScript functions
function mouseOver(id) {
	document.getElementById(id).className = id + '_2';
}

function mouseOut(id) {
	document.getElementById(id).className = id;
}