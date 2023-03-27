<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/webIcon.ico">

    <title>De Beren || Bestel</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/_menu/menu.css">
    <link rel="stylesheet" href="CSS/bestel/bestel.css">
    
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
        <div class="main-product-wrapper">

            <div class="product-wrapper">
                <img class="product-foto" src="images/bestel/sate-1.avif" alt="">
                <div class="tekst-wrapper">
                    <h1 class="product-titel">SATÉDAGEN SATÉMENU</h1>

                    <p class="product-omschrijving">
                        2 stokjes kip-, varkenshaas- of vegetarische saté met pindasaus, gefrituurde uitjes, kroepoek en bijgerecht naar keuze
                    </p>

                    <div class="product-buy-wrapper">
                        <p class="product-prijs">€9,95 per stuk</p>
                        <button class="product-addButton" onclick="add('SATÉDAGEN SATÉMENU',9.95,'sate-1.avif')" >BESTEL</button>
                    </div>
                </div>
            </div>


            <div class="product-wrapper">
                <img class="product-foto" src="images/bestel/burger.avif" alt="">
                <div class="tekst-wrapper">
                    <h1 class="product-titel">CLASSIC BURGERMENU</h1>

                    <p class="product-omschrijving">
                        100% rundvleesburger op een brioche bun met Little Gem en onze befaamde Berensaus
                    </p>

                    <div class="product-buy-wrapper">
                        <p class="product-prijs">€13,95 per stuk</p>
                        <button class="product-addButton" onclick="add('CLASSIC BURGERMENU',13.95,'burger.avif')" >BESTEL</button>
                    </div>
                </div>
            </div>

            <div class="product-wrapper">
                <img class="product-foto" src="images/bestel/carpacio.avif" alt="">
                <div class="tekst-wrapper">
                    <h1 class="product-titel">CARPACCIO</h1>

                    <p class="product-omschrijving">
                        Met Grana Padano, pijnboompitten, uitgebakken spekjes, gemengde sla en truffelmayo
                    </p>

                    <div class="product-buy-wrapper">
                        <p class="product-prijs">€9,95 per stuk</p>
                        <button class="product-addButton" onclick="add('CARPACCIO',9.95,'carpacio.avif')" >BESTEL</button>
                    </div>
                </div>
            </div>

            <div class="product-wrapper">
                <img class="product-foto" src="images/bestel/fish.avif" alt="">
                <div class="tekst-wrapper">
                    <h1 class="product-titel">FISH & CHIPS VEGAN</h1>

                    <p class="product-omschrijving">
                        Vegan lekerbeck met plantaardige kruidensaus, rauwkost en ambachtelijke frites
                    </p>

                    <div class="product-buy-wrapper">
                        <div class="product-prijs">€16,95 per stuk</div>
                        <button class="product-addButton" onclick="add('FISH & CHIPS VEGAN',16.95,'fish.avif')" >BESTEL</button>
                    </div>
                </div>
            </div>

            <div class="product-wrapper">
                <img class="product-foto" src="images/bestel/loaded.avif" alt="">
                <div class="tekst-wrapper">
                    <h1 class="product-titel">LOADED FRIES FRIKANDEL SPECIAAL</h1>

                    <p class="product-omschrijving">
                        Franse frites met frikandel, fritessaus, curry, rode ui, Spaanse peper en bieslook
                    </p>

                    <div class="product-buy-wrapper">
                        <div class="product-prijs">€9,95 per stuk</div>
                        <button class="product-addButton" onclick="add('LOADED FRIES FRIKANDEL SPECIAAL',9.95,'loaded.avif')" >BESTEL</button>
                    </div>
                </div>
            </div>

            <div class="product-wrapper">
                <img class="product-foto" src="images/bestel/kinder.avif" alt="">
                <div class="tekst-wrapper">
                    <h1 class="product-titel">COMBIDEAL KIDS</h1>

                    <p class="product-omschrijving">
                        Kroket, frikandel, kipnuggets, kipsaté, vegan saté of een kipschnitzel met frites naar keuze, fritessaus, appelmoes + een Berenbeker met ijsje naar keuze
                    </p>

                    <div class="product-buy-wrapper">
                        <div class="product-prijs">€10,50 per stuk</div>
                        <button class="product-addButton" onclick="add('COMBIDEAL KIDS',10.50,'kinder.avif')" >BESTEL</button>
                    </div>
                </div>
            </div>

            <div class="product-wrapper">
                <img class="product-foto" src="images/bestel/sate-2.avif" alt="">
                <div class="tekst-wrapper">
                    <h1 class="product-titel">SATÉ BOX</h1>

                    <p class="product-omschrijving">
                        Box met 20 of 40 stokjes kipsaté incl pindasaus en gefrituurde uitjes
                    </p>

                    <div class="product-buy-wrapper">
                        <div class="product-prijs">€49,95 per stuk</div>
                        <button class="product-addButton" onclick="add('SATÉ BOX',49.95,'sate-2.avif')" >BESTEL</button>
                    </div>
                </div>
            </div>

            <div class="product-wrapper">
                <img class="product-foto" src="images/bestel/biterbal.avif" alt="">
                <div class="tekst-wrapper">
                    <h1 class="product-titel">BITTERBALLEN</h1>

                    <p class="product-omschrijving">
                        Bitterballen. Inclusief fritessaus en mosterd. Vanaf 12st
                    </p>

                    <div class="product-buy-wrapper">
                        <div class="product-prijs">€8,95 per stuk</div>
                        <button class="product-addButton" onclick="add('BITTERBALLEN',8.95,'biterbal.avif')" >BESTEL</button>
                    </div>
                </div>
            </div>

            <div class="product-wrapper">
                <img class="product-foto" src="images/bestel/brownie.avif" alt="">
                <div class="tekst-wrapper">
                    <h1 class="product-titel">FUNKY NUTS BROWNIE BAR</h1>

                    <p class="product-omschrijving">
                        Smeuïge chocolade notencake met stukjes pure en melkchocolade
                    </p>

                    <div class="product-buy-wrapper">
                        <div class="product-prijs">€2,50 per stuk</div>
                        <button class="product-addButton" onclick="add('FUNKY NUTS BROWNIE BAR',2.50,'brownie.avif')" >BESTEL</button>
                    </div>
                </div>
            </div>

            <div class="product-wrapper">
                <img class="product-foto" src="images/bestel/six pack.avif" alt="">
                <div class="tekst-wrapper">
                    <h1 class="product-titel">HEINEKEN 6-PACK</h1>

                    <p class="product-omschrijving">
                        6x 0,33L
                    </p>

                    <div class="product-buy-wrapper">
                        <div class="product-prijs">€11,25 per stuk</div>
                        <button class="product-addButton" onclick="add('HEINEKEN 6-PACK',11.25,'six pack.avif')" >BESTEL</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="cart-wrapper">
            <div class="cart-main-product-wrapper">
            </div>
                
            <div class="cart-total-wrapper">
                <h1 id="prijs-totaal">Totaal prijs:</h1>
                <button class="cart-bestel">betalen</button>
            </div>
        </div>



    </main>

    <footer>
        <?php //include '_footer.php'; ?>
    </footer>
    <script src="JS/bestel/bestel.js"></script>
</body>
</html>