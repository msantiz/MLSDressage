<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <div class="header">
  <h1> <center><font size = "10" face = "Georgia" color = "black"> <b>Mara Santiz Dressage</b></font></center></h1>

<div class = "picture">
<img src = "../images/logo2020.png" width="150" height="150" align = "left" class="horse">
</div>

    <div class="flex">

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

    <!--<meta charset="utf-8">

    <title>Wikicode receiving mail tutorial</title>

    <meta name="description" content="Wikicode receiving mails from contact form using mailable in Laravel 8">
    <meta name="author" content="Wikicodes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->

</head>

<style>
  .header {

    padding: 20px;

    text-align: center;

    background: white;

    color: blue;

    font-size=30px;
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

    font-family: inherit;
    /* Important for vertical align on mobile phones */

    margin: 0;
    /* Important for vertical align on mobile phones */

  }



  /* Add a red background color to navbar links on hover */

  .navbar a:hover,
  .dropdown:hover .dropbtn {

    background-color: red;

  }



  /* Dropdown content (hidden by default) */

  .dropdown-content {

    display: none;

    position: absolute;

    background-color: #f9f9f9;

    min-width: 160px;

    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);

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



  body {

    background-color: #C0C0C0;

  }


  .boxes {
    display: inline-block;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    border: 3px;
    border-style: solid;
    border-color: white;
    padding: 1em;
  }

  .bigbox {
    display: block;
    background-color: #333;
    left: 50%;
    transform: translateX(-50%);
    width: 57%;
    position: relative;
  }
</style>




<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<body>

  <div class="bigbox">

    <br><br>

    <div class="contact">

      <div>

        <center>
          <font size="5" face="roboto" color="white"><u><b>Location</b></u></font>
        </center><br><br>

        <font size="4" face="roboto" color="white">Ann Arbor, MI</font><br><br><br>

      </div>
      <div>

        <center>
          <font size="5" face="roboto" color="white"><u><b>Phone</b></u></font>
        </center><br><br>

        <font size="4" face="roboto" color="white">(734)-358-8017<br></font><br><br><br>

      </div>

      <div>

        <center>
          <font size="5" face="roboto" color="white"><u><b>E-mail</b></u></font>
        </center><br><br>

        <font size="4" face="roboto" color="white">santizml@gmail.com<br></font><br><br><br>

      </div>

      <div>

        <center>
          <font size="5" face="roboto" color="white"><u><b>Social Media</b></u></font</center> <br><br>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <a href="https://www.facebook.com/mlsdressage" class="fa fa-facebook" target="_blank"></a>

            <a href="https://www.instagram.com/mlsdressage/" class="fa fa-instagram" target="_blank"></a>

            <a href="https://www.youtube.com/channel/UCu7FzF8PsPr4eUWoNbBIHJQ" class="fa fa-youtube" target="_blank"></a><br><br>

      </div>

    </div><br><br>

 
<div class="google-maps">
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d94471.64080072628!2d-83.80772974902668!3d42.273426116098115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883cb00dd4431f33%3A0xdb09f94686c8b5e2!2sAnn%20Arbor%2C%20MI!5e0!3m2!1sen!2sus!4v1584385110878!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center><br><br><br><br><br><br><br>        
</div>


<div style ="overflow-x:auto;">
  <div class= "boxes">
 <!-- <div class="container mt-4">-->
    <font size = "6" face = "Georgia">Contact Us</font><br>
    <!--<div>Contact Us</div>-->
    <form method="post" action="{{ route('contact2.send') }}">
        <div class="form-group">
            <label for="exampleInputFirstname">Name*</label>
            <input type="text" size="50" class="form-control" id="exampleInputFirstname" name="firstname" aria-describedby="Firstname" placeholder="Name" required>
        </div>
        <!--<div class="form-group">
            <label for="exampleInputLastname">Lastname</label>
            <input type="text" class="form-control" id="exampleInputLastname" name="lastname" aria-describedby="Lastname" placeholder="Last name" required>
        </div>-->
        <div class="form-group">
            <label for="exampleInputEmail">Email*</label>
            <input type="email" size="50" class="form-control" id="exampleInputEmail" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPhone">Phone Number</label>
            <input type="text" size="50" class="form-control" id="exampleInputPhone" name="phone" placeholder="Phone Number" required>
        </div>
        <div class="form-group">
            <label for="exampleInputMessage">Message*</label>
            <textarea class="form-control" id="exampleInputMessage" name="message" placeholder="Please enter enter your message" required></textarea>
        </div>
        <div class="submit-section" style="display: flex; margin-left: 80%;">
        <input name="_token" value="{{ csrf_token() }}" type="hidden">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>
</div>


</div>


<br><br><br>

</div>
</div>
             

 


  
<script>
  $("#submitForm").click(function() {
     alert("The Form has been Submitted.");
  });
</script>

 
</body>

<style>
.google-maps{
  position: relative;
  padding-bottom: 75%;
  height: 0;
  overflow: hidden;
}

.google-maps iframe{
position: absolute;
top: 0;
left: 50%;
transform: translateX(-50%);
width: 85% !important;
height: 85% !important;
}

input[type=text], select, input[type=email], input[type=phone]{
              position: relative;
              width: 100%;
              padding: 12px;
              border: 1 px solid #ccc;
    border-radius: 4px;

    box-sizing: border-box;

    margin-top: 6px;

    margin-bottom: 16px;

    resize: vertical
  }



textarea{
  width: 100%;
  height: 150px;
              position: relative;
              padding: 12px;
              border: 1 px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
    margin-top: 6px;

    margin-bottom: 16px;

    resize: vertical
  }



  input[type=submit] {

    color: white;
  position: relative;
              background-color: #4CAF50;
              padding: 12px 20px;

    border: none;

    border-radius: 4px;

    cursor: pointer;

  }



  input[type=submit]:hover {

    background-color: #45a049;

  }



.form-group{
            position: relative;
              padding: 20px;

  }


.contact {
        position: relative;
        display: flex;
        justify-content: space-around;
        margin-left: 45px;
  }



  .fa {

    padding: 10px;

    font-size: 20px;

    width: 20px;

    text-align: center;

    text-decoration: none;

  }

  .fa:hover {
    opacity: 0.7;
  }

.fa-facebook{
              position: relative;
              background: #3B5998;
              color: white;



}

.fa-instagram{
              position: relative;
              background: purple;
              color: white;

  }



.fa-youtube{
              position: relative;
              background: red;

    color: white;

  }


 @media screen and (max-width: 1000px){
   .contact{
     flex-direction: column;
     text-align: center;
     margin-left: 0px;
   }
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
 .boxes{
   width: 250px;
 }
 .submit-section{
   color: white;
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
 
 /*.bigbox{
   display: flex;
   justify-content: center;
   margin: auto;
   width: 85%;
 }*/

 

 
 


  }
</style>

</html>
