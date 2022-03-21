<?php
  //initializarea sesiunii
  session_start();
   
  //verifica daca utilizatorul este logat
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      header("location: login.php");
      exit;
  }
  ?>
<html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
      <title>Come back later</title>
      <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet" type="text/css">
      <link href="../fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="../css/style-contact.css">
	  <link rel="icon" href="../Images/favicon.png">
      <style>
        .img-circle {
        border-radius: 50%;
        }
        .img-circle2{
        border-radius: 5%;
        }
        .img-circle{
        border-radius: 3%;
        }
        p{
        font-family: 'Manrope', sans-serif;
        font-size:13px;
        }
        h3{
        font-family: 'Manrope', sans-serif;
        font-size:16px;
        }
        span{
        font-family: 'Manrope', sans-serif;
        font-size:13px;
        }
        input{
        font-family: 'Manrope', sans-serif;
        }
        small{
        font-family: 'Manrope', sans-serif;
        font-size:12px;
        }
        li{
        font-family: 'Manrope', sans-serif;
        font-size:14px;
        }
        .section-title{
        font-family: 'Manrope', sans-serif;
        }
		body::-webkit-scrollbar {
		display: none;
		}	 
      </style>
    </head>
    <body class="header-collapse">
      <div id="site-content">
      <header class="site-header">
        <div class="container">
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" id="branding">
          <small class="site-description">'Tempora mutantur et<br>  nos mutamur in illis.'</small>
          </a>
          <nav class="main-navigation">
            <button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
            <ul class="menu">
              <li class="menu-item"><a href="../index.php">ACASĂ</a></li>
              <li class="menu-item"><a href="../despre.php">DESPRE</a></li>
              <li class="menu-item"><a href="../galerie.php">GALERIE</a></li>
              <li class="menu-item"><a href="../contact/contact_index.php">CONTACT</a></li>
              <li class="menu-item"><a href="../logout.php">ACCOUNT</a></li>
            </ul>
          </nav>
          <div class="mobile-menu"></div>
        </div>
      </header>
      <div class="hero">
      <div class="slider">
        <ul class="slides">
          <div class="container">
            <h3><img class="img-circle" src="../images/work-in-progress.gif"><br><br></h3>
            </li>
        </ul>
        </div>
      </div>
      <footer class="site-footer">
        <div class="container">
          <img src="../images/logo.png" alt="Flumen Silva">
          <form action="../newsletter/newsletter-signup.php" method="post" class="newsletter-form">
            <input type="email" name="email" id="email" placeholder="Introdu adresa de e-mail" REQUIRED>
            <input type="submit" class="button cut-corner" value="Abonează-te">
          </form>
          <p class="copy">© Flumen Silva</p>
        </div>
      </footer>
      <script src="../js/jquery-1.11.1.min.js"></script>
      <script src="../js/plugins.js"></script>
      <script src="../js/app.js"></script>
    </body>
  </html>