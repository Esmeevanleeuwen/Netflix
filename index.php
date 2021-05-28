<?php

require_once('db_connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css?v=1.6">
    <title>Netflix 2.0</title>
</head>
<body>
    <nav class="background">
        <img class="logo" src="images/Netflix_Logo_RGB.png">
        <a href="login.php"><button class="login-button" type="button">Inloggen</button></a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12 info">
                <h1>Onbeperkt series, films en meer kijken.</h1>
                <p>Kijk waar je wilt. Altijd opzegbaar.</p>
                <p class="little-text">Klaar om te kijken? Voer je e-mailadres in om je lidmaatschap te starten of te hernieuwen.</p>
                <input class="email-field" placeholder="E-mailadres" type="email" name="email">
                <input class="aanmeld-button" type="submit" value="Aan de slag >">
            </div>
        </div>
        <div class="row space">
            <div class="col-md-12 info-field">
                <div class="text-field left">
                    <h2>Kijk op je tv.</h2>
                    <p>Kijk op je smart-tv's, PlayStation, Xbox, Cromecast, Apple TV, blu-rayspelers en meer.</p>
                </div>
                <img class="img right" src="images/tv.png">
            </div>
        </div>
    </div>
    <div class="gray"></div>
    <div class="container">
        <div class="row space">
            <div class="col-md-12 info-field">
                <div class="text-field right">
                    <h2>Download series die je offline wilt kijken.</h2>
                    <p>Sla je favorieten eenvoudig op zodat je altijd wat kunt kijken.</p>
                </div>
                <img class="img left" src="images/mobile.jpg">
            </div>
        </div>
    </div>
    <div class="gray"></div>
    <div class="container">
        <div class="row space">
            <div class="col-md-12 info-field">
                <div class="text-field left">
                    <h2>Kijk overal.</h2>
                    <p>Stream onbeperkt series en films op je telefoon, tablet, laptop en tv, zonder meer te betalen.</p>
                </div>
                <img class="img right" src="images/device-pile.png" alt="devicePile">
            </div>
        </div>
    </div>
    <div class="gray"></div>
    <div class="container">
        <div class="row space">
            <div class="col-md-12 info-field">
                <div class="text-field right">
                    <h2>Maak profielen voor kids.</h2>
                    <p>Laat kids op avontuur gaan met hun favoriete personages in een omgeving die speciaal voor hen is gemaakt. Gratis bij je lidmaatschap.</p>
                </div>
                <img class="img left" src="images/kids.png">
            </div>
        </div>
    </div>
    <div class="gray"></div>
    <div class="container">
        <div class="row space">
            <div class="col-md-12">
                <h2 class="center">Veelgestelde vragen</h2>
                <div class="space"></div>
                <div class="accordion accordion-flush center" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Wat kan ik kijken op Netflix?
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Netflix heeft een uitgebreide catalogus van speelfilms, documentaires, series, anime, bekroonde Netflix Originals en meer. Kijk zoveel je wilt en wanneer je wilt.</div>
                        </div>
                    </div>
                    <div class="little-space"></div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Wat is Netflix?
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Netflix is een streamingservice met een zeer groot aanbod van bekroonde series, films, anime, documentaires en nog veel meer op duizenden apparaten met een internetverbinding. 
                            <br><br>Je kijkt zo veel je wilt, wanneer je wilt, zonder enige vorm van reclame. En dit allemaal voor één lage prijs per maand. Er valt altijd iets nieuws te ontdekken en elke week worden er nieuwe series en films toegevoegd!</div>
                        </div>
                    </div>
                    <div class="little-space"></div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Hoeveel kost Netflix?
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Kijk Netflix op je smartphone, tablet, smart-tv, laptop of streamingapparaat. Allemaal voor één lage prijs per maand. Abonnementen vanaf € 7,99 tot € 13,99 per maand. Geen bijkomende kosten of contracten.</div>
                        </div>
                    </div>
                    <div class="little-space"></div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Waar kan ik kijken?
                        </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Kijk altijd en overal op een onbeperkt aantal apparaten. Log in bij je account op de Netflix-website om direct online te kijken vanaf je computer of op een apparaat met een internetverbinding en de Netflix-app, zoals smart-tv's, smartphones, tablets, mediaspelers en gameconsoles. 
                            <br><br>Je kunt je favoriete series ook downloaden via de iOS-, Android- of Windows 10-app. Gebruik de downloadfunctie om onderweg en wanneer je geen internetverbinding hebt, te kunnen kijken. Neem Netflix overal mee.</div>
                        </div>
                    </div>
                    <div class="little-space"></div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Hoe kan ik opzeggen?
                        </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Netflix is flexibel. Er zijn geen omslachtige contracten en geen verplichtingen aan verbonden. Je kunt je account makkelijk online annuleren. Je hoeft hiervoor maar twee keer te klikken. Er zijn geen annuleringskosten. Je kunt je account op elk gewenst moment opstarten of stopzetten.</div>
                        </div>
                    </div>
                    <div class="little-space"></div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Is Netflix geschikt voor kids?
                        </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Netflix Kids maakt onderdeel uit van je lidmaatschap. Ouders kunnen erop vertrouwen dat hun kids gezinsvriendelijke series en films kijken in hun eigen omgeving. 
                            <br><br>Kids-profielen bevatten ouderlijk toezicht met een pincode, dus je kunt een leeftijdsclassificatie instellen voor content die kids mogen kijken. Ook kun je specifieke titels blokkeren die kids niet mogen zien.</div>
                        </div>
                    </div>
                    <div class="space"></div>
                    <p class="little-text center">Klaar om te kijken? Voer je e-mailadres in om je lidmaatschap te starten of te hernieuwen.</p>
                    <input class="email-field" placeholder="E-mailadres" type="email" name="email">
                    <input class="aanmeld-button" type="submit" value="Aan de slag >">
                </div>
                <div class="space"></div>
            </div>
        </div>
    </div>
    <div class="gray"></div>
    <div class="container">
        <footer>
            <div class="wrapper">
                <ul>
                    <img class="logo" src="images/fb_logo.JPG" alt="facebook logo">
                    <img class="logo" src="images/ig_logo.JPG" alt="instagram logo">
                    <img class="logo" src="images/tw_logo.JPG" alt="twitter logo">
                    <img class="logo" src="images/yt_logo.JPG" alt="youtube logo"><br><br>
                    <li>Audio en ondertiteling</li>
                    <li>Helpcenterum</li>
                    <li>Nederland, the netherlands</li>
                    <li>Mediacenter</li>
                </ul>
                <ul>
                    <li>Audiodescriptie</li>
                    <li>Cadeaubonnen</li>
                    <li>Gebruiksvoorwaarden</li>
                    <li>Wettelijke bepalingen</li>
                </ul>
                <ul>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Werk</a></li>
                    <li><a href="">Prive beleid</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <ul>
                    <li>&copy; alle rechten behouden 2021 </li>

                </ul>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
