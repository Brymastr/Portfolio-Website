$(document).ready(function() {
	slideIn('div[class*="item"], .page', 350);
	slideOut('div[class*="item"], .page', 350);
	fadeContent(350);
	clickFade('#contact', '.contact-reveal', 350);
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
	$(".slide-transition").click(function(event) {
		event.preventDefault();
		linkLocation = this.id + ".php";
		$(id).animate({left: "1300px"}, time, function() {
			window.location = linkLocation;
		});
	});
}

function fadeContent(id, time) {
	$(".fade-transition").click(function(event) {
		event.preventDefault();
		linkLocation = this.id + ".php";
		$("#content").fadeOut(time, function() {
			window.location = linkLocation;
		});
	});
}

function clickFade(id, reveal, time) {
	$(".click-fade").click(function(event) {
		$(id).fadeOut(time, function() {
			$(reveal).fadeIn(time, function(event) {
				window.location = 'mailto:dorsay@live.ca?subject=Hello!';
			});
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



