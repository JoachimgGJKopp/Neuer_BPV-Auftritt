<!DOCTYPE html>
<html lang="de">

<head>
    <title>Hexen</title>

    <?php include ('header.php'); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.0/dist/fancybox.css">

</head>

<body>

    <div class="transparent-layer"></div>
    
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
        <img src="images/TeasHexen2015.jpg" alt="elsässer Hexen" title="elsässer Hexen" style="margin-bottom: 9em"/>
    </teaser>

    <div class="container-fluid">

        <main>

            <div class="row" style="margin: 0px -1.5em;">

                <div class="col-12 col-sm-4">

                    <div class="pe-1">

                        <h3>Elsässer Hexen: Fanny und ihre Freundinnen</h3>

                        <div class="galerie-foto">
                            <a data-fancybox="gallery" href="images/WebHexen2015big1.jpg">
                            <img src="images/WebHexen2015big1.jpg" alt="els&auml;sser Hexen"
                            title="els&auml;sser Hexen" style="margin-top: 0.5em; margin-bottom: 1em" /></a>
                        </div>

                        <p>11 km südlich von Sélestat (Schlettstadt) im Elsass liegt das Weindorf
                        Bergheim mit etwa 2000 Einwohnern. Der sehenswerte Ort mit seinen mittelalterlichen 
                        Fachwerkhäusern besitzt eine vollständig umschließende doppelte Stadtmauer 
                        mit zahlreichen Wehrtürmen und einem Stadttor, dem Obertor, aus dem 14. Jahrhundert.</p>

                        <p>Auf der Heimfahrt von der Challenge Jean Carette 2015 in Sélestat entdeckten 
                        Rita Kurz und Hansj&ouml;rg Grund in Bergheim die lustige Hexenbande.</p>

                    </div>

                </div>
        
				<div class="col-12 col-sm-4">

					<div class="px-1">

                        <p>Und so sexy wie die Hexenmädels die Blicke der Passanten anlocken hat sicher 
                        schon mancher wie verhext zur Loggia hochgeschaut und das Weitergehen vergessen.

                        <div class="galerie-foto">
                            <a data-fancybox="gallery" href="images/WebHexen2015big2.jpg">
                            <img src="images/WebHexen2015big2.jpg" alt="els&auml;sser Hexen"
                            title="els&auml;sser Hexen" style="margin-bottom: 1em;" /></a>
                        </div>

                        
                        <p>Die Hexen sind ein beliebtes Fotomotiv. Die Hexenbande ist eine 
                        Werbeaktion des Bergheimer Weinfestes, das immer am ersten Wochenende im 
                        September stattfindet. Die Hexen sind ein echter Hingucker und ziehen 
                        die Blicke der Passanten an.</p>

                    </div>

                </div>
        
				<div class="col-12 col-sm-4">

					<div class="ps-1">

                        <div class="galerie-foto">
                            <a data-fancybox="gallery" href="images/WebHexen2015big3.jpg">
                            <img src="images/WebHexen2015big3.jpg" alt="els&auml;sser Hexen"
                            title="els&auml;sser Hexen" style="margin-bottom: 1em; margin-top: 0.5em;" /></a>
                        </div>   

                        <p>Uns Boulistes kommt beim Betrachten der Hexentruppe - und besonders bei einer 
                        Hexe - natürlich sofort die Fanny in den Sinn. (Für Uneingeweihte: Wer beim Boule 
                        zu Null verliert, also eine Fanny bekommt, der soll scherzhaft der Fanny den 
                        Hintern küssen. Entsprechende Plastiken oder Bilder sind in jedem 
                        Pétanque-Vereinsheim zu finden.)</p>

                    </div>

                </div>

            </div>

        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.0/dist/fancybox.umd.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Fancybox.bind("[data-fancybox='gallery']", {
                closeButton: "inside", // Zeigt den Schließen-Button innerhalb des Bildes an
            });
        });
    </script>

    <script src="scripts/DataFancyBox.js"></script>

    <script src="scripts/AufrufButton.js"></script>
        
    <?php include('inc_fusszeile.php') ?>
            
</body>
</html>

