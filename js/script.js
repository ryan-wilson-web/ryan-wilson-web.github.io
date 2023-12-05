// Mobile-navigation drop down interactivity.
const mobileButton = document.querySelector("#mobile-nav-button");
const mobileNav = document.querySelector("#mobile-nav");
const deskNav = document.querySelector("#desk-nav");

mobileNav.style.display = "none";

mobileButton.addEventListener("click", ()=> {
	if (mobileNav.style.display == "none") {
		mobileNav.style.display = "flex";
	} else {
		mobileNav.style.display = "none";}
	});

// Update copyright year.
const d = new Date();
let year = d.getFullYear();
document.getElementById("year").innerHTML = year;


function hideMobileNavButton(x) {
	if (x.matches) { // If media query matches
		console.log("hello");
		mobileNav.style.display = "none";
	} else {
		mobileNav.style.backgroundColor = "flex";
	}
  }
  
  var x = window.matchMedia("(min-width: 900px)")
  hideMobileNavButton(x) // Call listener function at run time
  x.addEventListener("statechange", hideMobileNavButton) // Attach listener function on state changes
  console.log(x);