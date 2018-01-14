	
$(document).ready(function() {
	// $('#page').fullpage({
	// 	//Navigation
	// 	anchors: ['/', 'about', 'portfolio', 'services', 'contact'],
	// 	lockAnchors: true,

	// 	//Scrolling

	// 	scrollingSpeed: 700,


	// 	//Accessibility
	// 	keyboardScrolling: true,
	// 	animateAnchor: true,
	// 	recordHistory: true,

	// 	//Design

	// 	parallax: true,

	// 	//Custom selectors
	// 	sectionSelector: '.section',
	// 	slideSelector: '.slide',

	// 	lazyLoading: true,

	// 	//events
	// 	onLeave: function(index, nextIndex, direction){},
	// 	afterLoad: function(anchorLink, index){
	// 		var pages = {	1: '/',
	// 		2: '/about',
	// 		3: '/portfolio',
	// 		4: '/services',
	// 		5: '/contact' };


	// 		$.fn.fullpage.moveTo(pages[index], 1);
	// 		history.replaceState(pages[index], '', pages[index]);

	// 		activeNavbar($('li[data-menuanchor="' + anchorLink + '"]').children('a'));

	// 	}
	// });

// add active classes to the navbar
// add active classes to the navbar
// add active classes to the navbar
// add active classes to the navbar
// add active classes to the navbar
// add active classes to the navbar
// add active classes to the navbar
// add active classes to the navbar
// add active classes to the navbar
// add active classes to the navbar
// add active classes to the navbar
// add active classes to the navbar





$('.hamburger, nav.nav-box').click(function(){
	$('nav.nav-box').toggleClass('desktop');
});






$(document).on("scroll", onScroll);

    //smoothscroll
    $('a[data-nav="true"]').on('click', function (e) {
    	e.preventDefault();
    	$(document).off("scroll");

    	$('a').each(function () {
    		$(this).removeClass('active');
    	})
    	$(this).addClass('active');

    	var target = this.hash,
    	menu = target;
    	$target = $(target);
    	$('html, body').stop().animate({
    		'scrollTop': $target.offset().top+2
    	}, 500, 'swing', function () {
    		window.location.hash = target;
    		$(document).on("scroll", onScroll);
    	});
    });


    function onScroll(event){
    	var scrollPos = $(document).scrollTop();
    	$('#menu li a').each(function () {
    		var navHeight = $('nav.nav-box').height();
    		var currLink = $(this);
    		var refElement = $(currLink.attr("href"));
    		if (refElement.position().top  <= scrollPos + navHeight && refElement.position().top + refElement.height() > scrollPos) {
    			$('#menu li a').removeClass("active");
    			currLink.addClass("active");
    		}
    		else{
    			currLink.removeClass("active");
    		}
    	});
    }



// activate aos


$("#portfolio-modal").iziModal();






mobile = ($(window).width() > 768 ? true : false);
$(window).resize(function(){ 
	mobile = ($(window).width() > 768 ? true : false);
});





// hover effect on portfolio
$('.project-box').bind({
	mouseover: function () {

		if(mobile) {

			$(this).css({'transform': 'scale(1.4)'});
			$('.project-box').not($(this)).css({'transform': 'scale(.7)'});
		}

	},
	mouseout: function () {
		$('.project-box').css({'transform': 'scale(1)'});

	}
});















});








function showPage() {
	$("#wrapper").show();
	$("#loading-box").hide();
}


$(window).on('load', function() {
	showPage();
	window.sr = ScrollReveal();

	sr.reveal('.title, .project-box');

	sr.reveal('#service-1, #service-2, #service-3, .about-section', {
		origin: 'bottom',
		distance: '50px',
		duration: 1000,
		delay: 800,
	});

});
