<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/webIcon.ico">

    <title>De Beren || Over ons</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/_menu/menu.css">
    <link rel="stylesheet" href="CSS/informatie/informatie.css">
    
    <!-- JS -->
    <script src="JS/_menu/menu.js" defer></script>
    <script src="JS/_menu/darkmode.js" defer></script>
    <script src="JS/login/login.js"></script>
</head>

<body id="body">
    <header>
        <?php include '_menu.php'; ?>
    </header>
    <main>
        <div id="background-color">.</div>
        <img id="header-img" src="./images/informatie/header.png" alt="website header">
        <div id="header">
            <h1>ROTTERDAM CENTRUM</h1>
            <p>Restaurant De Beren Rotterdam-centrum is te vinden aan het Schouwburgplein in hartje Rotterdam. Dit maakt het de ideale locatie om te lunchen tijdens een dagje shoppen of te dineren voordat je naar de bioscoop gaat. In de zomermaanden kun je genieten van onze gerechten op het grote en gezellige terras.</p>
        </div>
        <div id="contact">
            <h3>Contact:</h3>
            <p>Karel Doormanstraat</p>
            <p>3012 GP / Rotterdam</p>
        </div>
        <div id="cards">
            <div class="card">
                <img src="./images/informatie/openingstijden.jpg" alt="openingstijden img">
                <h4>Openingstijden</h4>
                <p>Maandag: 11:00 - 22:00</p>
                <p>Dinsdag: 11:00 - 22:00</p>
                <p>Woensdag: 11:00 - 22:00</p>
                <p>Donderdag: 11:00 - 22:00</p>
                <p>Vrijdag: 11:00 - 23:30</p>
                <p>Zaterdag: 11:00 - 23:30</p>
                <p>Zondag: 11:00 - 22:00</p>
            </div>
            <div class="card" id="reserveer-card" onclick=reserveerCard()>
                <img src="./images/informatie/groepsreservering.jpg" alt="reserving img">
                <h4>kom je met een groep?</h4>
                <p>Restaurant de Beren Rotterdam Centraal is uitermate geschikt voor grote gezelschappen vanaf 10 personen. Bel voor meer informatie met 06 29 27 92 12 (kantooruren) of vul het aanvraagformulier in!</p>
                <p id="aanvraag-txt">Doe hier je aanvraag!</p>
            </div>  
            <div>
                <h1 id="missie">"ALS JIJ ONS RESTAURANT MET EEN GLIMLACH VERLAAT, IS ONZE MISSIE GESLAAGD"</h1>
                <p id="signature">RICO, VESTIGINGSMANAGER DE BEREN ROTTERDAM-CENTRUM</p>
            </div>
        </div>
    </main>
    <footer>
        <?php //include '_footer.php'; ?>
    </footer>
</body>
<script src="./JS/informatie/index.js"></script>
</html>