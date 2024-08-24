<!DOCTYPE html>
<html lang="de">
<head>
    <title>Hexen</title>
    <?php include ('header.php'); ?>
</head>
<body>
    
    <button id="btnMenu">
        <img src="images/menu.png" alt="Menu">
    </button>

    <header id="header">
        <img id=logo src="images/logo.png" title="Logo BPV" alt="Logo BPV">
    </header>

    <nav id="navigation">
        <?php include ('navigation.php'); ?>
    </nav>

    <nav2 id="navigation2">
        <?php include ('navigation2.php'); ?>
    </nav2>

    <teaser id=teaser>
        <img src="images/TeasHexen2015.jpg" alt="elsässer Hexen" title="elsässer Hexen" style="margin-bottom: 11em"/>
    </teaser>

    <script src="scripts.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btnMenu = document.getElementById("btnMenu");
            const navigation2 = document.getElementById("navigation2");

            btnMenu.addEventListener("click", function() {
                if (navigation2.style.display === "block") {
                    navigation2.style.display = "none";
                } else {
                    navigation2.style.display = "block";
                }
            });
        });
    </script>

    <main>

        <div id="Inhalt1">
        
            <h2>Hexen aus dem Elsass:<br>Fanny und ihre Freundinnen</h2>

            <div class="galerie-foto"><a rel="lightbox"href="images/WebHexen2015big1.jpg"><img src="images/WebHexen2015small1.jpg" alt="els&auml;sser Hexen" title="els&auml;sser Hexen"/></a></div>

            <p>11 km südlich von Sélestat (Schlettstadt) im Elsass liegt das Weindorf
            Bergheim mit etwa 2000 Einwohnern. Der sehenswerte Ort mit seinen mittelalterlichen 
            Fachwerkhäusern besitzt eine vollständig umschließende doppelte Stadtmauer 
            mit zahlreichen Wehrtürmen und einem Stadttor, dem Obertor, aus dem 14. Jahrhundert.</p>

        </div>
        
        <div id="Inhalt2">

	        <p>Auf der Heimfahrt von der Challenge Jean Carette 2015 in Sélestat entdeckten 
            Rita Kurz und Hansj&ouml;rg Grund in Bergheim die lustige Hexenbande.</p>

	        <p>Und so sexy wie die Hexenmädels die Blicke der Passanten anlocken hat sicher 
            schon mancher wie verhext zur Loggia hochgeschaut und das Weitergehen vergessen.

            <div class="galerie-foto"><a rel="lightbox"href="images/WebHexen2015big2.jpg"><img src="images/WebHexen2015small2.jpg"  alt="els&auml;sser Hexen" title="els&auml;sser Hexen" /></a></div>

        </div>
        
        <div id="Inhalt3" style="margin-top: 1em">

            <div class="galerie-foto"><a rel="lightbox"href="images/WebHexen2015big3.jpg"><img src="images/WebHexen2015small3.jpg" alt="els&auml;sser Hexen" title="els&auml;sser Hexen" /></a></div>
        
            <p>Uns Boulistes kommt beim Betrachten der Hexentruppe - und besonders bei einer 
            Hexe - natürlich sofort die Fanny in den Sinn. (Für Uneingeweihte: Wer beim Boule 
            zu Null verliert, also eine Fanny bekommt, der soll scherzhaft der Fanny den 
            Hintern küssen. Entsprechende Plastiken oder Bilder sind in jedem 
            Pétanque-Vereinsheim zu finden.)</p>

        </div>

    </main>
        
    <?php include('inc_fusszeile.php') ?>
            
</body>
</html>

