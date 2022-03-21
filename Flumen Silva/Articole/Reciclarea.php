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
    <title>Reciclarea</title>
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
          <li class="lazy-bg" data-background="../images/slide-4.jpg">
            <div class="container">
              <h2 class="slide-title">Reciclarea</h2>
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
                <h2 class="entry-title">Ce este reciclarea?</h2>
                <br><br>
                <p>Reciclarea este procesul prin care deșeurile “cu valoare”, precum ambalajele, spre exemplu, sunt transformate în materie primă secundară pentru fabricarea de noi produse. Beneficiile reciclarii sunt multiple, de aceea este foarte important ca fiecare dintre noi să înțeleagă faptul că în spatele legilor drastice privind reciclarea stau idei și principii solide, benefice comunităților. În plus, reciclarea nu numai că aduce beneficii mediului, dar are și un efect pozitiv asupra economiei.</p>
                <br>
                <h2 class="entry-title">Beneficiile reciclarii pentru mediu:</h2>
                <p>1. Prin reciclare se diminuează considerabil depunerea deșeurilor la gropile de gunoi care nu numai ca polueaza masiv mediu dar creeaza și o imagine dezolantă a orașelor, distrugand sanatatea celor care locuiesc în preajmă lor; <br>2. Recicland, poluantii eliberați de obicei in apa si aer prin depunerea deșeurilor la gropile de gunoi, se diminuează considerabil;<br>3. Prin reciclare se reduc emisiile de gaze cu efect de sera din atmosfera. Acest lucru se realizeaza prin inlocuirea materiei prime virgine folosite, ca materie prima secundara, rezultată in urma reciclarii; <br> 4. Prin reciclare economisim pe termen lung cheltuielile comunității cu energia, dacă ne gandim doar la faptul ca energia economisita prin reciclarea unei singure sticle poate alimenta un bec timp de patru ore; <br> 5. Prin reciclare se conservă resursele naturale ale Pământului. </p>
                <br>
                <h2 class="entry-title">Reciclarea metalelor</h2>
                <p>1. Metalele sunt materiale care pot fi reciclate în proporție de 90-95% dacă sunt colectate selectiv; <br> 2. Anumite metale, precum aluminiul, pot fi reciclate la nesfarsit; <br> 3. Prin reciclarea metalelor se reduce cu 70% consumul de energie fata de producerea unui element complet nou. </br> </p>
                <br>
                <h2 class="entry-title">Reciclarea hârtiei și cartonului</h2>
                <p>1. Se poate recicla aproape orice fel de hartie si carton. Tehnologia de reciclare poate elimina cernelurile, agrafele, capsele, cleiul cu care sunt legate cărțile, însă nu și uleiul. De aceea, nu se pot recicla hârtiile și cartoanele pătate de ulei sau de mancare. In plus, nu pot fi reciclate hartiile cerate, plastifiate sau acoperite cu folie de plastic (coperțile revistelor glossy), șervețelele sau alte produse sanitare de hartie folosite; <br> 2. Cutiile de lapte și de suc se recicleaza separat; <br> 3. O tonă de hartie reciclata salvează de la tăiere 17 copaci; <br> 4. Pentru fiecare tonă de hartie reciclata se economisesc peste 26 de tone de apa si aproape 1,8 tone de combustibil;  <br> 5. Cartonul poate fi reciclat de mai multe ori, dar nu la infinit. De aceea este bine sa evitam ambalajele cat mai mult posibil, fie ele și din hartie. </p>
                <br>
                <h2 class="entry-title">Reciclarea sticlei</h2>
                <p>1. Sticla poate fi reciclata prin topire la infinit, fără a-și pierde proprietățile. De asemenea, costurile de reciclare sunt mai mici decat cele de producție a sticlei din materii prime, economisind astfel energie; <br> 2. Din sticla colorata nu se poate produce decat sticla de aceeași culoare. De aceea, sticla incolora este mai valoroasa, căci poate fi refolosita în mai multe scopuri; <br> 3. Sticla termorezistenta, precum vasele de Yena, nu se recicleaza cu sticlă obișnuită, deoarece afectează procesul de topire. </p>
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