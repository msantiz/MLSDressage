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

a.red-link {
  color: #e63946; /* deep red */
  text-decoration: none;
}

a.red-link:hover {
  text-decoration: underline;
}


.download-button {
  display: inline-block;
  margin-left: 70px; 
  padding: 8px 16px;
  background-color: #e63946; /* deep red */
  color: #ffffff;
  text-decoration: none;

  border-radius: 8px;
  transition: background-color 0.3s ease;
  box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
}


.download-button:hover {
  background-color: #c12738; /* slightly darker red on hover */
}

</style>


<body>

  <div class = "bigbox"><br>
    <h1> <center><font size = "6" face = "roboto" color = "white"> <i>"Dressage with Purpose"</i></font></center></h1>

<div class = "box">
      <font size = "5" face = "roboto" color = "white">
        <p><center>"Authentic promotion. Purpose-driven partnerships. Performance that speaks for itself."</center></p>
      </font><br>

      <font size = "5" face = "roboto" color = "white"><u>Meet Mara Ziadeh</u></font><br>
      <font size = "5" face = "roboto" color = "white">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm a competitive dressage rider, product manager, 
        and content creator with a passion for helping brands grow within the equestrian, 
        wellness, and performance-driven communities. I'm a proud member of the 
        <i>Palestine Equestrian Federation</i>, currently training toward Grand 
        Prix and working toward Olympic eligibility.</p>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Through my business, MLS Dressage, I teach riders, train horses, 
          and produce high-value content- blending my background in athletics and product 
          development with real-world equestrian insight.</p>
      </font><br>

      <font size = "5" face = "roboto" color = "white"><u>Why Partner With Me?</u></font><br>
      <font size = "5" face = "roboto" color = "white">
        <ul>
          <li>I consistently promote products I genuinely use and trust- especially those that hold up through training, sweat, and barn life.</li>
          <li>I engage with a niche audience of equestrians, athletes, and wellness-focused women who trust my recommendations.</li>
          <li>Through my custom-branded kits, I help introduce new products directly into the hands of riders and pet owners.</li>
          <li>I'm currently developing PetLogix, a mobile app for tracking horse and dog health- creating a new digital channel for promoting high-quality care products.</li>
          <li>I write blog posts, reels, tutorials, and product reviews that reflect real use in daily barn routines- not staged promotions.</li>
        </ul>
      </font><br>

      <font size = "5" face = "roboto" color = "white"><u>Social Reach</u></font><br>
      <font size = "5" face = "roboto" color = "white">
        <ul>
          <li>TikTok: <a href="https://www.tiktok.com/@mlsdressage" target="_blank" class="red-link">@mlsdressage</a> – product reviews, barn humor, and daily routines</li>
          <li>Instagram: <a href="https://www.instagram.com/mlsdressage" target="_blank" class="red-link">@mlsdressage</a> – engaged equestrian and fitness followers</li>
          <li>Blog: <a href="https://dressagediscussions.home.blog" target="_blank" class="red-link">Dressage Discussions</a> – articles on training, advocacy, and equine care</li>
        </ul>
      <font><br>

      <font size = "5" face = "roboto" color = "white"><u>Brands I Use & Love</u></font><br>
      <font size = "5" face = "roboto" color = "white">
        <ul>
          <li>Grand Meadows – Supplements for all of your horses needs</li>
          <li>Formula 707 – Fly spray and supplements to stop the flies in their tracks</li>
          <li>Esprit Equestrian Wear & SOHO Equestrian – Rider breeches, tops, and more</li>
          <li>Custom Saddlery & Bridles & Reins – Saddles and English tack</li>
        </ul>
      </font><br>

      <font size = "5" face = "roboto" color = "white"><u>Download My Media Kit</u></font><br>
      <font size = "5" face = "roboto" color = "white">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You can download my current media kit as a PDF below:</p>
      </font>
      <font size = "4.5" face = "roboto" color = "white">
        <a href="../media/Media-Kit.pdf" class="download-button" target="_blank">Download Media Kit</a>
      </font><br><br>

      <font size = "5" face = "roboto" color = "white"><u>Let's Connect</u></font><br>
      <font size = "5" face = "roboto" color = "white">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          I'm looking to partner with brands that value performance, resilience, and 
          authenticity- just like the equestrian athletes who use them.
        </p>
        <p>Email: <a href="mailto:mlsdressage@gmail.com" class="red-link">mlsdressage@gmail.com</a></p>
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
