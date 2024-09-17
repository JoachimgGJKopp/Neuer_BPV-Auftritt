<!DOCTYPE html>
<html lang="de">
<head>
    <title>Sommercup</title>
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
        <img src="images/TeasTurnier.jpg" title="Das Boulodrome" alt="Das Boulodrome" style="margin-bottom: 10em;">
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

    <main>

        <div id="sommercup">

            <h2>Der w&ouml;chentliche Sommercup am Samstag (Turnierserie mit Rangliste)</h2>

	        <div class="galerie-foto"><a rel="lightbox"href="images/WebSommercup2024big.jpg"><img id="rechts-sommercup" src="images/WebSommercup2024medium.jpg" alt="Plakat Sommercup 2024" title="Plakat Sommercup 2024" /></a></div>

            <p>Der Sommercup des Badischen Pétanque-Vereins läuft vom 4. Mai bis 26. Oktober 2024 als 
            wöchentliches Samstag Nachmittag Turnier mit Einschreibeschluss um 13.30 Uhr. Die 
            Mindest-Teilnehmerzahl sind 16 Spieler. Bei weniger als 16 Spielern erhält jeder Anwesende 
            einen Ranglistenpunkt. Am letzten Spieltag des Sommercup wird ein Abschlussturnier gespielt, 
            zu dem der Verein ein zusätzliches Preisgeld von 300 Euro stiftet.</p>

            <p>Der Sommercup ist lizenzfrei. Jedermann ist eingeladen mit uns zu spielen. Die Turniere 
            gehen über 4 Runden ohne Finale. Gespielt werden Doublette Super-Mêlée (für jede Spielrunde 
            werden die Spieler einer Mannschaft neu zugelost) oder Formée (nach Schweizer System; im 
            ganzen Turnier bleiben die Mannschaften gleich) im wöchentlichen Wechsel. Dazu kommen drei 
            Samstage, an welchen Tête à Tête gespielt wird. Gewonnen haben die Spieler (8) oder 
            Mannschaften (4) mit den meisten gewonnen Spielen und Punkten.</p> 

            <p>Der Einsatz pro Spieler beträgt 5 Euro, davon geht 1.50 Euro in den Abschlusstopf. 
            Pro Samstag kommen also 3.50 Euro pro Spieler zum Preisgeld.</p>

		    <p>Das Abschlussturnier des Sommercup wird als Doublette Super-Mêlée gespielt. Die Spieler 
            bis zum 8. Platz erhalten zusammen 50 Prozent des Abschlusstopfes. Am Abschlussturnier 
            teilnehmen kann, wer zuvor an 5 Samstagen im Cup gespielt hat.</p>

            <p>Über den ganzen Sommercup wird eine Rangliste geführt. An die ersten 8 Spieler der 
            Rangliste werden am Ende 50 Prozent des Abschlusstopfes ausgeschüttet. Hier können Sie die 
            <a target="_blank"href="images/Samstagspiele_Tag_22_20231015.pdf">Abschluss-Rangliste 2023</a>,
            <a target="_blank"href="images/SC_Rangliste_20221015_Tag_25.pdf">2022</a> und
            <a target="_blank"href="images/Samstagspiele2018.pdf">2018</a> einsehen.</p>

        </div>

    </main>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

