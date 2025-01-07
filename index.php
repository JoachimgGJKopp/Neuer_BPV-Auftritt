<!DOCTYPE html>
<html lang="de">
<head>
    <title>Index</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.0/dist/fancybox.css">
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
        <img src="images/TeasHome1.png" title="Frühling auf dem Platz" alt="Frühling auf dem Platz">
    </teaser>

	<div id="turnierplan"><a href="images/Turnierplan2024.pdf"><img src="images/WebTurnierplan2024klein.gif"
	alt="Turnierplan 2024 des BPV-Freiburg" onmouseover="src='images/WebTurnierplan2024kleinA.gif'" 
	onmouseout="src='images/WebTurnierplan2024klein.gif'" /></a></div>

	<main>

		<div id="Inhalt1">

		<div class="galerie-foto">

			<h3>The same procedure as every year</h3>

			<a data-fancybox="gallery" href="images/WebTausch2024big6.jpg">
			<img src="images/WebTausch2024big6.jpg" alt="Tauschturnier 2024" 
			title="Tauschturnier 2024" /></a></div>

			<p>Am zweiten Weihnachtsfeiertag kamen trotz ordentlicher Kälte 28 Spieler 
			und Spielerinnen zum jährlichen Tauschturnier. Auch Spieler von anderen Vereinen waren anwesend. 
			Das Wetter war neblig und klamm mit kurzen Nebellichtungen.</p>

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebTausch2024big0.jpg">
			<img src="images/WebTausch2024big0.jpg" alt="Tauschturnier 2024" 
			title="Tauschturnier 2024" /></a></div>
			
			<p>Der Gabentisch war reich und gut bestückt, er konnte bei den Spielern und Spielerinnen 
			Wünsche wecken. Auch Kuchen wurde gespendet.</p>

		</div>

		<div id="Inhalt2">

			<p>Um 14.30 Uhr begann das Turnier über 3 Runden Schweizer System auf Zeit Doublette. Die 
			Spieler und Spielerinnen nahmen den Wettbewerb locker; die Stimmung war ausgelassen.</p>

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebTausch2024big1.jpg">
			<img src="images/WebTausch2024big1.jpg" alt="Tauschturnier 2024" 
			title="Tauschturnier 2024" /></a></div>

			<p>Zwischen den Runden war Zeit zu plaudern und den Glühwein oder den Kaffee zu genießen.</p> 

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebTausch2024big2.jpg">
			<img src="images/WebTausch2024big2.jpg" alt="Tauschturnier 2024" 
			title="Tauschturnier 2024" /></a></div>

			<p>Ungefähr um 17.30 Uhr endete das Turnier und ging über in die Preisverteilung. 
			Die Spieler wurden nach Platzierung an den Gabentisch gerufen um ihr Geschenk zu empfangen.</p> 

		</div>

		<div id="Inhalt3">

			<p>Die Siegerin nahm zuerst ein Präsent, dann ging es nach Rangliste abwärts.</p>

			<p>Nach der Gabenverteilung gab es Gulaschsuppe und Würstchen mit Glühwein und den 
			üblichen Getränken.</p>

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebTausch2024big3.jpg">
			<img src="images/WebTausch2024big3.jpg" alt="Tauschturnier 2024" 
			title="Tauschturnier 2024" /></a></div>

			<p>Das Turnier leitete Christian Fakler souverän. Ihm sei gedankt.</p>

			<p>Den Service leisteten zu unserer aller Zufriedenheit wie immer beim Tauschturnier 
			Rita Kurz und Hansjörg Grund. Auch ihnen gilt unser aller Dank.</p>

			<div class="galerie-foto">
			<a data-fancybox="gallery" href="images/WebTausch2024big4.jpg">
			<img src="images/WebTausch2024big4.jpg" alt="Tauschturnier 2024" 
			title="Tauschturnier 2024" /></a></div>

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