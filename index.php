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
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>



<?php $var = $eksamen["id"];?>

<?php
$eksamenQuery = mysqli_query($db, "SELECT * FROM produkter WHERE pId = 2");
while($eksamen = mysqli_fetch_assoc($eksamenQuery)) {
    $var = $eksamen["pId"];
    ?>

    <div class="stortbillede">
        Stortbillede
    </div>

    <?php
}


?>




<div class="nyheder">
    <?php
    $eksamenQuery = mysqli_query($db, "SELECT * FROM produkter WHERE pId LIMIT 3");
    while($eksamen = mysqli_fetch_assoc($eksamenQuery)) {
    $var = $eksamen ["pId"];
    ?>

    <div class="nyhedbilleder">
        Nyheder
    </div>

        <?php
    }


    ?>
</div>




<div class="anbefalet">
    <?php
    $eksamenQuery = mysqli_query($db, "SELECT * FROM produkter WHERE pId LIMIT 4 OFFSET 3");
    while($eksamen = mysqli_fetch_assoc($eksamenQuery)) {
    $var = $eksamen ["pId"];
    ?>

    <div class="anbefaletbilleder">
        Anbefalet
    </div>
        <?php
    }


    ?>
</div>



<div class="anmeldelser">
    <div class="soeren">
        Søren Henriksen
    </div>
    <div class="christina">
        Christina Birkedal
    </div>
    <div class="jeppe">
        Jeppe Norman
    </div>
</div>

<!-- i <body> har man alt indhold på siden -->
<body>
</body>
</html>