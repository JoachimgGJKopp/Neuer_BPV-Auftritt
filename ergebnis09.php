<!DOCTYPE html>
<html lang="de">
<head>
    <title>Ergebnis Herbstturnier 2023</title>
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
        <img src="Bilderwand/images/TeasHerbst2023.jpg" title="Herbst im Seepark" alt="Herbst im Seepark">
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

 
            <h2>Ergebnis Herbstturnier 2023<br>Triplette Formée, 5 Runden Schweizer System + Finale, 24 Tripletten</h2>

            <p>Hier das <a target="_blank"href="Bilderwand/images/Herbst2023/ErgebnisHerbst2023.pdf">Ergebnis</a> des Turniers</p>

            <p>1. Peter Frank, Peter Martin, Andreas Scholz;<br>
            2. Didier Kauffmann, Christophe Riff, Clement Melnikoff;<br>
            3. Anthony Sense, Christophe Romann, Gerald Neuhaus;<br> 
            4. Dieter Zimmer, Niclas Zimmer, Frank Maurer;<br>
            5. Salvadore Fernandez, Alexander Ehret, Heiner Brecht;<br> 
            6. Richard Tricoci, David Allgeyer, Regina Weißenberger.</p>

            <p><strong>Ergebnis Finale unter Flutlicht</strong></p>

            <p>1. Didier Kauffmann, Christophe Riff, Clement Melnikoff;<br>
            2. Peter Frank, Peter Martin, Andreas Scholz.</p>
                    
            <h2>Bericht</h2>

            <p>Am Sonntag, den 1. Oktober 2023 lud der BPV zum jährlichen Herbstturnier. 
            Der Himmel war strahlend blau und die Temperatur noch warm. Es ließen sich 
            jedoch nur 24 Tripletten in den Seepark locken.</p>

            <p>Angekündigt und durchgeführt wurden 5 Runden auf Zeit nach Schweizer System 
            mit anschließendem Finale. Das Turnier begann um ca. 10 Uhr und endete gegen 
            19 Uhr inklusiv einer Mittagspause. Es wurden  Gegrilltes mit Pommes und 
            diverse Salate angeboten. Auch bot eine Kuchentheke Kaffee an. Ansonsten 
            gab es die üblichen Getränke.</p>

            <p>Der Turnierverlauf bot über 5 Runden spannende Begegnungen bis hin zu einem 
            Finale der Extraklasse in welchem Spielzüge vom Feinsten gezeigt wurden.</p>

            <p>Das Turnier leitete Andreas Herrmann.</p>

            <p>Der Verein dankt ganz herzlich seiner 2. Mannschaft, Petra und Regina für ihre 
            Arbeit beim Aufbau und im Service des Herbstturniers.</p>
                    
        </div>

    </div>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

