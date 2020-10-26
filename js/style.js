$(window).scroll(function() {
	if ($(document).scrollTop() > 30) {
		$('nav').addClass('hero9');
	}      else {
		$('nav').removeClass('hero9');
	}
});



$(document).ready(function(){
  $("button").click(function(){
    $("nav").addClass("hero9")
  })
})