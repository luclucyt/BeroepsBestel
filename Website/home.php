<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/webIcon.ico">

    <title>De Beren || Home</title>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/_menu/menu.css">
    <link rel="stylesheet" href="CSS/index/index.css">

    <!-- JS -->
    <script src="JS/_menu/menu.js" defer></script>
    <script src="JS/_menu/darkmode.js" defer></script>
    <script src="JS/login/login.js" defer></script>
    <script src="JS/index/index.js" defer></script>
</head>

<body id="body">
    <header>
        <?php include '_menu.php'; ?>
    </header>

    <main>
        <div id="thumbnailWrapper" onclick="window.location = 'bestel.php'">
            <img id="thumbnail" alt="">
        </div>

        <div id="bestelBtnWrapper">
            <a href="bestel.php"><h1 id="bestelBtn">Bestel hier</h1></a>
        </div>

        <div id="subHeaderWrapper">

            <!---menu-->
            <a href="bestel.php" class="subHeaderWrapper">
                <img src="images/index/subHeader1.jpg" class="subHeaderImg">
                <div class="subHeaderText">
                    <h1 class="subHeaderTextH1">Bekijk ons menu</h1>
                    <p class="subHeaderTextP">
                        Ga jij voor de klassiekers, zoals carpaccio, saté en een dame blanche? Of ga je voor vegetarische opties, zoals geitenkaas kroketjes en een red carrot burger? De keuze is reuze! Je kunt kiezen uit vier verschillende voorgerechten, vijf verschillende hoofgerechten en drie verschillende desserts.
                    </p><br>
                    <p href="bestel.php" class="subHeaderLink">Bekijk het hele menu!</p>
                </div>
            </a>

            <!--werken bij-->
            <a href="404.php" class="subHeaderWrapper">
                <img src="images/index/subHeader2.jpg" class="subHeaderImg">
                <div class="subHeaderText">
                    <h1 class="subHeaderTextH1">Gaan met die baan!</h1>
                    <p class="subHeaderTextP">
                        Lekker werken bij De Beren, dat wil je! Wij zijn altijd op zoek naar gezellige collega's in de bediening, in de keuken, achter de bar, op de fiets, op de scooter of achter de balie. Solliciteren is nog nooit zo makkelijk geweest en wij kunnen niet wachten om een praatje met je te maken. Tot zo!
                    </p><br>
                    <p href="eetmenu.php" class="subHeaderLink">Soliciteer hier</p>
                </div>
            </a>

            <!--reviews-->
            <a href="reviews.php" class="subHeaderWrapper">
                <img src="images/index/subHeader3.jpg" class="subHeaderImg">
                <div class="subHeaderText">
                    <h1 class="subHeaderTextH1">Plaats je reviews</h1>
                    <p class="subHeaderTextP">
                        Laat ons weten hoe jij jouw De Beren-avond hebt beleefd, thuis óf in één van onze restaurants. Deel in slechts een paar minuten jouw Berenbeleving!
                    </p><br>
                    <p href="eetmenu.php" class="subHeaderLink">Plaats je review hier.</p>
                </div>
            </a>

        </div>


        <div id="bottomSubHeaderWrapper">
            <a href="informatie.php" class="bottomSubHeaderWrapper">
                <img src="images/index/subHeader4.jpg" class="subHeaderImg">
                <div class="subHeaderText bottomSubHeaderText">
                    <br><h1 class="subHeaderTextH1">Bekijk onze restaurants</h1>
                    <p class="subHeaderTextP">
                        Welkom bij ons restaurant! Geniet van onze smaakvolle gerechten, bereid met verse en seizoensgebonden ingrediënten. Bekijk ons menu en reserveer uw tafel eenvoudig via de knop hieronder. Ons vriendelijke en professionele team staat voor u klaar om u te bedienen en uw bezoek zo aangenaam mogelijk te maken. Of u nu komt voor een romantisch diner, een gezellig etentje met vrienden of familie, of een zakelijke bijeenkomst, ons restaurant biedt de perfecte ambiance voor elke gelegenheid.

                        Wij zijn trots op onze uitstekende service en aandacht voor detail. Ons personeel is attent en blij om u te helpen bij speciale verzoeken of dieetwensen. Bij ons vindt u een breed scala aan gerechten, van klassieke favorieten tot innovatieve creaties, voor elk wat wils.

                        Kom snel bij ons langs en laat ons u verwennen met onze heerlijke gerechten en uitstekende service. Of het nu voor een snelle lunch of een uitgebreid diner is, ons restaurant biedt voor ieder wat wils. Wij kijken ernaar uit u te verwelkomen en u een onvergetelijke culinaire ervaring te bieden.

                    </p><br>

                    <p href="informatie.php" class="subHeaderLink">Druk hier voor alle informatie.</p>
                </div>
            </a>
        </div>
    <footer>
        <?php //include '_footer.php';  ?>
    </footer>
</body>

</html>