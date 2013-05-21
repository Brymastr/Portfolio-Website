$(document).ready(function() {
	slideIn('div[class*="item"]', 350);
	slideIn('.about', 350);
	slideOut('div[class*="item"]', 350);
	slideOut('.about', 350);
	fade_Out("#index", 350);
	mouseOver('div[class*="item"]', 60);

});

function slideIn(id, time) {

	$(id).css({left: "-1200px"})
	$(id).animate({left: "0px"}, time);
	$(id).animate({left: "20px"}, 100);
	$(id).animate({left: "0px"}, 200, function() {
		$("footer").fadeIn(1000);

	});
}

function slideOut(id, time) {
	$(".slide_transition").click(function(event) {
		event.preventDefault();
		linkLocation = this.id + ".php";
		$(id).animate({left: "1300px"}, time, function() {
			window.location = linkLocation;
		});
	});
}

function fade_Out(id, time) {
	$(".fade_transition").click(function(event) {
		event.preventDefault();
		linkLocation = this.id + ".php";
		$("#content").fadeOut(time, function() {
			window.location = linkLocation;
		});
	});
}

//Bump Item on mouse over //
function mouseOver(id, time) {
	$(id).mouseenter(function(i) {
		$(this).animate({top: "-8px"}, time);
	});
	$(id).mouseleave(function(i) {
		$(this).animate({top: "0"}, time);
	});
}



