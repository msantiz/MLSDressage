<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <div class = "header">

        <h1> <center><font size = "10" face = "Georgia" color = "black"> <b>Mara Santiz Dressage</b></font></center></h1>

<div class="picture">
<img src = "../images/logo2020.png" width="150" height="150" align = "left" class="horse">
</div>

<div class = "flex">

<div class="navbar">

  <a href="/">Home</a>

  <div class="dropdown">

<button class="dropbtn">About Me



</button>

<div class="dropdown-content">



<a href="./career">Career</a>

<a href="./education">Education</a>

<a href="./awards">Awards</a>

</div>

</div>


<a href="./services">Services</a>
<a href="./marketing">Sponsors</a>
  <a href="https://dressagediscussions.home.blog/" target="_blank">Blog</a>

    <a href="./contactus">Contact Us</a>

    <a href="./photos">Photo Gallery</a>



</div>

</div>

</div>

</head>

<style>

 

.header{

padding: 20px;

text-align: center;

background: white;

color: blue;

font-size = 30px;
border-style: solid;
border-width: small;
border-color: #ff3333;

}

 

.horse {

              position: absolute;

              top: 17px;

              left: 17px;

}

 

.flex {

              display: flex;

              justify-content: space-around;

              }

.navbar {

  overflow: hidden;

  background-color: #333;

  font-family: Arial;

}

 

/* Links inside the navbar */

.navbar a {

  float: left;

  font-size: 16px;

  color: white;

  text-align: center;

  padding: 6px 8px;

  text-decoration: none;

}

 

/* The dropdown container */

.dropdown {

  float: left;

  overflow: hidden;

}

 

/* Dropdown button */

.dropdown .dropbtn {

  font-size: 16px;

  border: none;

  outline: none;

  color: white;

  padding: 6px 8px;

  background-color: inherit;

  font-family: inherit; /* Important for vertical align on mobile phones */

  margin: 0; /* Important for vertical align on mobile phones */

}

 

/* Add a red background color to navbar links on hover */

.navbar a:hover, .dropdown:hover .dropbtn {

  background-color: red;

}

 

/* Dropdown content (hidden by default) */

.dropdown-content {

  display: none;

  position: absolute;

  background-color: #f9f9f9;

  min-width: 160px;

  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

  z-index: 1;

}

 

/* Links inside the dropdown */

.dropdown-content a {

  float: none;

  color: black;

  padding: 12px 16px;

  text-decoration: none;

  display: block;

  text-align: left;

}

 

/* Add a grey background color to dropdown links on hover */

.dropdown-content a:hover {

  background-color: #ddd;

}

 

/* Show the dropdown menu on hover */

.dropdown:hover .dropdown-content {

  display: block;

}

 

body{

background-color:   #C0C0C0;

}

.box{
  border:3px;
border-style:solid;
border-color:white;
padding:1em;
margin: 42px;
}

.bigbox{
display: block;
    background-color: #333;
    left: 50%;
    transform: translateX(-50%);
    width: 57%;
    position: relative;
}


/* 
.bigbox
width: 75%;
    position: relative;
    left: 50%;
    transform: translateX(-50%); 
    
    
.list 
remove padding

.box 
margin: 42px*/

* {
  box-sizing: border-box;
}

.row > .column{
  padding: 0 8px;
}

.row{
  display: flex;
  flex-wrap: wrap;
}

.row:after{
  content: "";
  display: table;
  clear: both;
}

.column{
  flex: 25%;
  float: left;
  max-width: 25%;
}

.modal{
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 50px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: #333;
}

.modal-content{
  position: relative;
  background-color: #333;
  margin: auto;
  padding: 0;
  width: 55%;
  max-width: 1200px;
}

