// Module Sliders
document.getElementById("module1").onclick = function () {
    document.querySelector(".active").classList.remove("active");
    document.getElementById("module-section1").classList.add("active");
    currentSlide = 0;
  }
  
  document.getElementById("module2").onclick = function () {
    document.querySelector(".active").classList.remove("active");
    document.getElementById("module-section2").classList.add("active");
    currentSlide = 1;
  }
  
  document.getElementById("module3").onclick = function () {
    document.querySelector(".active").classList.remove("active");
    document.getElementById("module-section3").classList.add("active");
    currentSlide = 4;
  }
  
  document.getElementById("module4").onclick = function () {
    document.querySelector(".active").classList.remove("active");
    document.getElementById("module-section4").classList.add("active");
    currentSlide = 13;
  }
  
  document.getElementById("module5").onclick = function () {
    document.querySelector(".active").classList.remove("active");
    document.getElementById("module-section5").classList.add("active");
    currentSlide = 14;
  }
  
  document.getElementById("module6").onclick = function () {
    document.querySelector(".active").classList.remove("active");
    document.getElementById("module-section6").classList.add("active");
    currentSlide = 15;
  }
  
  document.getElementById("module7").onclick = function () {
    document.querySelector(".active").classList.remove("active");
    document.getElementById("module-section7").classList.add("active");
    currentSlide = 16;
  }
  
  document.getElementById("module8").onclick = function () {
    document.querySelector(".active").classList.remove("active");
    document.getElementById("module-section8").classList.add("active");
    currentSlide = 17;
  }

  // Our buttons supply either a 1 or a -1 for adding or subtracting slide values
document.getElementById("prev").onclick = function () {
  displaySlide(-1);
}
document.getElementById("next").onclick = function () {
  displaySlide(1);
}

// Put our slides in an array and create a variable for the initial slide
var slides = document.getElementsByClassName("module-section");
var currentSlide = 0;

// Create a function to display a slide with a 1 or -1 being supplied as the parameter (i)
function displaySlide(i) {
    // Remove class which displays active slide
    document.querySelector(".active").classList.remove("active");
    /* 
    Do math to figure out which slide should be displayed
    If it is higher than our total number of slides, go to the first slide
    If it is less than 0, go to the last slide since 0 is the first slide
    Otherwise, we'll just use the number and go to that index in the array             
    */
    currentSlide = currentSlide + i;
    if (currentSlide >= slides.length) {
        currentSlide = 0;
    }
    if (currentSlide < 0) {
        currentSlide = slides.length - 1;
    }
    slides[currentSlide].classList.add("active");
}