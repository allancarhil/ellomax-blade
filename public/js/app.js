const btnNextSale2 = $(".step-sale-2")
const btnNextSale3 = $(".step-sale-3")
const btnBackSale1 = $(".step-sale-back-1")
const btnBackSale2 = $(".step-sale-back-2")

const salep1 = $('.salep1')
const salep2 = $('.salep2')
const salep3 = $('.salep3')

btnNextSale2.on('click',function(){
    salep1.hide()
    salep2.show()
})

btnNextSale3.on('click',function(){
    salep2.hide()
    salep3.show()
})

btnBackSale1.on('click',function(){
    salep2.hide()
    salep1.show()
})

btnBackSale2.on('click',function(){
    salep3.hide()
    salep2.show()
})
const btnNextrent2 = $(".step-rent-2")
const btnNextrent3 = $(".step-rent-3")
const btnBackrent1 = $(".step-rent-back-1")
const btnBackrent2 = $(".step-rent-back-2")

const rentp1 = $('.rentp1')
const rentp2 = $('.rentp2')
const rentp3 = $('.rentp3')

btnNextrent2.on('click',function(){
    rentp1.hide()
    rentp2.show()
})

btnNextrent3.on('click',function(){
    rentp2.hide()
    rentp3.show()
})

btnBackrent1.on('click',function(){
    rentp2.hide()
    rentp1.show()
})

btnBackrent2.on('click',function(){
    rentp3.hide()
    rentp2.show()
})
// ---------Responsive-navbar-active-animation-----------
function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px", 
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		// $(".hori-selector").css({
		// 	"top":itemPosNewAnimTop.top + "px", 
		// 	"left":itemPosNewAnimLeft.left + "px",
		// 	"height": activeWidthNewAnimHeight + "px",
		// 	"width": activeWidthNewAnimWidth + "px"
		// });
	});
}
$(document).ready(function(){
	setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function(){ test(); });
});



// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
	// Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
	if ( path == '' ) {
		path = 'index.html';
	}

	var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});




// Add active class on another page linked
// ==========================================
// $(window).on('load',function () {
//     var current = location.pathname;
//     console.log(current);
//     $('#navbarSupportedContent ul li a').each(function(){
//         var $this = $(this);
//         // if the current path is like this link, make it active
//         if($this.attr('href').indexOf(current) !== -1){
//             $this.parent().addClass('active');
//             $this.parents('.menu-submenu').addClass('show-dropdown');
//             $this.parents('.menu-submenu').parent().addClass('active');
//         }else{
//             $this.parent().removeClass('active');
//         }
//     })
// });