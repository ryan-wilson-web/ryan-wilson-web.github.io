var mobileNav = document.querySelector('.mobile-nav');
mobileNav.style.display= 'none';
  
var mobileButton = document.querySelector('.mobile-button');

mobileButton.addEventListener("click", ()=>{
	if (mobileNav.style.display == "none")
	{	mobileNav.style.display = "flex";
	}	else {
		mobileNav.style.display = "none";
	}
});

