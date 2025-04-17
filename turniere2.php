<!DOCTYPE html>
<html lang="de">
<head>
    <title>Sommercup</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.0/dist/fancybox.css">

    <?php include ('header.php'); ?>
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

    <teaser id="teaser">
        <img src="images/TeasTurnier.jpg" title="Das Boulodrome" alt="Das Boulodrome" style="margin-bottom: 8.5em;">
    </teaser>

    <div class="container-fluid">

        <main>

        <div class="row">

            <h2 class=" mb-4 ps-0 pe-0">Der wöchentliche Sommercup am Samstag (Turnierserie mit Rangliste)</h2>

            <div class="col-12 col-sm-12 ps-0 pe-0">

                <div class="galerie-foto">
                <a data-fancybox="gallery" href="images/WebSommercup2025big.jpg">
                <img id="rechts-sommercup" src="images/WebSommercup2025medium.jpg" alt="Sommercup 2025" 
                title="Sommercup 2025" /></a></div>

                <p>Der Sommercup des Badischen Pétanque-Vereins läuft vom 12. April bis 25. Oktober 2025 als 
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
                <a target="_blank"href="images/Samstagspiele_Tag_20_20241019_Final.pdf">Abschluss-Rangliste 2024</a>,
                <a target="_blank"href="images/Samstagspiele_Tag_22_20231015.pdf">2023</a>,
                <a target="_blank"href="images/SC_Rangliste_20221015_Tag_25.pdf">2022</a> und
                <a target="_blank"href="images/Samstagspiele2018.pdf">2018</a> einsehen.</p>

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

