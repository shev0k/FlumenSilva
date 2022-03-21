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
    <title>Despre</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="CSS/style-despre.css">
	<link rel="icon" href="Images/favicon.png">
    <style>
      .img-circle2{
      border-radius: 10%;
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
            <li class="menu-item current-menu-item "><a href="despre.php">DESPRE</a></li>
            <li class="menu-item "><a href="galerie.php">GALERIE</a></li>
            <li class="menu-item"><a href="contact/contact_index.php">CONTACT</a></li>
            <li class="menu-item"><a href="dashboard.php">ACCOUNT</a></li>
          </ul>
        </nav>
        <div class="mobile-menu"></div>
      </div>
    </header>
    <main class="main-content">
      <div class="fullwidth-block inner-content">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <div class="content">
                <h2 class="entry-title">Istoria noastră</h2>
                <img class="img-circle" src="Images/cover.jpg" alt="test" width="600" height="320">
                <br><br>
                <p> Cine Suntem? </p>
                <p>Organizația obștească “Flumen Silva” reprezintă o asociație binevola, neguvernamentală, independentă, nonprofit și nepolitică creată pe baza liberei asocieri a cetățenilor României, al căror obiectiv major este îmbunătățirea mediului înconjurător, conștientizarea populației cu situația ecologică, educarea tineretului în spirit ecologist, restabilirea bilanței dintre Natură și Om. </p>
                <p>	Ce facem? </p>
                <p>Am creat acest site cu scopul de a oferi informațiile necesare despre ocrotirea planetei noastre, dar și despre subiecte de actualitatea din realitatea de zi cu zi. Ne-am propus să oferim utilizatorilor o interfață prietenoasă și una ușor de folosit.</p>
              </div>
            </div>
            <div class="col-md-4 col-md-push-1">
              <aside class="sidebar">
                <div class="widget">
                  <h3 class="widget-title">Articole&nbsp;</h3>
                  <ul class="discography-list">
                    <li>
                      <figure class="cover"><img class="img-circle2" src="Images/Galerie/Protejarea mediului înconjurător small.jpg">
                      </figure>
                      <div class="detail">
                        <h3><a href="Articole/Protejarea mediului înconjurător.php">Protejarea mediului înconjurător</a></h3>
                        <span class="year">2021</span>
                        <span class="track">APRIL 4<sup>th</sup></span>
                      </div>
                    </li>
                    <li>
                      <figure class="cover"><img class="img-circle2" src="Images/Galerie/Reciclarea small.jpg"></figure>
                      <div class="detail">
                        <h3><a href="Articole/Reciclarea.php">Reciclarea</a></h3>
                        <span class="year">2021</span>
                        <span class="track">APRIL 6<sup>th</sup></span>
                      </div>
                    </li>
                    <li>
                      <figure class="cover"><img class="img-circle2" src="Images/Galerie/Încălzirea globală small.jpg" alt="thumbnail 3"></figure>
                      <div class="detail">
                        <h3><a href="Articole/Încălzirea globală.php">Încălzirea globală</a></h3>
                        <span class="year">2021</span>
                        <span class="track">APRIL 8<sup>th</sup></span>
                      </div>
                    </li>
                    <li>
                      <figure class="cover"><img class="img-circle2" src="Images/Galerie/Omul și natura small.jpg" alt="thumbnail 4"></figure>
                      <div class="detail">
                        <h3><a href="Articole/Omul și natura.php">Omul și natura</a></h3>
                        <span class="year">2021</span>
                        <span class="track">APRIL 10<sup>th</sup></span>
                      </div>
                    </li>
                    <li>
                      <figure class="cover"><img class="img-circle2" src="Images/Galerie/Specii pe cale de dispariție small.jpg" alt="thumbnail 5"></figure>
                      <div class="detail">
                        <h3><a href="Articole/Specii pe cale de dispariție.php">Specii pe cale de dispariție</a></h3>
                        <span class="year">2021</span>
                        <span class="track">APRIL 12<sup>th</sup></span>
                      </div>
                    </li>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="site-footer">
      <div class="container">
        <img src="images/logo.png" alt="Flumen Silva">
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