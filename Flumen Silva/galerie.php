<?php
  //initializarea sesiunii
  session_start();
   
  //verifica daca utilizatorul este logat
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      header("location: login.php");
      exit;
  }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <title>Galerie</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="CSS/style-galerie.css">
	<link rel="icon" href="Images/favicon.png">
    <style>
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
      h2{
      font-family: 'Manrope', sans-serif;
      font-size:16px;
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
	  body::-webkit-scrollbar {
      display: none;
      }	 
    </style>
  </head>
  <body>
    <div id="site-content">
    <header class="site-header">
      <div class="container">
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" id="branding">
        <small class="site-description">'Tempora mutantur et<br>  nos mutamur in illis.'</small>
        </a>
        <nav class="main-navigation">
          <button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
          <ul class="menu">
            <li class="menu-item"><a href="index.php">ACASĂ</a></li>
            <li class="menu-item"><a href="despre.php">DESPRE</a></li>
            <li class="menu-item current-menu-item"><a href="galerie.php">GALERIE</a></li>
            <li class="menu-item"><a href="contact/contact_index.php">CONTACT</a></li>
            <li class="menu-item"><a href="dashboard.php">ACCOUNT</a></li>
          </ul>
        </nav>
        <div class="mobile-menu"></div>
      </div>
    </header>
    <main class="main-content">
      <div class="fullwidth-block gallery">
        <div class="container">
          <div class="content fullwidth">
            <h2 class="entry-title">Galerie</h2>
            <div class="filter-links filterable-nav">
              <select class="mobile-filter">
                <option value="*">Toate</option>
                <option value=".art">Articole</option>
              </select>
              <a href="#" class="current" data-filter="*">Toate</a>
              <a href="#" data-filter=".art">Articole</a>
            </div>
            <div class="filterable-items">
              <div class="filterable-item art">
                <a href="Images/Galerie/nature-3.jpg">
                  <figure><img src="Images/Galerie/nature-3-small.jpg" alt=""></figure>
                </a>
              </div>
              <div class="filterable-item *">
                <a href="Images/Galerie/nature-1.jpg">
                  <figure><img src="Images/Galerie/nature-1-small.jpg" alt=""></figure>
                </a>
              </div>
              <div class="filterable-item art">
                <a href="Images/Omul și natura.jpg">
                  <figure><img src="Images/Galerie/Omul și natura small.jpg" alt=""></figure>
                </a>
              </div>
              <div class="filterable-item art">
                <a href="Images/Galerie/nature-5.jpg">
                  <figure><img src="Images/Galerie/nature-5-small.jpg" alt=""></figure>
                </a>
              </div>
              <div class="filterable-item art">
                <a href="Images/Protejarea mediului înconjurător.jpg">
                  <figure><img src="Images/Galerie/Protejarea mediului înconjurător small.jpg" alt=""></figure>
                </a>
              </div>
              <div class="filterable-item art">
                <a href="Images/Încălzirea globală.jpg">
                  <figure><img src="Images/Galerie/Încălzirea globală small.jpg" alt=""></figure>
                </a>
              </div>
              <div class="filterable-item art">
                <a href="Images/Reciclarea.jpg">
                  <figure><img src="Images/Galerie/Reciclarea small.jpg" alt=""></figure>
                </a>
              </div>
              <div class="filterable-item *">
                <a href="Images/slide-7.jpg">
                  <figure><img src="Images/Galerie/nature-2-small.jpg" alt=""></figure>
                </a>
              </div>
              <div class="filterable-item art">
                <a href="Images/Galerie/Specii pe cale de dispariție.jpg">
                  <figure><img src="Images/Galerie/Specii pe cale de dispariție small.jpg" alt=""></figure>
                </a>
              </div>
              <div class="filterable-item *">
                <a href="Images/Galerie/butterfly.jpg">
                  <figure><img src="Images/Galerie/butterfly small.jpg" alt=""></figure>
                </a>
              </div>
              <div class="filterable-item art">
                <a href="Images/Galerie/nature-4.jpg">
                  <figure><img src="Images/Galerie/nature-4-small.jpg" alt=""></figure>
                </a>
              </div>
              <div class="filterable-item *">
                <a href="Images/Galerie/nature-6.jpg">
                  <figure><img src="Images/Galerie/nature-6-small.jpg" alt=""></figure>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="site-footer">
      <div class="container">
        <img src="Images/logo.png" alt="Flumen Silva">
        <form action="newsletter/newsletter-signup.php" method="post" class="newsletter-form">
          <input type="email" name="email" id="email" placeholder="Introdu adresa de e-mail" REQUIRED>
          <input type="submit" class="button cut-corner" value="Abonează-te">
        </form>
        <p class="copy">© Flumen Silva</p>
      </div>
    </footer>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>