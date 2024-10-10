<!DOCTYPE html>
<html lang="de">
<head>
    <title>Ergebnis Jubiläumsturnier 2023</title>
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
        <img src="imagefolder/TeasJubi2023.jpg" title="Herbst im Seepark" alt="Herbst im Seepark">
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

    <div>

        <div id="ergebnis">

        <h2>Ergebnis 22. Jubiläumsturnier 2023 (Doublette Formée)</h2>

			<p>Hier die <a target="_blank"href="Bilderwand/images/Jubi2023/ErgJubi2023.pdf">Ergebnisliste</a> als PDF.</p>

            <p><strong>Ergebnis A-Turnier</strong></p>

            <p>1. Christian Bossert, BC Achern, und Philippe Jankowski, TG Laudenbach 1889;<br>
            2. Christophe Dere und Jules Skot, beide PC Gambsheim (F);<br>
            3. Fabian Vonberg, TV 1877 MA-Waldhof, und Matthias Laukart, PC Burgarten-Horb;<br>
            3. Uwe Kersten, VfB Neuffen, und Raymund Mayer, Boule 95 Denzlingen.</p>

            <p><strong>Ergebnis B-Turnier</strong></p>

	    	<p>1. Lukas Hirte und Johannes Hirte, beide BC Stuttgart;<br>
	    	2. Jennifer und Olivier Willmann, beide TG Laudenbach 1889;<br>
	   		3. Maria Hein, TV 1877 MA-Waldhof, und Norman Machauer, TV Brühl 1912;<br>
	    	3. Fabrizio Leopardi, TSV Grünkraut, und Johannes Frick, Terra Libre Ravensburg.</p>

            <p><strong>Ergebnis C-Turnier</strong></p>

            <p>1. Andreas Herrmann, BPV Freiburg, und Dominik Hanser, SG Wiehre Freiburg;<br>
            2. Annika und Thomas Heine, beide BC Eggenstein;<br>
            3. Jutta Schmidt und Wolfgang Behr, beide BPV Freiburg;<br>
            3. Karin Sumser und Harald Mayer, beide LFS Tübingen.</p>

            <p><strong>Ergebnis D-Turnier</strong></p>

            <p>1. Regina Weißenberger, BC Konstanz, und Anjaratiana Rabearisoa, BPV Freiburg;<br>
            2. Joachim Brychy und Philipp Wienker, beide BPV Freiburg;<br>
            3. Natalilia Peskova und Hans-Joachim Novortne, beide TuS Koblenz-Niederberg;<br>
            3. Sabine und Jürgen Stork, Beide BC Vin Rouge Graben-Neudorf.</p>

            <h2>Bericht</h2>

    		<p>Am Mittwoch, den 1. November 2023 spielten im Seepark 85 Doubletten das 
            Jubiläumsturnier Formée. Die deutschen Spieler und Spielerinnen kamen fast 
            alle aus dem Süddeutschen Raum. Traditionell kommen zu diesem Turnier viele 
            französische Équipes.</p>

		    <p>Das Wetter war überwiegend sonnig und etwas kühl. Gegen Abend kam kurz Regen auf.</p>

		    <p>Gegrilltes, Kaffe und Kuchen sowie eine zünftige Gulaschsuppe wurden angeboten 
            neben den üblichen Getränken.</p>

		    <p>Das Turnierniveau war hoch. Besonders beeindruckend waren jugendliche 
            Spielerinnen und Spieler, die ein beachtenswertes Können zeigten. Die Atmosphäre 
            auf dem Platz war angenehm, man sah viele lachende Gesichter.</p>

		    <p>Das Jubiläumsturnier endete gegen 21:30 Uhr mit dem heiß umkämpften C-Turnier 
            (13:12) und die letzten Spieler und Zuschauer verließen den Platz.</p>	

		    <p>Das Turnier leiteten souverän Harry Maugeais und Harry Burger. Schiedsrichter 
            war David da Silva vom BPV Freiburg.</p>

		    <p>Wir danken unserer Ersten Mannschaft für die Turnierorganisation und den 
            Service. Ebenfalls danken wir Ewald für die Gulaschsuppe.<p>
					
        </div>

    </div>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

