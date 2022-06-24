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

<a href="./tenyear">Ten Year Plan</a>

<a href="./career">Career</a>

<a href="./education">Education</a>

<a href="./awards">Awards</a>

</div>

</div>


  <a href="./marketing">Marketing Pitch</a>
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

</style>

 

 

 

 

<body>


<div class = "bigbox">
<br>
<div class = "box"><br>
<font size = "6" face = "roboto" color = "white"><b>University of Michigan-Dearborn</b></font><br>
<font size = "5" face = "roboto" color = "white">Master of Buisness Administration</font><br>
<font size = "5" face = "roboto" color = "white">Concentrations in Information Systems Management and International Business</font><br>
<font size = "5" face = "roboto" color = "white">Cummulative GPA: 3.4</font><br>
<font size = "5" face = "roboto" color = "white">Expected Graduation: 2023</font><br><br><br>

<font size = "6" face = "roboto" color = "white"><b>University of Michigan-Dearborn</b></font><br>
<font size = "5" face = "roboto" color = "white">BBA- Information Systems Management</font><br>
<font size = "5" face = "roboto" color = "white">Cummulative GPA: 3.7</font><br>
<font size = "5" face = "roboto" color = "white">Graduated with High Honors</font><br><br><br>

<font size = "6" face = "roboto" color = "white"><b>Relevant Coursework and Projects</b></font><br>
<font size = "5" face = "roboto" color = "white">
<ul>
<li>Business Application Programming (HTML, CSS, JavaScript): designed and wrote the code for this site</li>
<li>Information Systems Management courses</li>
</ul>
</font><br>

<font size = "6" face = "roboto" color = "white"><b>Awards and Honors</b></font><br>
<font size = "5" face = "roboto" color = "white">
<ul>
<li>Dean's List at the University of Michigan-Dearborn</li>
<li>Honor Roll at the University of Michigan-Dearborn</li>
</ul>
</font><br>
</div>
<br>
</div>
 


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

</html>
