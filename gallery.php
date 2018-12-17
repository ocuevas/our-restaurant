<?php require("includes/header.php"); ?>

<h2 style="text-align:center">Breakfast</h2>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="assets/img/waffles copy.jpg" style="width:100%">
  <div class="text">Waffles</div>
</div>

<div class="mySlides fade">
  <img src="assets/img/eggs copy.jpg" style="width:100%">
  <div class="text">Eggs</div>
</div>

<div class="mySlides fade">
  <img src="assets/img/Pancakes copy.jpg" style="width:100%">
  <div class="text">Pancakes</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<h2 style="text-align:center">Lunch</h2>

<div class="slideshow-container">
  <div class="mySlides1">
    <img src="assets/img/blt copy.jpeg" style="width:100%">
  	<div class="text">BLT</div>
   </div>

  <div class="mySlides1">
    <img src="assets/img/chili copy.jpeg" style="width:100%">
	 <div class="text">Chili</div>
  </div>


  <div class="mySlides1">
    <img src="assets/img/wrap copy.jpeg" style="width:100%">
	 <div class="text">Turkey Wrap</div>
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>

<h2 style="text-align:center">Dinner</h2>
<div class="slideshow-container">
  <div class="mySlides2">
    <img src="assets/img/burger copy.jpg" style="width:100%">
	<div class="text">Burger</div>
  </div>

  <div class="mySlides2">
    <img src="assets/img/cheesesteak copy.jpg" style="width:100%">
	<div class="text">Cheesesteak</div>
  </div>

  <div class="mySlides2">
    <img src="assets/img/chicken sandwich copy.jpg" style="width:100%">
	<div class="text">Chicken Sandwich</div>
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>

<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>


<?php require("includes/footer.php"); ?>