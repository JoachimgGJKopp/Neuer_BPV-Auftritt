<!DOCTYPE html>
<html lang="de">
<head>
    <title>Links</title>
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

    <teaser id="teaser">
        <img src="images/TeasLinkAbend.jpg" alt="Abendhimmel überm Seepark" title="Abendhimmel überm Seepark" style="margin-bottom: 1.5em;"/>
    </teaser>

    <!--<script src="scripts.js"></script>-->

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
        
    <div id="links">

        <div id="linkspalte1">

            <h2>Verbände</h2>

            <p><a target="_blank" href="http://www.petanque-bw.de">BBPV Baden-Württemberg</a><br>
            <a target="_blank" href="http://www.petanque-dpv.de">Deutscher Petanque Verband</a></p>
            <p><a target="_blank" href="https://www.ffpjp.org/">Französischer Petanque Verband</a></p>
            <p><a target="_blank" href="http://www.fipjp.org/">F.I.P.J.P. - Fédération Internationale de Pétanque et Jeu Provençal</a></p>

            <h2>Verband Regional</h2>
        
            <p><a target="_blank"href="http://www.Rhein-Neckar-Liga.de/">Ligaregion Rhein-Neckar</a><br>
            <a target="_blank"href="https://www.mittelbaden-boule.de/">Ligaregion Mittelbaden</a><br>
            <a target="_blank"href="http://bouleclub-stuttgart.de/index.php?id=567">Nord-Württemberg</a><br>
            <a target="_blank"href="https://petanque-bw.de/liga-pokal/rl-nord-2-2-2-3-2/">Schwarzwald-Oberrhein</a></p>

            <h2>Turnierkalender</h2>

            <p><a target="_blank"href="http://www.petanque-bw.de/index.php?id=1427">BBPV-Turnierkalender</a><br>
            <a target="_blank"href="https://petanque-aktuell.de/termine/">Pétanque aktuell Terminkalender</a></p>
    
        </div>

        <div id="linkspalte2">

            <h2>Vereine</h2>

            <p><a target="_blank"href="http://www.bc-ettenheim.de">Boule Club Ettenheim</a><br>
            <a target="_blank"href="https://djk-feldkirch.de/">DJK-Bouler Feldkirch</a><br>
            <a target="_blank"href="http://www.le-cochonnet.de/">Le Cochonnet Schopfheim</a><br>
            <a target="_blank"href="http://www.boule-march.de">Boule Petanque March</a><br>
            <a target="_blank"href="http://www.bouleclub-weisweil.de">Boule Club Weisweil</a><br>
            <a target="_blank"href="https://www.alemannia-zaehringen.de/boule/">Boule Zähringen</a><br>
            <a target="_blank"href="https://www.naturbad-sulz.de/boule/">Boule im Naturbad Sulz</a><br>
            <a target="_blank"href="https://www.boule95.de/">Boule 95 Denzlingen</a><br>
            <a target="_blank"href="http://www.latschariboule.de/index.php">Latschari Boule Gutach</a><br>
            <a target="_blank"href="http://www.petanqueverein-kirchzarten.de">Petanque Verein Kirchzarten</a><br>
            <a target="_blank"href="http://www.ft1844-freiburg.de/petanque">FT 1844 Freiburg</a><br>
            <a target="_blank"href="http://www.boulefreunde-rheinhausen-2010.de">Boulefreunde-Rheinhausen</a><br>
            <a target="_blank"href="http://www.boule13waldkirch.de/">Boule 13 Waldkirch e.V.</a></p>

        </div>
        
        <div id="linkspalte3">

            <h2>Boule-Spieler</h2>

            <p><a target="_blank"href="http://www.boulistenaute.com/actualite-joueurs-petanque-portrait-20-rocher-dylan-benji-4760">Spieler Dylan Rocher</a><br>
            <a target="_blank"href="http://www.quintaisport.fr/">Spieler Phillippe Quintais</a><br>
            <a target="_blank"href="http://bruno.leboursicaud.free.fr/">Spieler Bruno Leboursicaud</a></p>

            <h2>Boulekurse</h2>

            <p><a target="_blank"href="http://www.boulekurse.de">Training Sönke Backens</a></p>


            <h2>Kugelverkäufer</h2>

            <p><a target="_blank"href="https://www.bouleundwein.de/">Boule und Wein Frank Höfer</a><br>
            <a target="_blank"href="http://www.boule-petanque.de">Boule-Maus</a><br>
            <a target="_blank"href="http://www.boulesmatz.de/">Boules Matz</a><br>
            <a target="_blank"href="http://www.boule-partner.de">Boule Partner</a><br>
            <a target="_blank"href="http://www.bouleaufer.de/">Boule au fer</a><br>
            <a target="_blank"href="http://www.boule.ch/">Boule.ch </a><br>
            <a target="_blank"href="http://www.bouli.de/">Bouli.de</a></p>

        </div>
        
        <div id="linkspalte4">

            <h2>Literatur / Video</h2>

            <p><a target="_blank"href="http://www.buchhandlunghenzler.de/bhneu/literaturliste_boule/literaturliste.htm">Literaturliste Boule der<BR>Buchhandlung Henzler</a><br>
            <a target="_blank"href="http://www.aufershop.de/Essay.php">Essays Boule au fer</a><br>
            <a target="_blank"href="http://www.videos-petanque.fr/top_videos.html">Video P&eacute;tanque</a><br>
            <a target="_blank"href="http://citesport.com/fr/petanque/programme-tv.html">Citesport Pétanque TV</a></p>

            <h2>Kugelhersteller</h2>

            <p><a target="_blank"href="http://www.obut.com/">Hersteller Obut</a><br>
            <a target="_blank"href="http://www.boules-jb.com/">Hersteller JB</a><br>
            <a target="_blank"href="http://www.laboulenoire.com/">Hersteller Boule Noir</a><br>
            <a target="_blank"href="http://www.laboulebleue.fr/">Hersteller Boule Bleu</a><br>
            <a target="_blank"href="http://www.labouleintegrale.com/">Hersteller Integrale</a><br>
            <a target="_blank"href="http://www.ms-petanque.com/">Hersteller MS</a><br>
            <a target="_blank"href="http://www.bocceunibloc.it/">Hersteller Unibloc</a><br>
            <a target="_blank"href="http://www.indoor-boules.de/">Hersteller Indoor Boules</a></p>

        </div>
            
    </div>

            <?php include('inc_fusszeile.php') ?>                

</body>
</html>

