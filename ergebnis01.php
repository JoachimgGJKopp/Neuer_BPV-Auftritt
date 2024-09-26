<!DOCTYPE html>
<html lang="de">
<head>
    <title>Ergebnis Frühlingsturnier 2019</title>
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
        <img src="Bilderwand/images/TeasFrueh2019.jpg" title="Frühlingsturnier 2019" alt="Frühlingsturnier 2019">
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

            <h2>Ergebnis Frühlingsturnier 2019 (Doublette Formée, ACB k.o.)</h2>

            <a href="Bilderwand/images/Fruehling2019/BBPV-RLT-190324-Fruehlingsturnier-Freiburg-Ergebnis-Webseite.pdf">  Ergebnisse Frühlingsturnier 2019</a>

            <h2>Bericht</h2>

            <p>Am Sonntag, den 24. März strömten 86 Doubletten in den Seepark. Der Grund 
            hierfür war wohl das angesagte Kaiserwetter, das uns beinahe einen Sommertag 
            bescherte. Das Ranglisten-Turnier wurde im Modus ACB k.o. gespielt, wobei noch 
            ein D-Turnier ohne Wertung angehängt wurde.</p>

	        <p>Schiedsrichter war Ernesto del Giotto, BPV Freiburg, dem wir für seinen Einsatz 
            danken. Das Turnier leiteten Hermann Klausmann und Joachim Kopp.</p>

	        <p>Besonders danken wir Evi, beide Hans, Jean-Louis, Karl, Lupo und Mensur, die 
            den Service leisteten.</p>

        </div>

    </div>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

