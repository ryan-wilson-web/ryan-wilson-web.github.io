var mobileButton = document.querySelector("#mobile-nav-button");
var mobileNav = document.querySelector(".mobile-nav");
var serviceNavLink = document.querySelector("#services-desk-nav");
var servNavHover = document.querySelector(".serv-nav-hover"); 

mobileNav.style.display = "none";

mobileButton.addEventListener("click", ()=> {
	if (mobileNav.style.display == "none") {
		mobileNav.style.display = "flex";
	} else {
		mobileNav.style.display = "none";}
	});

$('#services-desk-nav').hover(function(){

$(this).children('ul').stop(true, false, true).slideToggle(400);
	
});

    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
	  'albumLabel': "",
	  'alwaysShowNavOnTouchDevices' : true
    })
