<!DOCTYPE html>
<html lang="de">
<head>
    <title>Index</title>
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
        <img src="images/TeasHome.jpg" title="Frühling auf dem Platz" alt="Frühling auf dem Platz">
    </teaser>

    <Turnierplan id="turnierplan">
        <div><a href="images/Turnierplan2024.pdf"><img src="images/WebTurnierplan2024klein.gif"
        alt="Turnierplan 2024 des BPV-Freiburg" onmouseover="src='images/WebTurnierplan2024kleinA.gif'" 
        onmouseout="src='images/WebTurnierplan2024klein.gif'" /></a></div>
    </Turnierplan>

    <Sparkasse id="sparkasse">   
        <div><a target="_blank" href="http://www.sparkasse-freiburg.de/"><img src="images/Logospark.jpg" alt="Logo der Sparkasse Freiburg" title="Logo der Sparkasse Freiburg" /></a></div>
    </Sparkasse>

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

    <main style="padding-top: 1em;">

        <div id="Inhalt1">

			<h3>Der Sommercup läuft</h3>

			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebSommercup2024big.jpg"><img 
			src="images/WebSommercup2024big.jpg" alt="Sommercup 2024"
			title="Sommercup 2024" /></a></div>

			<p>Am Samstag, den 12. Oktober 2024 spielen wir im Seepark ab 13.30
			Uhr Doublette Supermêlée. Das Spiel ist lizenzfrei und jedermann ist herzlich
			eingeladen mit uns mitzuspielen.</p>

			<p>Der Einsatz pro Spieler beträgt 5 EUR, davon gehen 1,50 EUR in den
			Preisgeldtopf für das Abschlussturnier und die Endrangliste. Cash pro Turnier und 
			Spieler sind 3,50 EUR.</p>

			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebSommercup20241005big.jpg"><img 
			src="images/WebSommercup20241005big.jpg" alt="Sommercup 2024"
			title="Sommercup 2024" /></a></div>

			<p>Am 5. Oktober kamen 26 Spieler und Spielerinnen in den Seepark bei schönstem Herbstwetter. Es war sonnig und warm bei etwas kühlem Wind.</p>

			<p><strong>Die Sieger sind:</strong></p>
			<p>1. Salvadore Fernandez und Harald Mayer,<br>
			2. Peter Bischler und Philipp Wienker,<br>
			3. Marion Häuptle und Mick Löffler,<br>
			4. Wolfgang Behr und Harry Maugeais.</p>

			<p>Hier die <a target="_blank"href="images/Samstagspiele_Tag_18_20241005.pdf">Rangliste</a>
			vom 5. Oktober 2024.</p>

	    </div>

        <div id="Inhalt2">

			<h3>Platzbeleuchtung wieder instand gesetzt</h3>

			<p>Zu Beginn der kürzer werdendenTage fiel unsere Platzbeleuchtung  
			aus. Der Vorstand beschloss die Verkabelung der Beleuchtungsmasten 
			zu erneuern mit Hilfe der Stadt und des Badischen 
			Sportbundes. Die Projektleitung übernahm Hans Koch. Hier sein 
			Bericht:</p>
			
			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebLicht2024big.jpg"><img 
			src="images/WebLicht2024big.jpg" alt="Reparatur Beleuchtung 2024"
			title="Reparatur Beleuchtung 2024" /></a></div>

			<p><i>Am Dienstag 17.09.24 begann der Helfertrupp mit Bernd 
			Birnbreier, Hermann Klausmann und Hans Koch mit den Vorarbeiten, denn 
			am Mittwoch 18.09.24 kam schon die Fa. Martin Wetzler mit dem Bagger 
			angerollt um mit dem Aushub von ca. 190 lfd. m zu beginnen.</p>		
			
			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebLicht2024big1.jpg"><img 
			src="images/WebLicht2024big1.jpg" alt="Reparatur Beleuchtung 2024"
			title="Reparatur Beleuchtung 2024" /></a></div>	

			<p>Am Freitag wurden die restlichen ca. 150 m Kabel verlegt. Somit 
			konnte die Fa. Wetzler, die mit Verstärkung antrat, alle Gräben 
			wieder zuschütten. Das war bei dem widrigen Wetter eine absolute 
			Meisterleistung, denn nebenher haben sie auch noch zwei Wassergräben 
			gezogen.</i></p>
						


        </div>

        <div id="Inhalt3" style="margin-top: 2em;">

			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebLicht2024big2.jpg"><img 
			src="images/WebLicht2024big2.jpg" alt="Reparatur Beleuchtung 2024"
			title="Reparatur Beleuchtung 2024" /></a></div>	

			<p><i>Am Dienstag werden sie dann das restliche Abraummaterial 
			abholen, etwas Humus mitbringen und wieder einsäen. Dem Sommercup 
			steht demnach nichts im Wege.</p>
			
			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebLicht2024big4.jpg"><img 
			src="images/WebLicht2024big4.jpg" alt="Reparatur Beleuchtung 2024"
			title="Reparatur Beleuchtung 2024" /></a></div>	


			
			<p>Am Montag 30.09.24 und Dienstag 01.10.24 wird dann der Helfertrupp 
			mit dem Elektriker die Kabel an den Sicherungskasten anschließen. Das 
			alles im Laufe einer Woche.</i></p>
			
			<p>Der Vorstand dankt dem Projektleiter Hans Koch und allen Helfern 
			für ihre erfolgreiche Arbeit und ihren großen Einsatz.</p>

			<h3>Jubiläumsturnier<br>am 1. November</h3>

			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebJubi2024big.jpg"><img 
			src="images/WebJubi2024big.jpg" alt="Jubiläumsturnier 2024"
			title="Jubiläumsturnier 2024" /></a></div>	

		</div>

    </main>

    <?php include('inc_fusszeile.php') ?>
    
</body>

</html>