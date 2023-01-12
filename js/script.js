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



 /*------------------------------------------------  || TIPS & ADVANCE ||  ------------------------------------------------ */
