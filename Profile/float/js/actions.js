$(document).ready(function() {
	slideIn(".item", 350);
	slideIn(".item_wide", 350);
	slideIn(".item_plain", 350);
	slideOut(".item", 350);
	slideOut(".item_wide", 350);
	fadeOut("#index", 350);
	mouseOver(".item", 60);
	mouseOver(".item_wide", 60);

});

function slideIn(id, time) {
	var slide_element = id;
	$(id).css({left: "-1200px"})
	$(id).animate({left: "0px"}, time);
	$(id).animate({left: "20px"}, 100);
	$(id).animate({left: "0px"}, 200);
}

function slideOut(id, time) {
	$(".slide_transition").click(function(event) {
		event.preventDefault();
		linkLocation = this.id + ".php";
		var slide_element = id;
//		$(id).animate({left: "20px"}, 100);
//		$(id).animate({left: "0px"}, 200);
		$(id).animate({left: "1300px"}, time, function() {
			window.location = linkLocation;
		});
	});
}

function fadeOut(id, time) {
	$(".fade_transition").click(function(event) {
		event.preventDefault();
		linkLocation = this.id + ".php";
		var slide_element = id;
		$("#content").fadeOut(time, function() {
			window.location = linkLocation;
		});
	});
}

//Bump Item on mouse over //
function mouseOver(id, time) {
	var bounce_element = id;
	$(id).mouseenter(function(i) {
		$(this).animate({top: "-8px"}, time);
	});
	$(id).mouseleave(function(i) {
		$(this).animate({top: "0"}, time);
	});

}