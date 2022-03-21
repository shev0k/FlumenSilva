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
    <title>Specii pe cale de dispariție</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet" type="text/css">
    <link href="../fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/style-articol2.css">
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
          <li class="lazy-bg" data-background="../images/slide-7.jpg">
            <div class="container">
              <h2 class="slide-title">Specii pe cale de dispariție</h2>
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
                <h2 class="entry-title">Unul din opt milioane de specii sunt amenințate cu dispariția. </h2>
                <br><br>
                <p>Acest fenomen este cauzat în principal de pierderea și degradarea habitatului/habitatelor, dar și de poluare, schimbările climatice, speciile alogene invazive, etc. Biodiversitatea este, însă, esențială pentru sănătatea ecosistemelor și viața umană. Speciile pe cale de dispariție sunt plante și animale amenințate cu dispariția. Acest fenomen este cauzat în principal de pierderea și degradarea habitatului/habitatelor, dar și de poluare, schimbările climatice, speciile alogene invazive, etc. Biodiversitatea este, însă, esențială pentru sănătatea ecosistemelor și viața umană. </p>
                <p>Comisia Europeană a dezvăluit noua sa strategie pentru 2030; aflați mai multe despre speciile pe cale de dispariție și despre pierderea biodiversității în Europa. Speciile pe cale de dispariție din Europa Uniunea Internațională pentru Conservarea Naturii (UICN) a întocmit o listă roșie europeană a speciilor pe cale de dispariție, astfel încât să poată fi luate măsuri pentru a le salva. 1 677 de specii Conform UICN, cel puțin 1 677 de specii dintre cele 15 060 de specii evaluate sunt amenințate cu dispariția.</p>
                <p>Din cele 1 677 de specii europene pe cale de dispariție, cele mai amenințate sunt melcii, scoicile și peștii. Mai mult de jumătate din arborii endemici din Europa, inclusiv castanul porcesc/castanul sălbatic, Heberdenia excelsa și scorușul sunt amenințați cu dispariția, iar aproximativ o cincime dintre amfibieni și reptile sunt pe cale de dispariție. Vulpea polară, nurca europeană, foca-călugăr de Mediterana, balena dreaptă și ursul polar sunt în prezent printre cele mai amenințate mamifere din Europa.</p>
                <p>Polenizatorii sunt și ei în declin. Una din 10 specii de albine și de fluturi din Europa este pe cale de dispariție. Speciile dispărute din Europa Conform UICN, din 2015, au dispărut în Europa 36 de specii, inclusiv multe specii de pești de apă dulce, mai multe specii de Coregonus (un tip de somon), molusca de apă dulce Graecoanatolica macedonica (un mic melc de apă dulce care se găsea doar în lacul Dojran din Macedonia) și Pensée de Cry – o floare violetă. </p>
                <p>Dintre mamifere, zimbrul și Prolagus sardus – un văr al iepurilor – au dispărut în secolul XVII și, respectiv, XVIII. Sunt necesare cercetări suplimentare pentru a evalua situația, în special a albinelor, a mamiferelor marine și a peștilor. </p>
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