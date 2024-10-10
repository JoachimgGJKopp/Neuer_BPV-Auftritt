<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adresse 2</title>
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
        <img src="images/TeasBegin.jpg" title="Vereinsheim des BPV" alt="Vereinsheim des BPV" style="margin-bottom: 10em;">
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
 
    <div id="beginner" style=margin-top:-9em>

        <h2>Informationen für Neueinsteiger ins Pétanque-Spiel</h2>

        <p>Wenn Sie das Spiel kennen lernen wollen unter Anleitung im Verein, 
        dann kommen Sie abends ungefähr zwischen 17 und 19 Uhr vorbei auf unserem 
        <a target="_blank"href="adresse 2.php">Bouleplatz</a> im Seepark. Bei trockenem Wetter 
        ist immer jemand da. Samstags spielen wir ab 13.30 Uhr in den Abend. Sie können auch 
        <a target="_blank"href="kontakt.php">Kontakt</a> aufnehmen mit Nik Heyder. Kommen Sie 
        auf unseren Bouleplatz und sprechen Sie Spieler an und sagen Sie diesen, dass Sie Anfänger 
        sind und Boule spielen wollen. Wir nehmen Sie unter unsere Fittiche, leiten Sie an und 
        spielen mit Ihnen.</p>

        <p>Es genügt, wenn Sie in normaler Freizeitkleidung zu uns kommen. Fürs Erste können wir 
        Ihnen die Kugeln auf dem Platz kostenfrei stellen. Bitte kaufen Sie keine Kugeln oder 
        Ausrüstung im Voraus, wenn Sie noch nicht Bescheid wissen; wir beraten Sie.</p>

        <p>Später sollten Sie mit folgender Anfangs-Investition rechnen: 1 Satz Wettkampf-Kugeln 
        (3 Stück) in guter Qualität ca. 180 Euro, Maßband 3 Euro, Zielkugeln Stück 1 Euro, 
        Kugeltasche ca. 10-40 Euro.</p>

        <p>Deutsche Lehrbücher für die Basics des Pétanquespiels bis hin zu 
        Literatur für Turnierspieler finden Sie kommentiert in der 
        <a target="_blank"href="http://www.buchhandlunghenzler.de/bhneu/literaturliste_boule/literaturliste.htm">
        Literaturliste Boule der Buchhandlung Henzler</a> (ist allerdings schon länger nicht aktualisiert worden).</p>

        <p>Aktuelle Literatur finden Sie im Web, wenn Sie "Bücher Petanque" eingeben.</p>

        <p>Nach ca. 3 Monaten bei uns sollten Sie sich entscheiden, ob Sie weiter mit uns spielen. 
        Dazu sollten Sie dann in unseren Verein eintreten. Der 
        <a target="_blank"href="dokumente/Beitragsordnung_2.1.pdf">Jahresbeitrag</a> beträgt 73 
        Euro (ermäßigt 55 Euro, Kinder beitragsfrei). Eine Spielerlizenz kostet extra 12 Euro.</p>

    </div>

            <?php include('inc_fusszeile.php') ?>

</body>
</html>

