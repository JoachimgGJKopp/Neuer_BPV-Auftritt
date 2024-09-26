<!DOCTYPE html>
<html lang="de">
<head>
    <title>Ergebnis Badische Meisterschaften 2023</title>
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
        <img src="Bilderwand/images/TeasBad2023.jpg" title="Badische Meisterschaften 2023" alt="Badische Meisterschaften 2023">
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

            <h3>Ergebnis Internationale Badische Meisterschaften 2023 Ranglistenturnier<br>(Doublette Formée, A-C-B k.o.)</h3>

		    <a href="Bilderwand/images/Badische2023/ErgebnisBadische2023.pdf">Ergebnisse Internationale Badische Meisterschaften 2023</a> 

            <p><strong>Ergebnis A-Turnier</p></strong>

            <p>1. Christian Bossert, Boule Club Achern e.V., und Philippe Jankowski, TG Laudenbach 1889 e.V.<br>
            2. Matthias Laukart, PC Horb e.V., und Dominik Hanser, SG Wiehre Freiburg e.V.<br>
            3. Leblond Gaetan, F-CB Strasourgeois, und Joeffrey Clement, F-CB Strasourgeois<br> 
            3. Georg Maier, PC Kirchzarten e.V., und Stephan Raufer, PC Kirchzarten e.V.</p>

                        <p><strong>Ergebnis B-Turnier</p></strong>

            <p>1. Hubert Blattmann, Boule 95 Denzlingen e.V., und Achim Weißmann, Boule 95 Denzlingen e.V.<br>
            2. Karin Sumser, LFJ Tübingen e.V., und Harald Mayer, LFJ Tübingen e.V.<br>
            3. Najara Cabrera, BC Sauberg Mühlacker e.V., und Peter Frank, PC Horb e.V.<br>
            3. Jürgen Röttele, BPV Freiburg e.V., und Peter Jäckel, Boulefreunde Waiblingen e.V.</p>

            <p><strong>Ergebnis C-Turnier</strong></p>
 
            <p>1. Oliver Anders, BPV Freiburg e.V., und Andreas Herrmann, BPV Freiburg e.V.<br>
            2. David Österle, Boule13Waldkirch e.V., und Georg Eble, Boule13Waldkirch e.V.</p>

            <h2>Bericht</h2>

            <p>Waren es 2019 beim gleichen Turnier noch 68 Doubletten und wurde beim Ranglistenturnier 
            im November 2022 noch der Vereinsrekord von 104 Teams erzielt, so war die Teilnehmerzahl 
            dieses Jahr übersichtlich. Das hatte immerhin den Vorteil, dass alle Partien im Boulodrome, 
            mit seinen 26 Plätzen, ausgetragen werden konnten. Niemand musste auf die unbefestigten Wege 
            im Seepark, mit seinen vielen Sonntagsspaziergängern, ausweichen.</p>

            <p>Das Turnier wurde im ACB-Modus durchgeführt. Ausserhalb der Wertung wurden Miniturniere 
            angeboten. Das Turnier verlief in angenehmer Atmosphäre ohne Zwischenfälle und bot viele 
            hochwertige Spiele. Vor zahlreichen Zuschauern setzten sich im spannenden Finalspiel 
            Phillip Jankowski und Christian Bossert gegen Matthias Laukart und Domi Hanser durch.</p>

            <p>Der Verein bedankt sich bei allen Beteiligten, die zum Gelingen des Turniers beigetragen 
            haben. Insbesondere beim Schiedsrichter Youcef Hamoudi für seinen souveränen Einsatz, 
            bei der 4. Mannschaft, die für das leibliche Wohl sorgte, bei Christian Fakler für die 
            Turnierleitung, bei Raymond Maier (Boule 95 Denzlingen) für die spontane Unterstützung der 
            Turnierleitung. Besonderen Dank auch den Spendern von Kuchen und Salaten.</p>

        </div>

    </div>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

