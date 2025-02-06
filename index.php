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
		<hr style="border: 0.5px solid lightgray; margin: 0em;">
	</div>

	<div id="turnierplan"><a href="images/Turnierplan2024.pdf"><img src="images/WebTurnierplan2024klein.gif"
	alt="Turnierplan 2024 des BPV-Freiburg" onmouseover="src='images/WebTurnierplan2024kleinA.gif'" 
	onmouseout="src='images/WebTurnierplan2024klein.gif'" /></a></div>

	<main>

		<div id="Inhalt1">

			<h3>Max Blechschmidt verstorben</h3>

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/MaxBlechschmidt.jpg">
			<img src="images/MaxBlechschmidt.jpg" alt="Max Blechschmidt" 
			title="Max Blechschmidt" /></a></div>

			<p style="font-size: x-small; margin-top: -0.2em">Max 2014 bei den Bad. Meisterschaften</p>

			<p>Leider ist Max Blechschmidt mit 77 Jahren verstorben.
			Er war seit 1989 Mitglied in unserem Verein und hat über
			lange Jahre die „frühere Dritte Mannschaft“ sowohl beim Spiel 
			als auch bei den Veranstaltungen mit seinem schwäbischen
			Frohsinn tatkräftig unterstützt.</p>
			<p>Max, wir werden dich vermissen !</p>


			<h3>Der Eschenahornbaum muss weichen</h3>

			<p>Der von Weißfäule befallene Baum stand direkt am Zaun beim Rundweg</p>

		</div>

		<div id="Inhalt2">

			<p> um den See. Aufgrund seiner Krankheit kennzeichnete die Stadt den Baum zur Fällung.</p>

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebEsche1big.jpg">
			<img src="images/WebEsche1big.jpg" alt="Baumfällung" 
			title="Baumfällung" /></a></div>

			<p>Nachdem wir von der Stadt die Bewilligung zur Fällung 
			des kranken Eschenahornbaums auf der Seeseite unseres Geländes erhalten haben, 
			haben wir am Dienstag, den 4. Februar mit der professionellen Hilfe von Ewald den Baum gefällt.</p>

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebEsche2big.jpg">
			<img src="images/WebEsche2big.jpg" alt="Baumfällung" 
			title="Baumfällung" /></a></div>

			<p>Bernd Birnbreier, Hans-Peter Böcherer, Christian Fakler und Nik Heyder haben dabei geholfen.</p> 

		</div>

		<div id="Inhalt3">

			<p>Ein glücklicher Zufall war, dass genau zum richtigen Zeitpunkt ein Baggerfahrer 
			vor Ort war und mit der Baggerschaufel vom Fussweg aus, den Sturz des Baumes 
			in die richtige Richtung unterstützt hat.</p> 

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebEsche3big.jpg">
			<img src="images/WebEsche3big.jpg" alt="Baumfällung" 
			title="Baumfällung" /></a></div>
			
			<p>Anschliessend hat Ewald den Baum in brennholzgerechte Stücke gesägt.</p> 

			<p>Paul und Fabrice haben uns bei den 
			Aufräumarbeiten geholfen, so dass die Arbeit innerhalb von drei Stunden erledigt war.</p>

			<p>Herzlichen Dank an Ewald, dank ihm konnte der Verein mindestens 1500 € einsparen. <i>nh</i></p>

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebEsche4big.jpg">
			<img src="images/WebEsche4big.jpg" alt="Baumfällung" 
			title="Baumfällung" /></a></div>


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