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
    <title>Omul și natura</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet" type="text/css">
    <link href="../fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/style-articol4.css">
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
          <li class="lazy-bg" data-background="../images/slide-6.jpg">
            <div class="container">
              <h2 class="slide-title">Omul și natura</h2>
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
                <h2 class="entry-title">De către cine este reprezentată ”locuința” noastră?</h2>
                <br><br>
                <p>Pământul este căminul nostru. Pentru că viaţa noastră se desfăşoară aici, ea este influenţată de acesta. Dacă pe Pământ apar probleme, nici omul nu poate trăi în armonie. În zilele noastre, aflăm tot mai des despre dezastre naturale care au loc în diferite zone ale planetei. Apa, de pildă. În câteva minute poate distruge totul. La ce mai folosesc atunci aurul şi palatele, dacă nu pot fi oprite puhoaiele? Auzim, de asemenea, despre incendii propagate pe zone extinse. Ce să mai spunem despre uragane şi tornade iscate ca din senin? </p>
                <p>Un alt motiv de îngrijorare îl constituie cutremurele. Oamenii se tem, de bună seamă, de aceste dezastre, dar nu-şi pun întrebarea: care este cauza producerii lor ? Ei cred că aşa-i natura, imprevizibilă şi nu ai cum să te împotriveşti stihiilor. Dacă ajunge însă la înţelegerea adevăratelor cauze care duc la producerea dezastrelor, omul poate învăţa să le prevină. Cutremurele, de pildă, îşi au rădăcinile în tratamentul inegal al semenilor, în inegalitatea socială, în discriminare şi nedreptate.</p>
                <p>Dezastrul provocat de apă este produs de lăcomia oamenilor. Aşa apar inundaţiile. Dezastrul datorat focului vine de la agresivitatea fiinţei umane. Să nu uităm că pe lume există atâtea focare de război şi toate acestea înseamnă acumulări de furie. Dezastrele produse de vânt (de exemplu, uraganele) vin din ignoranţă. Trebuie să înţelegeţi însă că aceste efecte nu apar într-o zi, două. Este vorba de o însumare în timp a acestora, pe perioade îndelungate. Dezastrele sunt, deci, rezultat al comportamentului uman. Aceasta înseamnă că omul poate influenţa natura, în bine sau în rău. </p>
                <p>Dacă oamenii trăiesc în armonie, atunci şi manifestările naturii sunt armonioase. Mulţi cercetători caută modalităţi de a preveni sau evita dezastrele. Rezultatele nu sunt însă pe măsura muncii şi a fondurilor alocate, pentru că cercetările nu se îndreaptă în direcţia care ar trebui, nu vizează adevăratele rădăcini. Cea mai bună modalitate de evitare a dezastrelor se află la îndemâna noastră şi constă în a ne schimba noi înşine. În acest fel avem grijă de natură. Iată de ce este important să lucrăm în permanenţă asupra noastră înşine pentru a deveni oameni buni, oameni de calitate. </p>
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