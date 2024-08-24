<!DOCTYPE html>
<html lang="de">
<head>
    <title>Dokumente</title>
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

    <teaser>
        <img src="images/Kontakt.jpg" title="Dokumente" alt="Dokumente" style="margin-bottom: 1em;">
        <h2>Dokumente</h2>
    </teaser>

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

    <div id="dokumente">

        <div id="dokumente-plakate">
    
            <table>

                <thead>
                    <tr><td style="color: rgb(3, 75, 3);">BPV-Plakate</td></tr>
                </thead>

                <tbody>

                    <ul>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Plakat Frühlingsturnier 2024</td><td><a href="dokumente/Fruehling2024.jpg"><img src="images/jpgLogo.jpg"alt="jpg download" title="jpg download"/></a></td></tr>
                        <tr><td>Plakat Nocturne 2024</td><td><a href="dokumente/Nocturne2024.jpg"><img src="images/jpgLogo.jpg"alt="jpg download" title="jpg download"/></a></td></tr>
                        <tr><td>Plakat Herbstturnier 2024</td><td><a href="dokumente/Herbst2024.jpg"><img src="images/jpgLogo.jpg"alt="jpg download" title="jpg download"/></a></td></tr>
                        <tr><td>Plakat Jubiläumsturnier 2024</td><td><a href="dokumente/Jubi2024.jpg"><img src="images/jpgLogo.jpg"alt="jpg download" title="jpg download"/></a></td></tr>
                        <tr><td>Plakat Tauschturnier 2024</td><td><a href="dokumente/Tausch2024.jpg"><img src="images/jpgLogo.jpg"alt="jpg download" title="jpg download"/></a></td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Plakat Sommercup 2024</td><td><a href="dokumente/Sommercup2024.jpg"><img src="images/jpgLogo.jpg"alt="jpg download" title="jpg download"/></a></td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Turnierplan 2024</td><td><a href="dokumente/Turnierplan2024.pdf"><img src="images/pdf.gif"alt="pdf download" title="pdf download"/></a></td></tr>
                    </ul>

                </tbody>

            </table>
            
        </div>
        
        <div id="dokumente-material";>
    
            <table>

                <thead>
                    <tr><td style="color: rgb(3, 75, 3);">Materialien</td></tr>
                </thead>

                <tbody>

                    <ul>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Reglement DPV</td><td><a href="https://deutscher-petanque-verband.de/dpv-regelwerk/"><img src="images/pdf.gif"alt="pdf download" title="pdf download"/></a></td></tr>
                        <tr><td>Sportordnung Landesverband</td><td><a href="https://petanque-bw.de/service/dokumente/"><img src="images/pdf.gif"alt="pdf download" title="pdf download"/></a></td></tr>
                        <tr><td>Ligarichtlinie Landesverband</td><td><a href="https://petanque-bw.de/service/dokumente/"><img src="images/pdf.gif"alt="pdf download" title="pdf download"/></a></td></tr>
                        <tr><td>Mitgliedsantrag im BPV</td><td><a href="dokumente/MAntragEinwillBeitragso2022.pdf"><img src="images/pdf.gif"alt="pdf download" title="pdf download"/></a></td></tr>
                        <tr><td>Lizenzantrag Landesverband</td><td><a href="https://petanque-bw.de/service/formulare/"><img src="images/pdf.gif"alt="pdf download" title="pdf download"/></a></td></tr>
                        <tr><td>Tagesersatzlizenz DPV</td><td><a href="https://petanque-bw.de/service/formulare/"><img src="images/pdf.gif"alt="pdf download" title="pdf download"/></a></td></tr>
                        <tr><td>Fahrtkostenzuschuss DM</td><td><a href="images/Fahrtkostenzuschuss.pdf" download><img src="images/pdf.gif"alt="pdf download" title="pdf download"/></a></td></tr>
                        <tr><td>Beitragsordnung</td><td><a href="dokumente/Beitragsordnung_2.1.pdf"><img src="images/pdf.gif"alt="pdf download" title="pdf download"/></a></td></tr>
                        <tr><td>Bewirtungsordnung</td><td><a href="dokumente/Bewirtungsordnung.pdf"><img src="images/pdf.gif"alt="pdf download" title="pdf download"/></a></td></tr>
                        <tr><td>Datenschutzhinweis</td><td><a href="dokumente/Datenschutzhinweis 2022.pdf"><img src="images/pdf.gif"alt="pdf download" title="pdf download"/></a></td></tr>
                    </ul>

                </tbody>

            </table>

        </div>

    </div>
                <?php include('inc_fusszeile.php') ?>   

</body>
</html>

