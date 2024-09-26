<!DOCTYPE html>
<html lang="de">
<head>
    <title>Ergebnis Herbst 2024</title>
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
        <img src="Bilderwand/images/TeasHerbst2024.jpg" title="Das Boulodrome" alt="Das Boulodrome" style="margin-bottom: 0em;">
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

            <h2>Ergebnis Herbstturnier 2024<br>Doublette Schweizer System 4 Runden mit Finals A und B</h2>

	        <p><strong>A-Turnier:</strong></p>

			<p>1. Platz: Heiner Brecht mit Joachim Storl,<br>
			2. Platz: Bruno Lesoeur mit Bernard Schwartz,<br>
			3. Platz: Oliver Anders mit Rita Kurz sowie Clement Melnikoff mit Jessica Schultz.</p>

			<p><strong>B-Turnier:</strong></p>

			<p>1. Platz: Christophe Riff und Sebastien Tromeur,<br>
			2. Platz: Fa Somsringam mit Gerd Helmerich aus Münster NRW,<br>
			3. Platz: Christian Fakler mit Andrej Stark sowie Kai und Abdel aus Villingen-Schwenningen.</p>

            <h2>Bericht</h2>

            <p>Bei kühlem aber trockenem Wetter kamen am 14. September 28 Doubletten zu unserem Herbstturnier in den Seepark.</p>

			<p>Es wurden 4 Spiele im Schweizer System gespielt. Anschliessend spielten die ersten vier Doubletten Halbfinale und Finale im A-Turnier. 
            Parallel dazu spielten die zweiten vier Doubletten Halbfinale und Finale im B-Turnier.</p>

			<p>Die Turnierleitung und Bewirtung wurde durch die zweite Mannschaft sichergestellt. Die Mannschaft wurde durch zahlreiche Kuchenspenden unterstützt.</p>
			<p>Wir bedanken uns bei der zweiten Mannschaft für die souveräne Durchführung des Turniers. Auch möchten wir allen Kuchenspenderinnen ein herzliches Dankeschön sagen.</p>

						
        </div>

    </div>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

