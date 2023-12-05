var mobileNav = document.querySelector('.mobile-nav');
mobileNav.style.display= 'none';

$(document).ready(function(){
  
var mobileButton = document.querySelector('.mobile-button');



mobileButton.addEventListener("click", ()=>{
	if (mobileNav.style.display == "none")
	{	mobileNav.style.display = "flex";
	}	else {
		mobileNav.style.display = "none";
	}
});

$('.slideshow').slick({
    autoplay: true,
	autoplaySpeed: 4300,
	speed: 900,
	arrows: false,
	dots: false,
	fade: true
  });

});