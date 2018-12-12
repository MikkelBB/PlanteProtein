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

<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
<link href="css/ademcss.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/una2owl.css">
<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>



<?php $var = $eksamen["id"];?>

<?php
$eksamenQuery = mysqli_query($db, "SELECT * FROM produkter WHERE pId = 7");
while($eksamen = mysqli_fetch_assoc($eksamenQuery)) {
    $var = $eksamen["pId"];
    ?>

    <div class="stortbillede">
        <a href="produkterindividuel.php?id=<?php echo $var ?>"><img src="images/48275325_343701226455100_5327121772011585536_n.png"></a>
    </div>

    <?php
}


?>
<br>

<div class="nyhedtekst"> <h1>Nyheder</h1></div>

<div class="nyheder">
    <?php
    $eksamenQuery = mysqli_query($db, "SELECT * FROM produkter WHERE pId LIMIT 3 OFFSET 14");
    while($eksamen = mysqli_fetch_assoc($eksamenQuery)) {
    $var = $eksamen ["pId"];
    ?>

        <div class="nyhedhvid">
    <div class="nyhedbilleder">

        <a href="produkterindividuel.php?id=<?php echo $var ?>"><img src="images/<?php echo $eksamen["pBillede"] ?>"></a>

    </div>

        <?php
        echo "<div class='nyhednavn'>".$eksamen["pNavn"]."</div>";
        echo "<div class='nyhedpris'>".$eksamen["pPris"]."</div>";

        ?>

        <form  method="post" action="index.php">
            <button type="submit" class="koebknap">Læg i kurv</button>
        </form>


        </div>
        <?php
    }


    ?>
</div>


<div class="anbefalettekst"> <h1>Anbefalet</h1> </div>

<div class="anbefalet">


    <?php
    $eksamenQuery = mysqli_query($db, "SELECT * FROM produkter WHERE pId LIMIT 4 OFFSET 5");
    while($eksamen = mysqli_fetch_assoc($eksamenQuery)) {
    $var = $eksamen ["pId"];
    ?>
<div class="anbefalethvid">
    <div class="anbefaletbilleder">
        <a href="produkterindividuel.php?id=<?php echo $var ?>"><img src="images/<?php echo $eksamen["pBillede"] ?>"></a>
    </div>
        <?php
        echo "<div class='anbefaletnavn'>".$eksamen["pNavn"]."</div>";
        echo "<div class='anbefaletpris'>".$eksamen["pPris"]."</div>";

        ?>


        <form class="test" method="post" action="index.php">
            <button type="submit" class="koebknap" >Læg i kurv</button>
        </form>
</div>

        <?php
    }


    ?>

</div>


<div class="anmeldelsertekst"><h1>Anmeldelser</h1></div>
<div class="anmeldelser">

    <div class="soeren">
        <div class="soerenbillede"></div>
        <h2>Søren Henriksen</h2><br>
        <p>"Jeg er så glad for at handle mine kosttilskud på Plante-protein.dk. De har hurtig levering og deres produkter er af den bedste kvalitet."</p>
    </div>
    <div class="christina">
        <div class="christinabillede"></div>
        <h2>Christina Birkedal</h2><br>
        <p>"Jeg har altid prioriteret vegansk proteinpulver som kosttilskud men det har været svært at få fat i indtil jeg fandt Plante-protein.dk. Udover de gør det nemt for mig at få mine kosttilskud, så er det også lavet af en god kvalitet og er meget velsmagende."</p>

    </div>
    <div class="jeppe">
        <div class="jeppebillede"></div>
        <h2>Jeppe Norman</h2><br>
        <p>"Jeg bruger Plante-proteins produkter for at opnå de bedste resultater i min træning. Deres produkter er lækre, sunde og til en fornuftig pris. Deres kosttilskud hjælper mig hver dag til at holde en sund livsstil."</p>
    </div>
</div>

<!-- i <body> har man alt indhold på siden -->
<body>
</body>
</html>