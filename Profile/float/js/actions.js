$(document).ready(function() {
	mouseOver(".item", 20, .8);
	mouseOver(".item_wide", 20, .8)

});

$(document).ready(function() {
    $("#content").css("display", "none");
 
    $("#content").fadeIn(500);
 
    $(".transition").click(function(event){
        event.preventDefault();
        linkLocation = this.id + ".php";
        $("#content").fadeOut(500, redirectPage);      
    });
    
    function redirectPage() {
        window.location = linkLocation;
    }
});

// Bump Item on mouse over //
function mouseOver(id, time, multiplier) {
	var bounce_element = id;
	var timer = 0;
	$(bounce_element).mouseenter(function(i) {

		
		timer = (timer * multiplier + time);
		$(this).animate({top: "-8px"}, timer);
	});
	$(bounce_element).mouseleave(function(i) {

		timer = (timer*multiplier + time);
		$(this).animate({top: "0"}, timer);
	});

}