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
    <title>Flumen Silva</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="CSS/style.css">
	<link rel="icon" href="Images/favicon.png">
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
              <li class="menu-item current-menu-item"><a href="index.php">ACASĂ</a></li>
              <li class="menu-item"><a href="despre.php">DESPRE</a></li>
              <li class="menu-item"><a href="galerie.php">GALERIE</a></li>
              <li class="menu-item"><a href="contact/contact_index.php">CONTACT</a></li>
              <li class="menu-item"><a href="dashboard.php">ACCOUNT</a></li>
            </ul>
          </nav>
          <div class="mobile-menu"></div>
        </div>
      </header>
      <div class="hero">
        <div class="slider">
          <ul class="slides">
            <li class="lazy-bg" data-background="images/slide-1.jpg">
              <div class="container">
                <h2 class="slide-title">Flumen Silva</h2>
                <h3 class="slide-subtitle"></h3>
                <h3><img class="img-circle" src="images/cover-main-page.png"><br><br></h3>
                <a href="despre.php" class="button cut-corner">Mai multe</a>
              </div>
            </li>
            <li class="lazy-bg" data-background="images/slide-2.jpg">
              <div class="container">
                <h2 class="slide-title">Misiunea noastră</h2>
                <h3 class="slide-subtitle"></h3>
                <p class="slide-desc">Obiectivul nostru este acela de a oferi modaltăți <br>  ale îmbunătățirii mediului înconjurător <br> astfel încât putem crea un viitor mai bun</p>
                <a href="galerie.php" style="margin-top:10px" class="button cut-corner">Mai multe</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <main class="main-content">
        <div class="fullwidth-block testimonial-section">
          <div class="container">
            <div class="quote-slider">
              <ul class="slides">
                <li>
                  <blockquote>
                    <p>"Ce putem face pentru a proteja mediul înconjurător?"</p>
                    <cite><a href="Articole/Protejarea mediului înconjurător.php">Protejarea mediul înconjurător</a></cite>
                    <span> APRIL 4<sup>th</sup></span>
                  </blockquote>
                </li>
                <li>
                  <blockquote>
                    <p>"Reciclarea aduce beneficii mediului, dar și economiei."</p>
                    <cite><a href="Articole/Reciclarea.php">Reciclarea</a></cite>
                    <span>APRIL 6<sup>th</sup> </span>
                  </blockquote>
                </li>
                <li>
                  <blockquote>
                    <p>"Zona mediteraneană devine tot mai aridă, vulnerabilă în fața secetei."</p>
                    <cite><a href="Articole/Încălzirea globală.php">Încălzirea globală</a></cite>
                    <span>APRIL 8<sup>th</sup></span>
                  </blockquote>
                </li>
                <li>
                  <blockquote>
                    <p>"Dezastrul datorat focului vine de la agresivitatea fiinţei umane."</p>
                    <cite><a href="Articole/Omul și natura.php">Omul și natura</a></cite>
                    <span>APRIL 10<sup>th</sup></span>
                  </blockquote>
                </li>
                <li>
                  <blockquote>
                    <p>"Una din 10 specii de albine și de fluturi din Europa este pe cale de dispariție."</p>
                    <cite><a href="Articole/Specii pe cale de dispariție.php">Specii pe cale de dispariție</a></cite>
                    <span>APRIL 12<sup>th</sup></span>
                  </blockquote>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
          <div class="container">
            <header class="section-header">
              <h2 class="section-title">Planificare articole</h2>
              <div class="event-nav">
                <a class="prev" id="event-prev" href="#"><i class="fa fa-caret-left"></i></a>
                <a class="next" id="event-next" href="#"><i class="fa fa-caret-right"></i></a>
              </div>
            </header>
            <div class="event-carousel">
              <div class="event">
                <div class="entry-date">
                  <div class="date">14</div>
                  <span class="month">APR</span>
                </div>
                <h2 class="entry-title"><a href="Articole/Work in progress.php">Energia solară – cinci utilizări de top</a></h2>
                <br>
              </div>
              <div class="event">
                <div class="entry-date">
                  <div class="date">16</div>
                  <span class="month">APR</span>
                </div>
                <h2 class="entry-title"><a href="Articole/Work in progress.php">Platforma 3-D care <br>imprimă materie vie</a></h2>
              </div>
              <div class="event">
                <div class="entry-date">
                  <div class="date">18</div>
                  <span class="month">APR</span>
                </div>
                <h2 class="entry-title"><a href="Articole/Work in progress.php">Apa sub asediul ”inconștient?” al omului</a></h2>
              </div>
              <div class="event">
                <div class="entry-date">
                  <div class="date">20</div>
                  <span class="month">APR</span>
                </div>
                <h2 class="entry-title"><a href="Articole/Work in progress.php">Omenirea și subminarea propriei sănătăți</a></h2>
              </div>
              <div class="event">
                <div class="entry-date">
                  <div class="date">22</div>
                  <span class="month">APR</span>
                </div>
                <h2 class="entry-title"><a href="Articole/Work in progress.php">O bacterie modificată genetic transformă CO2 <br>în energie</a></h2>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div></div></div>
    </main>
    <footer class="site-footer">
      <div class="container">
        <img src="images/logo.png" alt="The Neighbourhood">
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