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
    <title>Protejarea mediul înconjurător</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet" type="text/css">
    <link href="../fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/style-articol1.css">
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
          <li class="lazy-bg" data-background="../images/slide-3.jpg">
            <div class="container">
              <h2 class="slide-title">Protejarea mediului înconjurător</h2>
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
                <h2 class="entry-title">Ce putem face pentru a proteja mediul înconjurător?</h2>
                <br><br>
                <p> Protejarea mediului este de o importanță extrem de mare în zilele noastre. Trebuie să ne gândim atât la noi, cât şi la nevoile viitoarelor generaţii. Pentru că acum avem posibilitatea de a schimba modul în care utilizăm resursele naturale, este momentul să ne punem cu toții întrebarea: „Ce putem face pentru a proteja mediul înconjurător?” </p>
                <p>Prin respectarea unor măsuri pentru protejarea mediului putem contribui fiecare, puțin câte puțin, la reducerea poluării mediului înconjurător. Pentru a respecta aceste măsuri, trebuie să cunoaștem foarte bine cauzele care duc la poluare.</p>
                <p>Știm cu toții ca poluarea aerului provine de la gazele emanate de autoturisme, eliberarea in atmosfera a diferitelor gaze toxice și chimicale. Poluarea apelor provine de la deșeurile industriale, deșeuri petroliere, reziduuri deversate de la diverse fabrici. Poluarea solului este provenită, în mod direct, de toți locuitorii Planetei. Toate insecticidele, erbicidele folosite în agricultura, defrișarea pădurilor sunt doar câteva exemple care duc la poluarea solului.</p>
                <p>Pornind de la aceste exemple, care sunt doar o mica parte din tot ce duce la poluarea mediului înconjurător, putem să respectăm câteva măsuri: sa folosim cat mai rar mașina, să planăm copaci, sa economisim energia electrica, sa cumpărăm produse care au ambalaje reciclabile, să separăm deșeurile, să nu aruncăm gunoiul pe jos sau în apă ci la pubelele special amenajate. </p>
                <p>În locul pungilor de plastic putem alege varianta unei pungi din pânza, ce poate fi spălată și reutilizată. Atunci când mergem la cumpărături, putem reduce utilizarea pungilor de plastic pe care la folosim la cântărirea legumelor sau fructelor folosind săculeți reutilizabili, sau dacă sunt cantități mici se poate lipi eticheta direct pe produs. </p>
                <br>
                <h2 class="entry-title">Protecția mediului presupune:</h2>
                <p> 1. Gospodărirea rațională a resurselor;</br>2. Reconstrucția ecologică a mediului;<br>3. Evitarea dezechilibrului prin conservarea naturii;<br>4. Evitarea poluării mediului;<br>5. Descoperirea cauzelor care afectează mediul;<br>6. Proiecte complexe, rațional fundamentate.</p>
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