var slideID = 1;
function slideSwitch(e) { slideDisplay(slideID += e); }
function slideDisplay(e) {
  var i,
    slides = document.getElementsByClassName("slide"),
    slidesL = slides.length;
  if (e > slidesL) { slideID = 1 } 
  if (e < 1) { slideID = slidesL }
  for (i = 0; i < slidesL; i++) {
      slides[i].style.display = "none"; 
  }
  slides[slideID-1].style.display = "block";
}
