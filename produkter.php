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
<link href="css/camillacss.css" rel="stylesheet" type="text/css">
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

<div class="line"></div>
<section class="bestseller">

    <?php
    $dbProdukter= mysqli_query($db, "SELECT * FROM produkter WHERE pId = '1'" );
    $data = mysqli_fetch_assoc($dbProdukter)

    ?>

    <div class="pBestseller">
        <h1>BESTSELLER</h1>
        <div class="stop boldCenter"><a href="#"><?php echo "<p>".$data["pNavn"]. "</p>"; ?></a></div>
        <p class="pPris" style="text-align: center"><?php echo $data["pPris"]." DK"?></p>
        <div class="stop2"><?php echo "<p>".$data["pbeskrivelse"]. "</p>"; ?></div>
        <a href="#"><div class="pAdd computer">Læg i Kurv</div></a>

        <div class="pImg bestImg">
            <img src="images/<?php echo $data["pBillede"] ?>" alt="" class="pImage">
            <div class="pOverlay">
                <a class="pHover">Læs mere</a>
            </div>
        </div>

        <a href="#"><div class="pAdd tablet readTab">Læg i Kurv</div></a>
    </div>

</section>



<section class="pProdukter sec">

    <h1>Proteinpulver</h1>

    <div class="pFlex">
    <?php
    $dbProdukter= mysqli_query($db, "SELECT * FROM produkter WHERE pKategori = 'pulver'" );
    while ($data = mysqli_fetch_assoc($dbProdukter)) {

    ?>

    <div class="pProdukt">
        <div class="pImg">
            <img src="images/<?php echo $data["pBillede"] ?>" alt="" class="pImage">
            <div class="pOverlay">
                <a class="pHover">Læs mere</a>
            </div>
        </div>

        <div class="stop"><a href="#"><?php echo "<p>".$data["pNavn"]. "</p>"; ?></a></div>
        <p class="pPris"><?php echo $data["pPris"]." DK";?></p>
        <a href="#"><div class="pAdd">Læg i Kurv</div></a>
    </div>

    <?php } ?>
    </div>
</section>

<div class="pLineImg"><img src="images/48364483_499752773853381_7723101477455003648_n.png" alt=""></div>


<section class="pProdukter sec">

    <h1>Proteinbarer</h1>

    <div class="pFlex">
    <?php
    $dbProdukter= mysqli_query($db, "SELECT * FROM produkter WHERE pKategori = 'bar'" );
    while ($data = mysqli_fetch_assoc($dbProdukter)) {

        ?>

        <div class="pProdukt">
            <div class="pImg">
                <img src="images/<?php echo $data["pBillede"] ?>" alt="" class="pImage">
                <div class="pOverlay">
                    <a class="pHover">Læs mere</a>
                </div>
            </div>

            <div class="stop"><a href="#"><?php echo "<p>".$data["pNavn"]. "</p>"; ?></a></div>
            <p class="pPris"><?php echo $data["pPris"]." DK"?></p>
            <a href="#"><div class="pAdd">Læg i Kurv</div></a>
        </div>

    <?php } ?>
    </div>
</section>
<div class="pLineImg"><img src="images/48364483_499752773853381_7723101477455003648_n.png" alt=""></div>

<section class="betingelser">

    <div class="betingContent">

        <h1>Levering på 1-2 dage</h1>
        <p>
            Hos Plante-Protein har vi dag til dag levering og gratis forsendelse på ordre over 700 kr., dvs. Hvis du bestiller inden kl. 12, bliver ordren sendt samme dag. Typisk er leveringen på 1-2 hverdage. Ved bestilling kan ordren leveres til pakkeshop eller levering til døren for 49 kr. Alle ordre leveres med GLS.
            <br><br>

            Plante-protein.dk forbeholder sig retten til at annullere en ordre, såfremt vi ikke kan skaffe varen eller at der er problemer og fejl med ordren / leveringen. Dette sker selvfølgelig uden omkostninger for dig og du vil få besked inden vi annullerer en ordre.
            OBS: Det er vigtigt at du oplyser dit rigtige mobil nr. og din rigtige e-mail, da dette bruges til at informere dig om leverings- og forsendelsesstatus.
            Vi benytter Lagerkompagniet.dk til at håndtere vores oplagring og forsendelser, for at sikre hurtige leverancer og lav fejlprocent.

        </p>

    </div>

    <div class="line2"></div>

    <div class="betingContent">

        <h1>Du har 30 dages returret</h1>
        <p>
            Vi tager kun vare tilbage hvis de er uåbnet og stadig i original emballage. For at sende en vare retur, skal varen sendes til adressen:
            LAGERKOMPAGNIET ApS,
            Søllerupvej 21,
            DK-4681 Herfølge.
            <br><br>

            Pengene vil blive refunderet på din konto, når vi modtager varen. Ønsker du en ny vare, skal du lave en ny ordre på www.plante-protein.dk.
            BEMÆRK: Ved returnering er det kunden, som hæfter for evt. fejl og mangler ved varen. Vi modtager kun varer, som ikke er åbnet og stadig er i original emballage. Undtagelse er naturligvis hvis produktet fejler noget - f.eks er for gammelt eller andet.

        </p>

    </div>

    <div class="line2"></div>

    <div class="betingContent">

        <h1>Reklamationsret inden for angivne holdbarhed</h1>
        <p>
            Der er reklamationsret på alle varer inden for produktets angivne holdbarhed. Vi forhandler varer af høj kvalitet og dette skal også være vores kunders oplevelse.
            Er du ikke tilfreds og ønsker at reklamere, bedes du kontakte os via hjemmesiden med en beskrivelse af problemet. Tilfredse kunder er naturligvis vigtige for os og vi vil gøre vores ypperste for, at du føler dig godt og retfærdigt behandlet.

        </p>

    </div>

</section>

</body>
</html>