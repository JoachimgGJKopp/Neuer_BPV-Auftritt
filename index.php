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

			<p style="color:red;">Am Samstag, den 14. September findet der Sommercup nicht statt, weil das Herbstturnier läuft.</p>

			<p>Am Samstag, den 21. September 2024 spielen wir im Seepark ab 13.30
			Uhr Doublette Formée. Das Spiel ist lizenzfrei und jedermann ist herzlich
			eingeladen mit uns mitzuspielen.</p>

			<p>Der Einsatz pro Spieler beträgt 5 EUR, davon gehen 1,50 EUR in den
			Preisgeldtopf für das Abschlussturnier und die Endrangliste. Cash pro Turnier und 
			Spieler sind 3,50 EUR.</p>

			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebSommercup20240907big.jpg"><img 
			src="images/WebSommercup20240907big.jpg" alt="Sommercup 2024"
			title="Sommercup 2024" /></a></div>

			<p>Am 7. September haben bei schönstem immer noch warmen Boulewetter bescheidene 17 Leute den Weg in den Seepark gefunden zur Doublette Supermêlée.</p>

			<p><strong>Die Sieger sind:</strong><br>
			1. Rita Kurz,<br>
			2. Michael Löffler,<br>
			3. Nik Heyder,<br>
			4. Uwe Kersten.</p>

			<p>Hier die <a target="_blank"href="images/Samstagspiele_Tag_15_20240907.pdf">Rangliste</a>
			vom 7. September.</p>


        </div>

        <div id="Inhalt2">

			<h3>Herbstturnier</h3>

			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebHerbst2024big1.jpg"><img 
			src="images/WebHerbst2024big1.jpg" alt="Herbstturnier 2024"
			title="Herbstturnier 2024" /></a></div>

			<p>Bei kühlem aber trockenem Wetter kamen am 14. September 28 Doubletten zu unserem Herbstturnier in den Seepark.</p>

			<p>Es wurden 4 Spiele im Schweizer System gespielt.</p>
			<p>Anschliessend spielten die ersten vier Doubletten Halbfinale und Finale im A-Turnier.</p>
			<p>Parallel dazu spielten die zweiten vier Doubletten Halbfinale und Finale im B-Turnier.</p>

			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebHerbst2024big2.jpg"><img 
			src="images/WebHerbst2024big2.jpg" alt="Herbstturnier 2024"
			title="Herbstturnier 2024" /></a></div>

			<p>Die Turnierleitung und Bewirtung wurde durch die zweite Mannschaft sichergestellt.</p> 
			<p>Die Mannschaft wurde durch zahlreiche Kuchenspenden unterstützt.</p>
			<p>Wir bedanken uns bei der zweiten Mannschaft für die souveräne Durchführung des Turniers.</p>
			<p>Auch möchten wir allen Kuchenspenderinnen ein herzliches Dankeschön sagen.</p>

        </div>

        <div id="Inhalt3" style="margin-top: 3.5em";>

			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebHerbst2024Abig.jpg"><img 
			src="images/WebHerbst2024Abig.jpg" alt="Herbstturnier 2024"
			title="Herbstturnier 2024" /></a></div>


			<p><strong>A-Turnier:</strong></p>

			<p>1. Platz: Heiner Brecht mit Joachim Storl,<br>
			2. Platz: Bruno Lesoeur mit Bernard Schwartz,<br>
			3. Platz: Oliver Anders mit Rita Kurz sowie Clement Melnikoff mit Jessica Schultz.</p>

			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebHerbst2024Bbig.jpg"><img 
			src="images/WebHerbst2024Bbig.jpg" alt="Herbstturnier 2024"
			title="Herbstturnier 2024" /></a></div>

			<p><strong>B-Turnier:</strong></p>

			<p>1. Platz: Christophe Riff und Sebastien Tromeur,<br>
			2. Platz: Fa Somsringam mit Gerd Helmerich aus Münster NRW,<br>
			3. Platz: Christian Fakler mit Andrej Stark sowie Kai und Abdel aus Villingen-Schwenningen.</p>
						
			<div class="galerie-foto"><a rel="lightbox"
			href="images/WebJubi2024big.jpg"><img 
			src="images/WebJubi2024big.jpg" alt="Jubiläumsturnier 2024"
			title="Jubiläumsturnier 2024" /></a></div>

		</div>

    </main>

    <?php include('inc_fusszeile.php') ?>
    
</body>

</html>