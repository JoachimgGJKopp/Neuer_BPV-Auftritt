<!DOCTYPE html>
<html lang="de">
<head>
    <title>Ergebnis Frühling 2024</title>
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
        <img src="imagefolder/TeasFrueh2024.jpg" title="Frühling im Seepark" alt="Frühling im Seepark">
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

        <h2>Ergebnis Frühlingsturnier 2024 (Doublette Schweizer System, 5 Runden)</h2>

        <p><strong>Die Sieger des Frühlingsturniers sind:</strong></p>

        <p>1. Didier Kauffmann und Christophe Riff, beide BPV Freiburg,<br>
        2. David Freudenberg und Dieter Zimmer, beide FT von 1844 Freiburg,<br>					
        3. Karin Sumser und Harald Mayer, beide LFS Tübingen.</p>

        <h2>Bericht</h2>

        <p>Das Frühlingsturnier am Sonntag, 7. April startete etwas verspätet, weil wegen 
        der Absperrungen des Stadtmarathons in Freiburg unsere Gäste Probleme hatten 
        rechtzeitig zum Einschreibeschluss im Seepark zu sein.</p>

        <p>Das sehr schöne Wetter lockte 60 Doubletten ins Boulodrome, darunter auch viele 
        Spieler aus dem benachbarten Elsass. Trotz des schönen Wetters war es leicht 
        diesig. Der Saharastaub in der Luft sorgte für die Eintrübung.<p>

        <p>Gespielt wurden 5 Runden Schweizer System auf Zeit, plus je 2 Aufnahmen. So 
        konnten die Spieler zu einer passablen Zeit die Heimreise antreten. Nach 2 Runden 
        gab es eine Pause für den Mittagstisch.<p> 

        <p>Die Spieler wurden verpflegt mit Gegrilltem und verschiedenen Salaten. Dazu 
        wurden die üblichen Getränke angeboten. Das Ganze rundeten Kaffee mit Kuchen, 
        Muffins und Torten ab.</p>

        <p>Unser Dank gilt der Service leistenden 4. Mannschaft des BPV für ihre gute 
        Arbeit im Hintergrund des Turniers. Muazzez Eckert war ebenfalls im Service. 				
        Auch Christian Fakler engagierte sich in der Organisation und Ewald Furlan 
        kümmerte sich um den Grill. <p>

        <p>Die Turnierleitung bewältigte erfolgreich unser 1. Vorsitzender Nik Heyder.<p>

        <p>Das Frühlingsturnier 2024 ist gut gelungen. Die Stimmung auf dem Platz war 
        fröhlich. Dies war ein lohnender Tag für unseren Sport.</p>
						
        </div>

    </div>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

