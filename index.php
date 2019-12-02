<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
    <!-- Custom CSS -->
    <style type="text/css">
      body{
        background-image: url("gravel.png");
        font-family: "Nunito", sans-serif;
      }
      #main .navbar-brand{
            color: #ea1c2c;
            font-size:1.5rem;
            font-weight:100;
      }
      .wow{
        visibility: hidden;
      }
      #main .nav-link{
        color:black;
      }
      #main .nav-link:hover{
        color:#ea1c2c;
      }
      #main{
        font-size:1.5rem;
            font-weight:100;
      }
      #headinggroup span{
        color:#ea1c2c;
      }
      #headinggroup h2{
        font-weight:800;
        font-size:3rem;
        color:black;
      }
      @media (max-width:1200px){
        #headinggroup h2{
        font-weight:100;
        font-size:2.5rem;
      }
      }
      .blurb h2{
        color:#ea1c2c;
        font-weight:500;
        font-size:2.5rem;
      }
      .blurb p{
        color:black;
        font-weight:300;
        font-size:1.125rem;
        line-height:2;
      }
      .content{
        margin-top:100px;
      }
      .navbar.scrolled{
        background: rgb(222,192,222);
        transition:background 1s;
      }
      .lead{
        color:black;
      }
    </style>

    <title>Tourism</title>
  </head>
  <body>
    <nav id="main" class="navbar navbar-primary navbar-expand-md py-0 fixed-top">
      <a href="#" class="navbar-brand">Xplore Kshmir</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navlinks" aria-label="toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navlinks">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a href="#" class="nav-link" type="active">HOME</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">ABOUT</a>
          </li>
          
          </ul>
          <ul class="nav navbar-nav  ml-auto">
         <li class="nav-item">
            <a href="/project/admin/index.php" class="nav-link">ADMIN LOGIN</a>
          </li>
        </ul>
      </div>

    </nav>
    <section class="container-fluid px-0">
          <div class="row align-items-center content">
         
        <div class="col-md-6 text-center">
          <div class="row justify-content-center">
            <div class="col-10 col-lg-8 blurb mb-5 mb-md-0 wow fadeInLeft">
            <h2>About us!</h2> 
            <img src="lolli_icon.png" class="d-none d-lg-inline">
             <p class="lead">We believe in helping you plan an escape....</p>
          <p class="lead">Head a journey towards the surreal beauty of Kashmir--the peaceful bells of ladakh monastries--to find yourself and get lost!!</p>

            </div>
          </div>
        </div>
        <div class="col-lg-6 pr-0 wow fadeInRight">
          <img  class="img-fluid" src="https://images.pexels.com/photos/2076968/pexels-photo-2076968.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
      </div>
    </section>
    <section class="container-fluid px-0">
      <div class="row align-items-center content">
        <div class="col-md-6 order-2 order-md-1 wow fadeInLeft">
          <img class="img-fluid" src="https://images.pexels.com/photos/939715/pexels-photo-939715.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
        </div>  
        <div class="col-md-6 text-center order-1 order-md-2">
          <div class="row justify-content-center">
            <div class="col-10 col-lg-8 blurb mb-5 mb-md-0 wow fadeInRight">
              <h2 >Xplore Cities</h2>
            <img src="lolli_icon.png" class="d-none d-lg-inline">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="btn btn-danger" href='/project/pattern.html'>Dive In!</a>
            </div>
          </div>
        </div>
      </div>
       <div class="row align-items-center content">
         
        <div class="col-md-6 text-center">
          <div class="row justify-content-center">
            <div class="col-10 col-lg-8 blurb mb-5 mb-md-0 wow fadeInLeft">
              <h2 >Haven't Registered yet?</h2>
            <img src="lolli_icon.png" class="d-none d-lg-inline">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="btn btn-danger" href='/project/form1/index.php'>Register Here</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 wow fadeInRight">
          <img class="img-fluid" src="https://images.pexels.com/photos/459653/pexels-photo-459653.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
        </div> 
      </div>
       <div class="row align-items-center content">
        <div class="col-md-6 order-2 order-md-1 wow fadeInLeft">
          <img class="img-fluid" src="https://images.unsplash.com/photo-1456324504439-367cee3b3c32?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
        </div>  
        <div class="col-md-6 text-center order-1 order-md-2">
          <div class="row justify-content-center">
            <div class="col-10 col-lg-8 blurb mb-5 mb-md-0 wow fadeInRight">
              <h2 >Lets Login!</h2>
            <img src="lolli_icon.png" class="d-none d-lg-inline">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="/project/form1/index.php" class="btn btn-danger">Get Set Go!</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
      $(function (){
        $(document).scroll(function(){
          var $nav=$("#main");
          $nav.toggleClass("scrolled", $(this).scrollTop()>$nav.height());
        });
      });
    </script>
  </body>
</html>