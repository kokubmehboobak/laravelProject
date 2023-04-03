
@extends('layouts.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @push('title')
        
  
    <title>Home</title>
    @endpush
    <link rel="stylesheet" href="style.css">
   <style>
   html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
   img{
    margin-top: 200px;
   }
   </style>
</head>
<body class="w3-light-grey">
    @section('main-section')
        

    <!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">
    
      <!-- Left Column -->
      <div class="w3-third">
      
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="../images/mypic.png" style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2>Raja Kokub Mehboob</h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Web Developer</p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>I-14 Islamabad, Pakistan</p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>kokub302@gmail.com</p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>03556072460</p>
            <hr>
  
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
            <p>Adobe Photoshop</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
            </div>
            <p>Photography</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                <div class="w3-center w3-text-white">40%</div>
              </div>
            </div>
            <p>Illustrator</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
            </div>
            <p>Media</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
            </div>
            <br>
  
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
            <p>Urdu</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>English</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:65%"></div>
            </div>
            <p>Hindko</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <br>
          </div>
        </div><br>
  
      <!-- End Left Column -->
      </div>
  
      <!-- Right Column -->
      <div class="w3-twothird">
      
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Certifications</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>HTML and CSS: Building a Single-Page Website, Coursera </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> June 17, 2022
                 <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Build Your Portfolio Website with HTML and CSS, Coursera</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>  May 13, 2022
                 <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Build a Two Screen Flutter Application, Coursera </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>  October 24, 2022
                 <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Adding Special Effects in Adobe Photoshop, Coursera</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> June 15, 2022

                 <hr>
          </div>
        </div>
  
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Iqra Model College Kahmorah Ghamir, AJK</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2016 - 2018</h6>
            <p>Matric</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Iqra Model College Kahmorah Ghamir, AJK</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2018 - 2020</h6>
            <p>Intermediate(ICS)</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Riphah International University, Islamabad</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2020 - 2024</h6>
            <p>Bachelor Degree</p><br>
          </div>
        </div>
  
      <!-- End Right Column -->
      </div>
      
    <!-- End Grid -->
    </div>
    
    <!-- End Page Container -->
  </div>
  
    

    @endsection
    
   

</body>
</html>