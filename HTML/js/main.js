$(document).ready(function(){
if ($(window).width() < 768){
$('.formLeft h4').click(function(e) {
$(".formRight").slideToggle("");
var val = $(this).text() == "Enquire Now -" ? "Enquire Now +" : "Enquire Now -";
$(this).hide().text(val).fadeIn("fast");
e.preventDefault();
});
}

$('[data-fancybox]').fancybox({
	protect: true
});

});


if ($(window).width() > 991){
$(document).ready(bannerHeight);
$(window).on('resize',bannerHeight);
}
function bannerHeight(){
var winHeight = $(window).height();
var headerHeight = $('#mainheader').height();
var footerHeight = $('#footermain').height();
var headFootHeight =headerHeight + footerHeight;
var slideHeight = winHeight - headFootHeight;
//alert(winHeight);
$(".firstSlide .slider > div").height(slideHeight);
//$(".slider div").css("margin-top", headerHeight);
	
}



/*$(window).scroll(function() {    
    var scroll = $(window).scrollTop();    
    if (scroll > 100) {
        $("#mainheader").addClass("shrink");
    }
	else{
		$("#mainheader").removeClass("shrink");
	}
	$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
});
*/
	













