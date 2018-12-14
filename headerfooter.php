<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

<!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
<meta charset="utf-8">

<!-- Titel som ses oppe i browserens tab mv. -->
<title>Sigende titel</title>

<!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->

<meta name="robots" content="All">
<meta name="author" content="Udgiver">
<meta name="copyright" content="Information om copyright">
<!-- Max ca. 170-200 karakterer - 600px -->
<meta name="description" content="">
<!-- få unikke og relevante (skal gå igen på siden) -->
<meta name="keywords" content="">
<meta property="og:title" content="titel"> 
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.domian.dk" >
<meta property="og:image" content="http://www.domain.dk/images/jpg">
<meta property="og:description" content="Beskrivelse">
<meta property="og:locale" content="da_DK">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
<link href="css/headerfooter.css" rel="stylesheet" type="text/css">
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/una2owl.css">
<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>
<header>
     <div id="infotop">
         <div id="infotoptekst">DAG TIL DAG LEVERING</div>
         <div id="infotoptekst2">30 DAGES FULD RETURET</div>
         <div id="infotoptekst3">GRATIS FORSENDELSE VED KØB OVER 700 KR.</div>
         <div id="infotopfacebook"><a href="#"><i class="fab fa-facebook-square fa-2x"></i></a></div>
         <div id="infotoptekstinstagram"><a href="#"><i class="fab fa-instagram fa-2x"></i></a></div>
     </div>
    <img id="headerbillede" src="images/headerbillede_resized.png">
    <a href="index.php"><img id="logomobil" src="images/46941417_360092324559619_3230568615006699520_n.png"></a>
    <a href="index.php"><img id="logo" src="images/46976947_255908878387952_7651757664031997952_n.png"></a>
    <nav>
        <div id="burgermenu">
            <i class="fas fa-bars fa-3x"></i>
        </div>
        <div id="menupunkter">
            <span id="menuhover">
                <a href="index.html">Forside</a>
                <a href="produkter.php">Produkter</a>
                <a href="omos.html">Om os</a>
                <a href="blog.php">Blog</a>
            </span>
        </div>
    </nav>
</header>
<br><br><br><br><br><br><br><br><br><br>
<?php ?>
<footer>
    <img  class="footerimg" src="images/Planteprotein_logo_footer.png">
    <div id="infogrid">
        <i class="fas fa-map-marker-alt"></i> Fiktiv Adresse
        <br><br>
        <i class="fas fa-mobile-alt"></i> 33 44 55 66
        <br><br>
        <i class="fas fa-envelope"></i> Info@Planteprotein.dk
        <br><br>
        <i class="fab fa-facebook-square"></i> PlanteProtein
    </div>
    <br>
    <div id="tilmeld">
        <div id="formular">
            <span style="font-weight: bold">Tilmeld dig vores nyhedsbrev</span>
            <form method="post">
                <input id="tilmeldfelt" type="text" name="Tilmeld" placeholder="Indtast din email her" value="">
                <br>
                <button id="button" type="submit">Tilmeld</button>
            </form>
        </div>
        <br>
        <div id="betingelse">
            Betingelser & Forsendelse
            <br>
            Betalingsmuligheder
            <br>
            <i class="fab fa-cc-mastercard"></i>
            <i class="fab fa-cc-mastercard"></i>
            <i class="fab fa-cc-mastercard"></i>
            <i class="fab fa-cc-mastercard"></i>
        </div>
    </div>
    <div id="instagram">
        <h1 id="instatext">Instagram Opslag</h1>
        <img id="insta1" src="images/instagrambillede1.png">
        <img id="insta2" src="images/instagrambillede2.png">
        <img id="insta3" src="images/instagrambillede3.png">
        <img id="insta4" src="images/instagrambillede4.png">
        <img id="insta5" src="images/instagrambillede5.png">
        <img id="insta6" src="images/instagrambillede6.png">
    </div>
</footer>

</body>
</html>