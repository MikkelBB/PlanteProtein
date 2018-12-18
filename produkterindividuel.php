<?php
require("db/db.php");

?>

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
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
<link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/una2owl.css">
<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php

$readId = $_GET["id"];

$produkterQuery = mysqli_query($db, "SELECT * FROM produkter WHERE pId = '$readId'");
$produkter = mysqli_fetch_assoc($produkterQuery);

/*
echo "<div class='MoviePicture'><img src='images/mwm/".$movies["mBillede"]."'></div>";
echo "<div class='Moviebox'><div class='MovieNavn'>".$movies["mName"].$movies["mGenre"].$movies["mAarstal"].$movies["mTid"]
     .$movies["mRating"].$movies["mBeskrivelse"]."</div></div>"*/

echo "<div class='produkterPicture'><img src='images".$produkter["pBillede"]."'></div>";

echo "<div class='produkterflex'><div class='produkternavn'><h2>".$produkter["pNavn"]."</h2></div>".
    "<div class='produkterpris'>".$produkter["pPris"]."</div>".
    "<div class='produkterbeskrivelse'>".$produkter["pbeskrivelse"]."</div>".
    "<div class='produkterkategori'><p>Kategori: </p>".$produkter["pKategori"]."</div></div>";


echo "<a href='#'><div class='addkurv'><i class='fas fa-plus'></i><p>Tilføj til Kurv</p></div></a>";


?>





</body>
</html>