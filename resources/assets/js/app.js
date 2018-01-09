
$(document).ready(function() {
	$('#page').fullpage({
		//Navigation
		anchors: ['/', 'about', 'portfolio', 'contact'],
		lockAnchors: true,

		//Scrolling

		scrollingSpeed: 700,


		//Accessibility
		keyboardScrolling: true,
		animateAnchor: true,
		recordHistory: true,

		//Design

		parallax: true,

		//Custom selectors
		sectionSelector: '.section',
		slideSelector: '.slide',

		lazyLoading: true,

		//events
		onLeave: function(index, nextIndex, direction){},
		afterLoad: function(anchorLink, index){
			var pages = {1: '/',
			2: 'about',
			3: 'portfolio',
			4: 'contact' };


			history.pushState(pages[index], pages[index], pages[index]);
			// $.fn.fullpage.moveTo(pages[index], 1);




	},
	afterRender: function(){},
	afterResize: function(){},
	afterResponsive: function(isResponsive){},
	afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){
	},
	onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
});



	$('ul.nav-box li a').click(function(){
		var slide = $(this).closest('li').data('menuanchor');
		console.log(slide);
		$.fn.fullpage.moveTo(slide, 1);
		return slide;
	});







	// showPage();

	// function showPage() {
	// 	$("#loading-box").hide();
	// 	$("#wrapper").show();
	// }
});