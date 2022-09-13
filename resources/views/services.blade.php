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

<!--<a href="./tenyear">Ten Year Plan</a>-->

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



 .list{
  display: flex;
  justify-content: space-around;
 }

 .list1{
  display: flex;
  justify-content: space-around;
 }



.Box{
  border:3px;
border-style:solid;
border-color:black;
padding:1em;
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


@media only screen and (max-width: 1150px){
  .list{
    flex-direction: column;
  }
}

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


.bigbox{
display: block;
padding:3em;
    background-color: #333;
    left: 50%;
    transform: translateX(-50%);
    width: 70%;
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

 

 

<body>
<div class ="bigbox">
<br><br><br>

<center><font size = "6" face = "Palatino" color = "white">Services</center>
</font>

  <font size = "5" face = "Palatino" color = "white">
  <div class = "list">

<div class = "box">

<ul>

<li>Group lesson on a school horse (one hour): $50</li>

<li>Group lesson on your horse (one hour): $40</li>

<li>Private lesson on a school horse (half hour): $55</li>

<li>Private Lesson on your horse (half hour): $50</li>

<li>Training ride: $45</li>

<li>Coaching at competitions: $20 per day</li>

<li>Clinics: $65 per lesson plus travel expenses</li>




</ul></font>
<center><font size = "3" face = "Palatino" color = "white">*group lessons have 3-4 students*</font></center>
</div>


</div>



<br>


<center><font size = "5" face = "Palatino" color = "white">------------------------֎------------------------<br><br><br>
</font>

<font size = "6" face = "Palatino" color = "white">Current Specials
</font></center>

<font size = "5" face = "Palatino" color = "white">
<div class = "list1">
<div class = "box">
<ul>

<li>Monthly group lesson package on a school horse:<br>$190 per month</li><br>
<li>Monthly group lesson package on your horse:<br>$150 per month</li><br>
<li>Monthly private lesson package on a school horse:<br>$210 per month</li><br>
<li>Monthly private lesson package on your horse:<br>$190 per month</li>




</ul></font>
<center><font size = "3" face = "Palatino" color = "white">*payment due on the first of the month*</font></center>
</div>

</div>
<br><br>
</div>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</body>

</html>