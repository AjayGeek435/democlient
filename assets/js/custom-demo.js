
function addFamilybox() {
	document.getElementById("family-box2").style.display = "block";
	document.getElementById("add-family-btn").style.display = "none";
}
function removeFamilybox() {
	document.getElementById("family-box2").style.display = "none";
	document.getElementById("add-family-btn").style.display = "block";
}

$(document).ready(function(){
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#scrollToTop').fadeIn();
		} else {
			$('#scrollToTop').fadeOut();
		}
	});

	$('#scrollToTop').click(function () {
		$("html, body").animate({scrollTop: 0}, 600);
		return false;
	});

	$('#scrollToTop').click(function () {
		$("html, body").animate({scrollTop: 0}, 600);
		return false;
	});
	
	$(window).scroll(function() { // this will work when your window scrolled.
        var height = $(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
        	$(".header").addClass("sticky_head");
        } else {
        	$(".header").removeClass("sticky_head");
        }
    });

	$(".menu-toggle").click(function(){
		$(".navigationbar").toggleClass("toggled");
		$("body").toggleClass("fixed-body");
	});


	// project menu Js toggle class and remove class
	$(".web_links").click(function(){
		$(".link_item").toggleClass('openLink');
		 event.stopPropagation();
	});
	 $(document).click(function(event){
        if (!$(event.target).hasClass('link_item')) {
            $(".link_item").removeClass("openLink");
        }
    });



});


$(document).ready(function(){
	$(".result-btn").click(function(){
		$(".advanced-search-edit-panel").fadeToggle("slow");
	});
	$("#show-li-1").click(function(){
		$("#words-with-letters li.de-active").toggle("slow");
		var text = $("#show-li-1 span").text();
		if( text == "See Less")
		{
			$("#show-li-1 span").text("See All");	
		}
		else if( text == "See All")
		{
			$("#show-li-1 span").text("See Less");	
		}
	});

	$("#show-li-2").click(function(){
		$("#word-that-start li.de-active").toggle("slow");
		var text = $("#show-li-2 span").text();
		if( text == "See Less")
		{
			$("#show-li-2 span").text("See All");	
		}
		else if( text == "See All")
		{
			$("#show-li-2 span").text("See Less");	
		}
	});

	$("#show-li-3").click(function(){
		$("#word-that-end li.de-active").toggle("slow");
		var text = $("#show-li-3 span").text();
		if( text == "See Less")
		{
			$("#show-li-3 span").text("See All");	
		}
		else if( text == "See All")
		{
			$("#show-li-3 span").text("See Less");	
		}
	});
	$("#show-li-4").click(function(){
		$("#word-length li.de-active").toggle("slow");
		var text = $("#show-li-4 span").text();
		if( text == "See Less")
		{
			$("#show-li-4 span").text("See All");	
		}
		else if( text == "See All")
		{
			$("#show-li-4 span").text("See Less");	
		}
	});
});

$(document).ready(function(){
	$(".more-options-cell").click(function(){
		$(".more-options-menu").fadeToggle("fast");
	});
});