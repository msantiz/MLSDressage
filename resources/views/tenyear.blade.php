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

    position: relative;

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

            <div class = "box">
                <font size = "5" face = "roboto" color = "white"><u>Mission</u></font><br>

                <font size = "5" face = "roboto" color = "white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I ride for something bigger than the 
                    arena. My mission is to use the sport of dressage to advocate for Palestine- 
                    bringing awareness, visibility, and humanity to a region too often misunderstood 
                    or overlooked. Through ethical horsemanship, education, and storytelling, I aim 
                    to show that purpose and passion can ride side by side.
                </font><br><br><br>

                <font size = "5" face = "roboto" color = "white"><u>Vision</u></font><br>

                <font size = "5" face = "roboto" color = "white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My vision is to compete at the 
                    international level representing Palestine in FEI-sanctioned dressage 
                    competition- becoming the first rider of my kind to do so. I believe that 
                    sport can be a bridge for empathy, and that every test, every training 
                    session, and every story shared can serve as a platform for justice and connection.
                </font><br><br><br>

                <font size = "5" face = "roboto" color = "white"><u>Core Goals</u></font><br><br>

                <font size = "5" face = "roboto" color = "white">
                    Competitive Goals:
                    <ul>
                        <li>Train Lucas to FEI levels and qualify under the Palestinian Flag</li>
                        <li>Ride in CDIs with a focus on visibility for Palestine</li>
                        <li>Represent Palestine at major international events</li>
                    </ul>
                    
                    Advocacy Goals:
                    <ul>
                        <li>Share my story to raise awareness for Palestinian voices through sport</li>
                        <li>Use my platforms- blog, social media, kits- to amplify justice and connection</li>
                        <li>Collaborate with sponsors who support causes greater than commerce</li>
                    </ul>

                    Digital & Community Goals:
                    <ul>
                        <li>Launch and grow my blog, app, and branded kits</li>
                        <li>Develop educational resources around dressage and horsemanship</li>
                        <li>Create a supportive community of riders who care about global impact</li>
                    </ul>
                </font>

            </div><br>
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
