
'use strict';


/* check if elemeni is in viewport*/
$.fn.isOnScreen = function(){
    var win = $(window);
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};


//get parameters from Url
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

// create Cookie 
function setCookie(cName, cValue, expDays) {
	let date = new Date()
	date.setTime(date.getTime() + expDays * 24 * 60 * 60 * 1000)
	const expires = 'expires=' + date.toUTCString()
	document.cookie = cName + '=' + cValue + '; path=/'
}

// get Cookie 
function getCookie(cName) {
	const name = cName + '='
	const cDecoded = decodeURIComponent(document.cookie) //to be careful
	const cArr = cDecoded.split('; ')
	let res
	cArr.forEach((val) => {
		if (val.indexOf(name) === 0) res = val.substring(name.length)
	})
	return res
}

// reload TradingView widget's iFrame
function reloadIframe(from, to) {
	let widgets = document.querySelectorAll('.tradingview-widget-container iframe')

	for (let i = 0; i < widgets.length; i++) {
		
		let tmp = widgets[i].src
		widgets[i].removeAttribute('src')
		setTimeout(() => {
			if (tmp.indexOf(`colorTheme%22%3A%22${from}`) > -1) {
				widgets[i].setAttribute('src', tmp.split(`colorTheme%22%3A%22${from}`).join(`colorTheme%22%3A%22${to}`))
			} else if (tmp.indexOf(`colorTheme=${from}`) > -1) {
				widgets[i].setAttribute('src', tmp.split(`colorTheme=${from}`).join(`colorTheme=${to}`))
			}
		}, 50)
		
	}
}