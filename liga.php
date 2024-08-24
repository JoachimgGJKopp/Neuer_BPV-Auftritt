
<!DOCTYPE html>
<html lang="de">
    
<head>
    <title>Liga</title>
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
        <img src="images/TeasLiga.jpg" alt="Turnier im Seepark" title="Turnier im Seepark" style="margin-bottom: 1em;"/>
        <h2>Information zum Ligasport des BPV Freiburg</h2>
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

    <div id="liga">

        <div id="Liga-text">

            <p>Der Verein ist sportlich ausgerichtet. Dies belegt sein Liga-Engagement und
            die Ausrichtung von lizenzfreien und Ranglisten-Turnieren.</p> 

            <p>In der Saison 2024 spielen 5 Liga-Mannschaften für den BPV Freiburg:</p>

		    <p>Die 1. Mannschaft spielt in der Baden-Württemberg-Liga des Baden-Württembergischen
            Landesverbandes.</p> 

            <p>Die 2. und 3. Mannschaft spielen in der Regionalliga Süd des Baden-
            Württembergischen Landesverbandes.</p>

		    <p>Die 4. Mannschaft spielt in der Landesliga der Ligaregion Schwarzwald-Oberrhein.</p>

		    <p>Die 5. Mannschaft startet 2024 in der Bezirksliga der Ligaregion Schwarzwald-
            Oberrhein.</p>

		    <img src="images/ArendtSpiel.jpg" alt="Hannah Arendt" title="Hannah Arendt" /></a>

        </div>
        
        <div id="Liga-links">

            <h3>Links zu Ligen</h3>

            <p><a target="_blank"href="https://deutscher-petanque-verband.de/dpb-bundesliga-aktuelles/bundesliga-2023-die-ergebnisse/">Bundesliga des DPV</a></p>
            <p><a target="_blank"href="https://petanque-bw.de/liga-pokal/liga/">Baden-Württemberg-Liga</a></p>
            <p><a target="_blank"href="https://petanque-bw.de/liga-pokal/rl-nord-2-2/">Regionalliga-Süd des LV Baden-Württemberg</a></p>
            <p>&nbsp;</p>

            <h3>Spielpläne und Tabellen<br>der Ligaregion Schwarzwald-Oberrhein</h3>

            <p><a target="_blank"href="https://petanque-bw.de/liga-pokal/rl-nord-2-2-2-3-2/">Spielplan, Ergebnisse und Tabelle der Ligen SO</a></p>

	    </div>

    </div>

    <?php include('inc_fusszeile.php') ?>
          
</body>
</html>

