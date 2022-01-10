'use strict'

$(document).ready(function () {


	//section title animation
	$( ".section-title" ).each(function() {
		if ( $(this).isOnScreen() ) {
			$(this).addClass('scrolled');				
		} else {
			$(this).removeClass('scrolled');
		}			
	});
	//section title animation
	$(window).scroll(function(){		
		$( ".section-title" ).each(function() {
			if ( $(this).isOnScreen() ) {
				$(this).addClass('scrolled');				
			} else {
				$(this).removeClass('scrolled');
			}			
		  });
	});

	//navbar search
	$( ".nav-search__open" ).click(function() {

		const searchWrap = $(".nav-search-wrapper");
		const searchInput = $(".nav-search__input");
		let elementsWidth = $(".navbar-brand").width() + $(".navbar-utility-menu").width() + searchWrap.width();
		let inputWidth = $(".navbar .container").width() - elementsWidth - 30;

		searchWrap.toggleClass("open");

		if (searchWrap.hasClass("open")){
			searchInput.focus();
			$(".nav-search").css('width', inputWidth);
		} else {
			$(".nav-search").css('width', 0);
		}
	});	


	// init AOS 
	window.setTimeout(function () {
		AOS.init({
			duration: 1000,
		})
	}, 50)
	
})