.close{
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover, .close:focus{
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides{
  display: none;
}

.cursor{
  cursor: pointer;
}

.prev, .next{
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

.next{
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover, .next:hover{
  background-color: rgba(0, 0, 0, 0.8);
}

.numbertext{
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img{
  margin-bottom: -4px;
}

.caption-container{
  text-align: center;
  background-color: #333;
  padding: 0.1px 16px;
  color: white;
}

.demo{
  opacity: 0.6;
}

.active, .demo:hover{
  opacity: 1;
}

img.hover-shadow{
  transition: 0.3s;
}

.hover-shadow:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.outline{
  border:2px;
  border-style:solid;
  border-color:white;
  padding:1em;
}

</style>

 

 

 

 

<body>


<div class = "bigbox">
<br>
<div class = "box">



<div class="row">
  
<div class="column">
  <div class="outline">
    <img src="../images/IMG_3173.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <img src="../images/TEAM-034.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <center><img src="../images/mi.jpg" style="width:44%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></center>
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <img src="../images/EQUE3090.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
  </div>
</div><br>

<div class="row">
  <div class="column">
  <div class="outline">
    <center><img src="../images/IMG_2164.jpg" style="width:50%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor"></center>
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <center><img src="../images/IMG_5765.jpg" style="width:45%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor"></center>
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <center><img src="../images/EQUE0832.jpg" style="width:45%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor"></center>
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <img src="../images/IMG_8010.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
  </div>
</div><br>



<div class="row">
<div class="column">
  <div class="outline">
    <img src="../images/EQUE1513.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <center><img src="../images/IMG_1191.png" style="width:40%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor"></center>
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <center><img src="../images/IMG_3781.jpg" style="width:45%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor"></center>
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <center><img src="../images/IMG_5821.jpg" style="width:45%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor"></center>
  </div>
  </div>
</div><br>

<div class="row">
  <div class="column">
  <div class="outline">
    <center><img src="../images/IMG_1827-M copy.jpg" style="width:45%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor"></center>
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <center><img src="../images/IMG_3525.jpg" style="width:38%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor"></center>
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <img src="../images/ferdiexc.png" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <center><img src="../images/cinderlendon.jpg" style="width:45%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor"></center>
  </div>
  </div>
</div><br>

<div class="row">
  <div class="column">
  <div class="outline">
    <center><img src="../images/IMG_3174.jpg" style="width:40%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor"></center>
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <img src="../images/EQUE2699.jpg" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <center><img src="../images/untitled shoot-0409.jpg" style="width:45%" onclick="openModal();currentSlide(19)" class="hover-shadow cursor"></center>
  </div>
  </div>

  <div class="column">
  <div class="outline">
    <center><img src="../images/IMG_9742.jpg" style="width:50%" onclick="openModal();currentSlide(20)" class="hover-shadow cursor"></center>
  </div>
  </div>
</div><br>




</div>
<br>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>

  <div class="modal-content">
    <div class="mySlides">
      <!--<div class="numbertext">1 / 3</div>-->
      <img src="../images/IMG_3173.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">2 / 3</div>-->
      <img src="../images/TEAM-034.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/mi.jpg" style="width:44%"></center>
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <img src="../images/EQUE3090.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/IMG_2164.jpg" style="width:50%"></center>
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/IMG_5765.jpg" style="width:45%"></center>
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/EQUE0832.jpg" style="width:45%"></center>
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <img src="../images/IMG_8010.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <img src="../images/EQUE1513.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/IMG_1191.png" style="width:40%"></center>
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/IMG_3781.jpg" style="width:45%"></center>
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/IMG_5821.jpg" style="width:45%"></center>
    </div>


    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/IMG_1827-M copy.jpg" style="width:45%"></center>
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/IMG_3525.jpg" style="width:38%"></center>
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <img src="../images/ferdiexc.png" style="width:100%">
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/cinderlendon.jpg" style="width:45%"></center>
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/IMG_3174.jpg" style="width:40%"></center>
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <img src="../images/EQUE2699.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/untitled shoot-0409.jpg" style="width:45%"></center>
    </div>

    <div class="mySlides">
      <!--<div class="numbertext">3 / 3</div>-->
      <center><img src="../images/IMG_9742.jpg" style="width:50%"></center>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="column">
      <img class="demo cursor" src="../images/IMG_3173.jpg" style="width:100%" onclick="currentSlide(1)" alt="Kentucky Dressage 2015">
    </div>

    <div class="column">
      <img class="demo cursor" src="../images/TEAM-034.jpg" style="width:100%" onclick="currentSlide(2)" alt="Team Challenge Eventing 2014">
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/mi.jpg" style="width:44%" onclick="currentSlide(3)" alt="Ayden Uhlir Clinic 2017"></center>
    </div>

    <div class="column">
      <img class="demo cursor" src="../images/EQUE3090.jpg" style="width:100%" onclick="currentSlide(4)" alt="Hunter's Run Eventing 2013">
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/IMG_2164.jpg" style="width:50%" onclick="currentSlide(5)" alt="MLS Dressage Training 2019"></center>
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/IMG_5765.jpg" style="width:45%" onclick="currentSlide(6)" alt="Willowbrooke Jumper Show 2016"></center>
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/EQUE0832.jpg" style="width:45%" onclick="currentSlide(7)" alt="2013 Area VIII Novice Young Rider Champion"></center>
    </div>

    <div class="column">
      <img class="demo cursor" src="../images/IMG_8010.jpg" style="width:100%" onclick="currentSlide(8)" alt="Hunter's Run Eventing 2014">
    </div>

    <div class="column">
      <img class="demo cursor" src="../images/EQUE1513.jpg" style="width:100%" onclick="currentSlide(9)" alt="Waterloo Cross Country 2015">
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/IMG_1191.png" style="width:40%" onclick="currentSlide(10)" alt="MLS Dressage Training 2019"></center>
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/IMG_3781.jpg" style="width:45%" onclick="currentSlide(11)" alt="2019 Clinic with Olympic Gold Medalist, Lendon Gray"></center>
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/IMG_5821.jpg" style="width:45%" onclick="currentSlide(12)" alt="Honey Run 2017"></center>
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/IMG_1827-M copy.jpg" style="width:45%" onclick="currentSlide(13)" alt="2017 Clinic with International Rider, Jennifer Baumert"></center>
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/IMG_3525.jpg" style="width:38%" onclick="currentSlide(14)" alt="Woodbine Dressage 2016"></center>
    </div>

    <div class="column">
      <img class="demo cursor" src="../images/ferdiexc.png" style="width:100%" onclick="currentSlide(15)" alt="Canter 2013">
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/cinderlendon.jpg" style="width:45%" onclick="currentSlide(16)" alt="2019 Clinic with Olympic Gold Medalist, Lendon Gray"></center>
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/IMG_3174.jpg" style="width:40%" onclick="currentSlide(17)" alt="Fourth Level at Waterloo 2018"></center>
    </div>

    <div class="column">
      <img class="demo cursor" src="../images/EQUE2699.jpg" style="width:100%" onclick="currentSlide(18)" alt="3 ft Jumpers 4H Fair 2013">
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/untitled shoot-0409.jpg" style="width:45%" onclick="currentSlide(19)" alt="Ayden Uhlir Clinic 2017"></center>
    </div>

    <div class="column">
      <center><img class="demo cursor" src="../images/IMG_9742.jpg" style="width:50%" onclick="currentSlide(20)" alt="First 4H Fair"></center>
    </div>
  </div>
</div>
 

<script>
function openModal(){
  document.getElementById("myModal").style.display = "block";
}

function closeModal(){
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n){
  showSlides(slideIndex += n);
}

function currentSlide(n){
  showSlides(slideIndex = n);
}

function showSlides(n){
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");

  if(n > slides.length){
    slideIndex = 1
  }
  if(n < 1){
    slideIndex = slides.length
  }
  for(i = 0; i < slides.length; i++){
    slides[i].style.display = "none";
  }
  for(i = 0; i < dots.length; i++){
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        
    </body>

    <style>
@media screen and (max-width: 1000px){

   .picture{
     display: flex;
     justify-content: center;
     margin-block-start: 1.34em;
     margin-block-end: 1.34em;
   }
 
 .horse{
   position: relative;
   margin-right: 45px;
   margin-bottom: 40px;
 }
 .column{
   flex: 100%;
   max-width: 100%;
 }

 .bigbox{
display: block;
padding:3em;
    background-color: #333;
    left: 50%;
    transform: translateX(-50%);
    width: 90%;
    position: relative;
}

.box{
  border:3px;
border-style:solid;
border-color:white;
padding:1em;
margin: 10px;
}

 

 }
</style>

</html>