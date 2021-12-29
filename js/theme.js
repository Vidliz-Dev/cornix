'use strict'

$(document).ready(function () {

	// theme color cookies and switcher
	let body = document.querySelector('body')
	let toggler = document.getElementById('theme-toggler-checkbox')
	let navbar = document.querySelector('nav')

	if (getCookie('theme') === undefined) {
		if (body.classList.contains('theme-light')) {			
			setCookie('theme', 'theme-light', 1)			
		} else if (body.classList.contains('theme-dark')) {			
			setCookie('theme', 'theme-dark', 1)
		}
	}

	$('#theme-toggler-checkbox').click(function () {
		if (getCookie('theme') == 'theme-dark') {
			body.classList.remove('theme-dark')
			body.classList.add('theme-light')
			toggler.classList.remove('btn-toggle-dark')
			toggler.classList.add('btn-toggle-light')
			navbar.classList.remove('navbar-dark')
			navbar.classList.add('navbar-light')
			reloadIframe('dark', 'light')
			setCookie('theme', 'theme-light', 1)
		} else if (getCookie('theme') == 'theme-light') {
			body.classList.remove('theme-light')
			body.classList.add('theme-dark')
			toggler.classList.remove('btn-toggle-light')
			toggler.classList.add('btn-toggle-dark')
			navbar.classList.remove('navbar-light')
			navbar.classList.add('navbar-dark')
			reloadIframe('light', 'dark')
			setCookie('theme', 'theme-dark', 1)
		}
	})


	//footer message
	$( ".footer-messege__closed" ).click(function() {
		$(".footer-messege").toggleClass("is-closed");
  		setCookie("footerMsg", "closed", 1);
	});


	//navbar search
	$( ".nav-search__open" ).click(function() {
		$(".nav-search-wrapper").toggleClass("open");
		if ($(".nav-search-wrapper").hasClass("open")){
			$(".nav-search__input").focus();
		}
	});	


	// init AOS 
	window.setTimeout(function () {
		AOS.init({
			duration: 1000,
		})
	}, 50)

	
	// Country Restriction Modal
	//==================================
	const restrictedCountries = ['United States', 'Canada', 'United Kingdom', 'Austria', 'Belgium', 'Bulgaria', 'Croatia', 'Republic of Cyprus', 'Czech Republic', 'Denmark', 'Estonia', 'Finland', 'France', 'Germany', 'Greece', 'Hungary', 'Ireland', 'Italy', 'Latvia', 'Lithuania', 'Luxembourg', 'Malta', 'Netherlands', 'Poland', 'Portugal', 'Romania', 'Slovakia', 'Slovenia', 'Spain', 'Sweden']

	async function getLocation() {
		const url = `https://get.geojs.io/v1/ip/country.json`
		try {
			const res = await fetch(url)
			return await res.json()
		} catch (error) {
			console.log(error)
		}
	}

	async function checkCountry(){
		const currentCountry = await getLocation()
		console.log(currentCountry.name)

		restrictedCountries.forEach(country => {			
			if(country === currentCountry.name){				
				$('#country-rest-modal').modal('show');

				$('#country-rest-modal').on('hidden.bs.modal', function (e) {
					setCookie('countryRestModalShown', 'shown', 10)
				})	
			}
		})
	}

	if (getCookie('countryRestModalShown') !== 'shown') {
		checkCountry()
	}
	//==================================	
})


/*
    //scroll top    
    $('#main').append('<a href="#" id="return-to-top"><i class="icon-chevron-up"></i></a>');
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 150) {        
            $('#return-to-top').fadeIn(400);    
        } else {
            $('#return-to-top').fadeOut(400); 
        }
    });
    $('#return-to-top').click(function() {    
        $('body,html').animate({
            scrollTop : 0                      
        }, 500);
    });
     */
