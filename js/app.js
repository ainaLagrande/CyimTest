// Caroussel 
let slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}


// Reveal on scroll 
const threshold = .1
const options = {
	root:null,
	rootMargin:'0px',
	threshold
}

const handleIntersect = function (entries, observer) {
	entries.forEach(function (entry) {
	  if (entry.intersectionRatio > threshold) {
			entry.target.classList.add('reveal-visible');
			observer.unobserve(entry.target);
		} 
	});
}
const observer = new IntersectionObserver(handleIntersect ,options)
document.querySelectorAll('.reveal').forEach(function(r){

	observer.observe(r)

})
