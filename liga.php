
<!DOCTYPE html>
<html lang="de">
    
<head>
    <title>Liga</title>
    <?php include ('header.php'); ?>
</head>

<body>

    <div class="transparent-layer"></div>
    
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
        <h2 style="margin-top: 1em; margin-bottom: 2em;">Informationen zum Ligasport</h2>
    </teaser>

    <div class="container-fluid">

        <div id="liga">

            <div class="row">

                <div class="col-12 col-sm-6 p-0">

                    <h3>Links zu Ligen</h3>

                    <p><a target="_blank"href="https://deutscher-petanque-verband.de/dpb-bundesliga-aktuelles/bundesliga-2023-die-ergebnisse/">Bundesliga des DPV</a></p>
                    <p><a target="_blank"href="https://petanque-bw.de/liga-pokal/liga/">Baden-Württemberg-Liga</a></p>
                    <p><a target="_blank"href="https://petanque-bw.de/liga-pokal/rl-nord-2-2/">Regionalliga-Süd des LV Baden-Württemberg</a></p>
                    <p><a target="_blank"href="https://petanque-bw.de/liga-pokal/rl-nord-2-2-2-3-2/">Spielpläne, Ergebnisse und Tabellen der Ligen SO</a></p>
                    <p>&nbsp;</p>

                </div>

                <div class="col-12 col-sm-6 p-0">

                    <p>Der Verein ist sportlich ausgerichtet. Dies belegt sein Liga-Engagement und
                    die Ausrichtung von lizenzfreien und Ranglisten-Turnieren.</p> 

                    <p>In der Saison 2025 spielen 5 Liga-Mannschaften für den BPV Freiburg:</p>

                    <p>Die 1. Mannschaft spielt in der Baden-Württemberg-Liga des Baden-Württembergischen
                    Landesverbandes.</p> 

                    <p>Die 2. und 3. Mannschaft spielen in der Regionalliga Süd des Baden-
                    Württembergischen Landesverbandes.</p>

                    <p>Die 4. und 5. Mannschaft spielen in der Landesliga der Ligaregion Schwarzwald-Oberrhein.</p>

                    <p>&nbsp;</p>

                    <img src="images/ArendtSpiel.jpg" alt="Hannah Arendt" title="Hannah Arendt" style="margin-bottom: 2rem;"/></a>

                </div>
                
                </div>

            </div>

        </div>

    </div>

    <script src="scripts/AufrufButton.js"></script>

    <?php include('inc_fusszeile.php') ?>
          
</body>
</html>

