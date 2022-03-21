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
    <title>Încălzirea globală</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet" type="text/css">
    <link href="../fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/style-articol3.css">
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
            <li class="menu-item current-menu-item"><a href="../despre.php">DESPRE</a></li>
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
          <li class="lazy-bg" data-background="../images/slide-5.jpg">
            <div class="container">
              <h2 class="slide-title">Încălzirea globală</h2>
              <h3 class="slide-subtitle"></h3>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <main class="main-content">
      <div class="fullwidth-block inner-content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="content">
                <h2 class="entry-title">Ce este încălzirea globală?</h2>
                <br><br>
                <p>Încălzirea globală este fenomenul de creștere continuă a temperaturilor medii înregistrate ale atmosferei în imediată apropiere a solului, precum și a apei oceanelor, constatată în ultimele două secole, dar mai ales în ultimele decenii. Fenomene de încălzire globală au existat dintotdeauna în istoria Pământului, ele fiind asociate cu fenomenul cosmic de maximum solar, acestea alternând cu mici glaciațiuni terestre asociate cu fenomenul de minimum solar. <br><br> Temperatura medie a aerului în apropierea suprafeței Pământului a crescut în ultimul secol cu 0,74 ± 0,18 °C. </p>
                <p>Dacă fenomenul de încălzire observat este cvasi-unanim acceptat de oamenii de știință și de factorii de decizie, există diverse explicații asupra cauzelor procesului. Opinia dominantă este că încălzirea se datorează activității umane, în special prin eliberarea de dioxid de carbon în atmosferă prin arderea de combustibili fosili. România nu face excepție, la conferința „Măsuri de adaptare și reducere a impactului schimbărilor climatice” raportându-se creșteri ale temperaturii cu 0,5 °C în ultimul secol.</p>
                <p>Efectul de seră este un fenomen natural prin care o parte a radiației terestre în infraroșu este reținută de atmosfera terestră. Efectul se datorează gazelor cu efect de seră care reflectă înapoi această radiație. Efectul actual al existenței gazelor cu efect de seră este că temperatura medie a Pământului este cu cca. 33 °C mai mare decât ar fi în lipsa lor, adică este de cca. +15 °C în loc să fie de -18 °C. În acest sens, efectul de seră este benefic, el asigurând încălzirea suficientă a Pământului pentru a permite dezvoltarea plantelor așa cum le cunoaștem noi azi.</p>
                <br>
                <h2 class="entry-title">Consecințele pentru Europa</h2>
                <p> 1. Europa Centrală și de Sud se confruntă mai frecvent cu valuri de căldură, incendii forestiere și secetă.<br>2. Zona mediteraneană devine tot mai aridă, ceea ce o face vulnerabilă în fața secetei și a incendiilor forestiere;<br>3. Nordul Europei devine considerabil mai umed și este posibil ca inundațiile pe perioada iernii să devină un fenomen obișnuit;<br>4. Zonele urbane, în care trăiesc în prezent 4 din 5 europeni, sunt afectate de valuri de căldură, inundații sau creșterea nivelului mărilor, și adesea nu dispun de mijloacele necesare pentru a se putea adapta schimbărilor climatice.<br></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
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