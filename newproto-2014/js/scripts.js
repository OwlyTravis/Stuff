$(document).ready(function(){


// SCROLLING PANEL NAVIGATION (by <section> ID):
$('.mover').on('click', function(e) {
    e.preventDefault();
    var scrollWin = $(this).attr('href'); 
    var goTo = $('section[id="' + scrollWin + '"]').offset().top - 0;

    $('body,html').animate(
    { scrollTop: goTo }, 
        1500, 
    "easeInOutQuad");

})

// OPEN/CLOSE FUNCTION (by class) :
$('.openclose').on('click', function(e) {
    e.preventDefault();
     var tl = '.' + $(this).attr('href');
    $(tl).slideToggle(500);
})



// SCROLLING AND "SCROLLSPY" FUNCTIONALITY (NAVIGATION): 

$(window).scroll(function() {

    var windscroll = $(window).scrollTop();
    var navheight = $("header nav").height();
    var topPanelHeight = $("section#top").height();
        
	 $('body section.sspy').each(function(i) {
            if ($(this).position().top <= windscroll + 1) {
                $('.nav-main a.active').removeClass('active');
                $('.nav-main a').eq(i).addClass('active');
            }
        });

/* DISABLED "FOLLOWING" FUNCTIONALITY 

    if (windscroll >= topPanelHeight) {
        $('header').addClass('fixed');
        
    } else {

        $('header').removeClass('fixed');
        
    }   */

})


.scroll();


})