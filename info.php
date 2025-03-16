<!DOCTYPE html>
<html lang="de">
<head>
    <title>Informationen</title>
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
        <img src="images/TeasDach.jpg" title="Jubiläumsturnier 2017" alt="Jubiläumsturnier 2017" style="margin-bottom: 8em;">
    </teaser>

    <main>

        <div id="info">

            <h2>Informationen zum Verein</h2>

	        <div class="galerie-foto"><img id="info-rechts" src="images/schillerspiel.jpg" alt="Zitat Schiller" title="Zitat Schiller" /></a></div>                 

            <p>Gegründet 1976 von Studenten und Lehrern. Unser Verein ist einer der
            ältesten Boule-Vereine in Deutschland. Er hat derzeit über 150 Mitglieder, wovon ca. 30 Prozent 
            Frauen sind. 2025 spielen eine Wettkampfmannschaft in der BaWü-Liga von Baden-Württemberg 
            und zwei in der Regionalliga Süd; in der Ligaregion Schwarzwald-Oberrhein spielen zwei 
            Mannschaften in der Landesliga. Im Jahreslauf 
            veranstalten wir 2 große eigene Turniere mit bis zu 200 Spielern pro Turnier, die zum Teil eine 
            lange Tradition haben. Ein Turnier ist ein Ranglistenturnier mit Lizenzpflicht und dient 
            dem Leistungssport. Zudem spielen wir an Samstagen von April bis Oktober den "Sommercup", ein 
            lizenzfreies Turnier für Jedermann. Weiter wird unser sehr schön gelegener Platz auch für 
            Veranstaltungen des Deutschen und des Landesverbandes genutzt. Dies alles neben unserem 
            normalen wöchentlichen Spielbetrieb.</p>

            <p>Das Pétanque-Spiel vereint junge und alte Spieler in den Mannschaften. Es kommt öfter vor, 
            dass in einer Triplette ein 15-jähriger Spieler zusammen mit einem 40- und 70-jährigen spielt. 
            Dieses Generationen übergreifende Agieren innerhalb einer Mannschaft kennen nur wenige 
            Sportarten und birgt wichtige soziale Aspekte. In unserem Verein findet sowohl der Breitensport
            als auch der Leistungssport seinen Platz.</p>

        </div>

    </main>

    <script src="scripts/AufrufButton.js"></script>

    <?php include('inc_fusszeile.php') ?>
    
</body>
</html>

