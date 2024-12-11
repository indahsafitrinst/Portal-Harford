<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/Assets/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="assets/js/jquery-slim.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
/* Back to Top Pure CSS by igniel.com */
html {scroll-behavior:smooth;}
.ignielToTop {width:50px; height:50px; position:fixed; bottom:50px; right: 50px; z-index:99; cursor:pointer; border-radius:100px; transition:all .5s; background:#87CEFA url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;}
.ignielToTop:hover {background:blue url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;}

    .class {
    scroll-behavior: [ auto | smooth ];
}
</style>
<a href="#" class="ignielToTop"></a>
<body>
    <x-slot name="header" style="width:60% position:fixed">
        <h2 class="font-semibold text-xl text-gray-400 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    
  <!-- carousel pict -->
  <div class="slideshow-container">
  
    <div class="mySlides fade">
    <div class="sambutan">
         <p class="text"><b>The Academic Portal is a system that allows Harford Institute academics to receive 
            information more quickly via the Internet. This system is expected to make it easier 
            for every academic community to carry out academic activities and the 
            teaching and learning process. Welcome to use this facility.</b></p>
    </div>
    <img src="home.jpg" style="width:100%; height:650px; margin-top:3px;">
    </div>
    <div class="mySlides fade">
    <img src="profil4.jpg" style="width:100%; height:650px; margin-top:3px;">
    </div>
    <div class="mySlides fade">
    <img src="profil3.jpg" style="width:100%; height:650px; margin-top:3px;">
    </div>
  
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>


<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

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
    
    

     <div class="motto">
          <h1><b>"Every Single Student is Our Priority".</b></h1>
    </div>

    
    <!-- info -->
    <div class="row1" style="margin:80px 300px 300px 300px;">
        <div class="column">
            <div class="kartu">
            <p><i class="fa fa-calendar"></i></p>
            <h3>15+</h3>
            <p>Years</p>
            </div>
        </div>

        <div class="column">
            <div class="kartu" style="margin-left:5px;">
            <p><i class="fa fa-building"></i></p>
            <h3>14+</h3>
            <p>Branches</p>
            </div>
        </div>
        
        <div class="column">
            <div class="kartu" style="margin-left:40px;">
            <p><i class="fa fa-users"></i></p>
            <h3>50+</h3>
            <p>Teachers</p>
            </div>
        </div>
        
        <div class="column">
            <div class="kartu"style="margin-left:75px;">
            <p><i class="fa fa-users"></i></p>
            <h3>50000+</h3>
            <p>Students</p>
            </div>
        </div>
        </div>
    </div> 
</div>        
</div> 


<footer class="footer-distributed">
 
 <div class="footer-left">
 
 <img src="logo.png" style="width:300px; height:100px;">
 
 <p class="footer-links">
 <a href="#">Home</a>
 ·
 <a href="https://harfordinstitute.com/">Blog</a>
 
 </p>
 
 <p class="footer-company-name">Harford Institute &copy; 2021</p>
 </div>
 
 <div class="footer-center">
 
 <div>
 <i class="fa fa-map-marker" style="padding-top:1px;"></i>
 <p><span>Jl.Sei Sikambing no.171</span> Sekip, Medan</p>
 </div>
 
 <div>
 <i class="fa fa-phone" style="padding-top:1px;"></i>
 <p>+62811992110</p>
 </div>
 
 <div>
 <i class="fa fa-envelope" style="padding-top:1px;"></i>
 <p><a href="mailto:support@company.com">harfordinstituteportal@gmail.com</a></p>
 </div>
 
 </div>
 
 <div class="footer-right">
 
 <p class="footer-company-about"style="color:white;">
 <span>HARFORD INSTITUTE</span>
 Other's teach you english we make you speak english
 </p>
 
 <div class="footer-icons">
 
 <a href="https://www.instagram.com/harford_institute/"><i class="fa fa-instagram" style="margin-top:-5px; margin-left:-3px;"></i></a>
 <a href="https://harfordinstitute.com/"><i class="fa fa-google" style="margin-top:-5px; margin-left:-3px;"></i></a>
 <a href="https://api.whatsapp.com/send?phone=628192000016"><i class="fa fa-whatsapp" style="margin-top:-5px; margin-left:-3px;"></i></a>
 
 </div>
 
 </div>
 
 </footer>

<script src="assets/js/jquery-slim.min.js"></script>
<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}



/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>



</body>
</html>
</x-app-layout>