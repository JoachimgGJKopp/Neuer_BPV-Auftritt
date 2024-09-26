<!DOCTYPE html>
<html lang="de">
<head>
    <title>Ergebnis Frühlingsturnier 2023</title>
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
        <img src="Bilderwand/images/TeasFrueh2023.jpg" title="Frühlingsturnier 2023" alt="Frühlingsturnier 2023">
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

            <h2>Ergebnis Frühlingsturnier 2023 (Doublette Schweizer System, 5 Runden)</h2>

            <a href="Bilderwand/images/Fruehling2023/ErgebnisFrueh2023.pdf">Ergebnisse Frühlingsturnier 2023</a>

            <h2>Bericht</h2>

            <p>Frühlingsturnier im Seepark in Freiburg am 2. April 2023</p>

            <p>Am Sonntag, 2. April war schlechtes Wetter angekündigt. Deshalb trauten sich nur 
            38 Doubletten in den Seepark. Jedoch der April macht was er will: So regnete es erst 
            am späten Nachmittag in der 5. und letzten Runde des Schweizer Systems. Das ganze 
            Turnier auf Zeit lief zügig ab und endete um 18 Uhr.</p>

            <p><strong>Die Turniersieger sind:</strong></p>
            <p>1. Christophe Riff und Clément Melnikoff,<br>
            2. Denis Margathe und Cedric Silvestre,<br>
            3. Dieter Zimmer und Peter Frank,<br>
            4. David Freudenberg und Niclas Zimmer,<br>
            5. Fabrice und David Roy,<br>
            6. Nico und Felix Oeschger,<br>
            7. Harald Oeschger und Richard Aubert,<br>	
            8. Karlheinz Makowsky und Pedro Martens.</p>

            <p>Die 3. Mannschaft des BPV leistete den Service zur Zufriedenheit unserer Gäste 
            und stellte die Turnierleiter Helmut Köttner und Joachim Kopp.</p>
                
        </div>

    </div>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

