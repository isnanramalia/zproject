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


 /*------------------------------------------------  || TIPS & ADVANCE ||  ------------------------------------------------ */
// Fungsi untuk menghitung harga total
function calculateTotal() {
	// Dapatkan referensi ke semua input jumlah produk
	var inputs = document.querySelectorAll('#cart input[type="number"]');
	
	// Inisialisasi variabel harga total
	var total = 0;
	
	// Loop through each input and calculate total
	for (var i = 0; i < inputs.length; i++) {
	  // Dapatkan harga produk dari tabel
	  var price = parseInt(inputs[i].parentNode.previousSibling.textContent);
    
	  // Dapatkan jumlah produk dari input
	  var quantity = inputs[i].value;
	  
	  // Hitung sub total harga produk
	  var subtotal = price * quantity;
	  
	  // Tambahkan sub total ke harga total
	  total += subtotal;
	}
	
	// Update harga total di halaman
	document.querySelector('#total').textContent = total;
  }
  
  // Hitung harga total saat halaman pertama kali di load
  calculateTotal();
  
  // Tambahkan event listener ke semua input jumlah produk
  var inputs = document.querySelectorAll('#cart input[type="number"]');
  for (var i = 0; i < inputs.length; i++) {
	inputs[i].addEventListener('change', calculateTotal);
  }
  
  // Tambahkan event listener ke tombol pembayaran
  document.querySelector('#pay-button').addEventListener('click', function() {
	// Tampilkan pesan pembayaran berhasil
	alert('Pembayaran berhasil!');
  });
  
  
  
  