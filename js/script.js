let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navbar.classList.toggle('open');
}
 /*------------------------------------------------  || FAQ ||  ------------------------------------------------ */
//  FORM
 function validateForm() {
	var name = document.forms["contactForm"]["name"].value;
	var email = document.forms["contactForm"]["email"].value;
	var phone = document.forms["contactForm"]["phone"].value;
	var message = document.forms["contactForm"]["message"].value;
	if (name == "" || email == "" || phone == "" || message == "") {
	  alert("All fields must be filled out.");
	  return false;
	}
  }


 /*------------------------------------------------  || TIPS & ADVANCE ||  ------------------------------------------------ */
// COUROSEL
document.addEventListener("DOMContentLoaded", function() {
	var currentSlide = 0;
	var slides = document.querySelectorAll('#carousel .slide');
	var numSlides = slides.length;
	
	function showSlide(n) {
	  slides[currentSlide].style.display = 'none';
	  slides[n].style.display = 'block';
	  currentSlide = n;
	}
	
	document.querySelector('#prev').addEventListener('click', function() {
	  slides[currentSlide].style.opacity = 0;
	  showSlide((currentSlide - 1 + numSlides) % numSlides);
	  slides[currentSlide].style.opacity = 1;
	});
	
	document.querySelector('#next').addEventListener('click', function() {
	  slides[currentSlide].style.opacity = 0;
	  showSlide((currentSlide + 1) % numSlides);
	  slides[currentSlide].style.opacity = 1;
	});
	
	showSlide(0);
  });
  
  