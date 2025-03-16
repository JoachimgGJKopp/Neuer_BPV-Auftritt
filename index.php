<!DOCTYPE html>
<html lang="de">
<head>
    <title>Index</title>

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
        <img src="images/TeasHome.png" title="Frühling auf dem Platz" alt="Frühling auf dem Platz">
    </teaser>

	<div id="werbeBanner">
		<img src="images/Werbebanner1.jpg" title="Werbebanner" alt="Werbebanner">
	</div>

	<div>
		<hr style="border: 0.5px solid darkgray; margin: 0em; margin-bottom: 1em;">
	</div>

	<div id="turnierplan"><a href="dokumente/Turnierplan2025.pdf"><img src="images/WebTurnierplan2025klein.png"
	alt="Turnierplan 2024 des BPV-Freiburg" onmouseover="src='images/WebTurnierplan2025kleinA.png'" 
	onmouseout="src='images/WebTurnierplan2025klein.png'" /></a></div>

	<main>

		<div id="Inhalt1">

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebLexwareOpen2025big.png">
			<img src="images/WebLexwareOpen2025big.png" alt="1. Lexware Open 2025" 
			title="1. Lexware Open 2025" style="margin-bottom: 1em;" /></a></div>

			<h3>Mitgliederversammlung am 27. März 2025</h3>

			<p>Der Vorstand des Badischen Pétanque-Vereins e.V. Freiburg lädt ein zur Mitgliederversammlung am 
			Donnerstag, den 27. März 2025 um 19 Uhr im Gasthaus Mooswaldbierstube, Elsässer Straße 58, 79110 Freiburg.</p>

			<p>Der Vorstand würde sich freuen, wenn viele Mitglieder unserer Einladung folgen und an der
			Versammlung teilnehmen.</p>

			<p style="text-align:right"><i>Der Vorstand</i></p>

			<h3>Das alte Laub entsorgt und den Platz gerichtet</h3>

			<p>Im Spätherbst wurden das ins Boulodrome gefallene Laub und Äste von der Baumfällaktion auf Platz 24 zusammengetragen.</p>

			<p>Das Laub sollte bis zum Frühjahr liegen bleiben für Igel & Co. als Winterquartier.</p>

		</div>

        <div id="Inhalt2">
		
			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebLaubbig1.jpg">
			<img src="images/WebLaubbig1.jpg" alt="Laubaktion 2025" 
			title="Laubaktion 2025" style="margin-bottom: 1em;" /></a></div>

			<p>Mit den 2-stelligen Temperaturen war die Zeit gekommen für die jährliche Laubaktion auf dem Platz. 
			Nik ludt zum 8. März ein zu einem Aktionstag und 12 Leute folgten dem Aufruf.</p>

			<p>Das Wetter spielte auch mit und lieferte herrlichen Sonnenschein mit Frühlingstemperaturen.</p>

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebLaubbig5.jpg">
			<img src="images/WebLaubbig5.jpg" alt="Laubaktion 2025" 
			title="Laubaktion 2025" style="margin-bottom: 1em;" /></a></div>

			<p> In einem gelieferten Container wurden Laub und Äste entsorgt. Nebenbei wurden auch die Plätze 
			hergerichtet, Kies verteilt,</p> 

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebLaubbig2.jpg">
			<img src="images/WebLaubbig2.jpg" alt="Laubaktion 2025" 
			title="Laubaktion 2025" style="margin-bottom: 1em;" /></a></div>

		</div>

        <div id="Inhalt3">

			<p>gerissene Schnüre ersetzt, Wasserablaufkanäle gereinigt und defekte Stühle geflickt.</p>

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebLaubbig3.jpg">
			<img src="images/WebLaubbig3.jpg" alt="Laubaktion 2025" 
			title="Laubaktion 2025" style="margin-bottom: 1em;" /></a></div>
		
			<p>Anschliessend konnten sich die Helferinnen und Helfer wie versprochen mit einem Imbiss stärken.</p>

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebLaubbig4.jpg">
			<img src="images/WebLaubbig4.jpg" alt="Laubaktion 2025" 
			title="Laubaktion 2025" style="margin-bottom: 1em;" /></a></div>
			
			<p>Herzlichen Dank im Namen des gesamten Vorstands an alle die an diesem schönen Frühlingstag 
			mitgeholfen haben. <i>nh</i></p>

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebSommercup2025big.jpg">
			<img src="images/WebSommercup2025big.jpg" alt="Sommercup 2025" 
			title="Sommercup 2025" /></a></div>

		</div>

	</main>

    <?php include('inc_fusszeile.php') ?>

	<noscript>
		JavaScript ist nicht verfügbar oder es ist deaktiviert. <br, />
		Bitte verwenden Sie einen Browser, der JavaScript unterstützt,
		oder aktivieren Sie JavaScript in Ihrem Browser.
	</noscript>

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


</body>

</html>