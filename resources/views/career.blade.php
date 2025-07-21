<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div class = "header">
      <h1> <center><font size = "10" face = "Georgia" color = "black"> <b>MLS Dressage</b></font></center></h1>

      <div class="picture">
        <img src = "../images/PhotoRoom_20230324_053704.PNG" width="150" height="150" align = "left" class="horse" style="margin-left: 90px;">
      </div>

      <div class = "flex">

        <div class="navbar">

          <a href="/">Home</a>

          <div class="dropdown">

            <button class="dropbtn">About Me</button>

            <div class="dropdown-content">

              <a href="./career">My Story</a>

              <a href="./tenyear">Vision & Mission</a>

              <a href="./awards">Credentials & Recognition</a>

            </div>

          </div>

          <a href="./marketing">Sponsorship & Media</a>

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

</style>


<body>

<div class = "bigbox"><br>
  <h1> <center><font size = "6" face = "roboto" color = "white"> <i>"Dressage with Purpose"</i></font></center></h1>

  <div class = "box"><br>

    <font size = "5" face = "roboto" color = "white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm Mara Ziadeh- a dressage rider, advocate, and product 
      manager based in Michigan. I'm currently training my horse, Lucas, with the long-term goal of representing 
      Palestine in international dressage competition. My mission is to use sport as a platform for advocacy, 
      visibility, and change.
    </font><br><br><br>

    <font size = "5" face = "roboto" color = "white"><u>My Journey in the Saddle</u></font><br>

    <font size = "5" face = "roboto" color = "white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've been riding since childhood and have spent over a 
      decade developing a deep respect for classical training and ethical horsemanship. From eventing with my first horse, Ferdie, to 
      FEI-level dressage, I've trained and competed a wide range of horses- including OTTBs, sensitive types, 
      and green young horses- with a strong emphasis on kindness, connection, and clarity.</font><br><br><br>

    <font size = "5" face = "roboto" color = "white"><u>Professional Life Outside the Barn</u></font><br>

    <font size = "5" face = "roboto" color = "white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Outside the arena, I work as a Product Manager 
      in the tech world. I've led cross-functional teams at companies like BorgWarner and Ford, 
      written user stories, created product roadmaps and translated vision into execution. I also 
      work independently as a web developer and beginner mobile app developer, using my technical 
      skills to build and maintain this site, manage my blog, and design tools like my in-progress 
      animal care tracking app.
    </font><br><br><br>

    <font size = "5" face = "roboto" color = "white"><u>Academic Background</u></font><br>

    <font size = "5" face = "roboto" color = "white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I hold both a BBA and MBA from the 
      University of Michigan-Dearborn, with a focus on Information Systems Management. 
      This background has allowed me to not only understand business and strategy but 
      to directly build and maintain the tools that support my mission- including this website.
    </font><br><br><br>

    <font size = "5" face = "roboto" color = "white"><u>Why Palestine?</u></font><br>

    <font size = "5" face = "roboto" color = "white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Today, my riding and advocacy are 
      intertwined. As someone connected to Palestine through marriage, I feel called 
      to represent the people of Palestine through the sport I love- and to raise 
      awareness through every ride, every word, and every moment in the spotlight. I'm 
      building something much bigger than a competition record. I'm building visibility 
      and connection.
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
   margin-right: 120px;
   margin-bottom: 40px;
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
