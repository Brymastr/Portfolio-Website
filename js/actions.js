$(document).ready(function() {
	slideIn('div[class*="item"], .page', 350);
	slideOut('div[class*="item"], .page', 350);
	fadeContent(350);
	clickFade('#contact', '.contact-reveal', 350);
	mouseOver('div[class*="item"]', 60);
    shadowAnimation('#index');

});

function slideIn(id, time) {

	$(id).css({left: "-1200px"})
	$(id).animate({
        left: "0px",
        easing: "easeInOutCubic"
    }, time);
	$(id).animate({left: "20px"}, 100);
	$(id).animate({
        left: "0px",
        easing: "easeInOutCubic"
    }, 200, function() {
		$("#footer").fadeIn(1000);

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

function fadeContent(time) {
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
		$(this).animate({
            "top": "-8px",
            boxShadow: '20px 20px 9px #888888'
        }, time);
        
	});
	$(id).mouseleave(function(i) {
		$(this).animate({
            "top": "0",
            boxShadow: '8px 8px 8px #888888'
        }, time);
	});
}
/*
//Crazy cool animation for mousover and on click of the header banner
function shadowAnimation(id) {
    $(id).mouseenter(function(i) {
        $(this).animate({
            boxShadow: '-30px 0 30px #699, 30px 0 30px #969, 0 -30px 30px #996, 0 30px 30px #669'
        });
    });
    $(id).mouseleave(function(i) {
        $(this).stop().animate({
            boxShadow: '0 0 10px #699, 0 0 10px #969, 0 0 10px #996, 0 0 30px #669'
        });
    });
}
*/
