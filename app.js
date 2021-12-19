// var slideIndex = 1;
// showSlides(slideIndex);

// // Next/previous controls
// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// // Thumbnail image controls
// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//     if (n > slides.length){
//       slideIndex = 1
//     }
//     if (n < 1){
//       slideIndex = slides.length
//     }
//     for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//     }
//     // for (i = 0; i < dots.length; i++) {
//     //   dots[i].className = dots[i].className.replace(" active", "");
//     // }
// slides[slideIndex-1].style.display = "block";
// dots[slideIndex-1].className += " active";
// }

var i = 0; 
var images = [];
var time = 5000;

images[0] = "images/slide1.jpg";
images[1] = "images/slide2.jpg";
images[2] = "images/slide3.jpg";

function changeImg(){

  document.slide.src = images[i];

  if(i<images.length -1){
    i++;
  }
  else{
    i=0;
  }
  setTimeout("changeImg()",time);
}
window.onload=changeImg;

var btn = document.getElementById('btn');

function login(){
    window.location.href="rezervo.html"
}
