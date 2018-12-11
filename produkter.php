<?php require("db/db.php");?>

<!doctype html>
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

<!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
<meta charset="utf-8">

<!-- Titel som ses oppe i browserens tab mv. -->
<title>Produkter</title>

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
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/una2owl.css">
<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>
<section class="pTop sec">
    <h1>Produkterne er lavet af 5 forskellige planteprotein kilder</h1>
    <p>
        PlanteProtein, gør en ære i at sikre vores kunder det bedste vegan proteinpulver på markedet, til en overkommelig pris. Lavet af en unikt formuleret blanding af 5 plantebaserede proteiner. Hver pose er mejeri-fri, veganer-venlig og blandet med vores almindeligt anerkendte helt naturlig smag og farver, som udstråler sundhed. Indeholder mere end 25 g protein pr servering.
        Alle produkter du finder på vores side, er lavet ud fra en blanding af, Sojaprotein isolat, hvid hamp protein, Ærteprotein, Solsikkeprotein og Risprotein.
    </p>
</section>

<section class="pProdukter sec">

    <h1>Proteinpulver</h1>

    <?php
    $dbProdukter= mysqli_query($db, "SELECT * FROM produkter WHERE pKategori = 'pulver'" );
    while ($data = mysqli_fetch_assoc($dbProdukter)) {

    ?>

    <div class="pProdukt">
        <div class="pImg">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['pBillede'] ).'"/>'; ?>
            <div class="pOverlay">
                <a class="pHover">Læs mere</a>
            </div>
        </div>

        <a href="#"><?php echo "<p>".$data["pNavn"]. "</p>"; ?></a>
        <p class="pPris"><?php echo $data["pPris"]." DK"?></p>
        <a href="#"><div class="pAdd">Læg i Kurv</div></a>
    </div>

    <?php } ?>
</section>

<section class="pProdukter sec">

    <h1>Proteinbarer</h1>

    <?php
    $dbProdukter= mysqli_query($db, "SELECT * FROM produkter WHERE pKategori = 'bar'" );
    while ($data = mysqli_fetch_assoc($dbProdukter)) {

        ?>

        <div class="pProdukt">
            <div class="pImg">
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['pBillede'] ).'"/>'; ?>
                <div class="pOverlay">
                    <a class="pHover">Læs mere</a>
                </div>
            </div>

            <a href="#"><?php echo "<p>".$data["pNavn"]. "</p>"; ?></a>
            <p class="pPris"><?php echo $data["pPris"]." DK"?></p>
            <a href="#"><div class="pAdd">Læg i Kurv</div></a>
        </div>

    <?php } ?>
</section>

</body>
</html>