$(window).scroll(function() {
	if ($(document).scrollTop() > 30) {
		$('nav').addClass('hero7');
	}      else {
		$('nav').removeClass('hero7');
	}
});



$(document).ready(function(){
  $("button").click(function(){
    $("nav").addClass("hero7")
  })
})