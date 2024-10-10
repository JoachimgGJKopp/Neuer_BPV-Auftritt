<!DOCTYPE html>
<html lang="de">
<head>
    <title>Ergebnis Badische 2019</title>
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
        <img src="imagefolder/TeasBad2019.jpg" title="Badische Meisterschaften 2019" alt="Badische Meisterschaften 2019">
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

            <h2>Ergebnis Internationale Badische Meisterschaften 2019<br>(Doublette Formée, A-C-B k.o.)</h2>

            <p><strong>Ergebnis A-Turnier</p></strong>

            <p>1. Matthias Laukart, Schopfheim, und Dieter Zimmer, FT Freiburg<br>
            2. Michael Dantung und Pascal Remy, beide BPV Freiburg<br>
            3. Solofoniaina Ladison und Joelson Razafimaharo, beide CB Illzach (F)<br> 
            3. Nadir Taskale, SG Wiehre, und Inoussa Koriko, B95 Denzlingen</p>

            <p><strong>Ergebnis B-Turnier</p></strong>

            <p>1. Christophe Romann und Dinh Vu, beide PC St. Martin Colmar (F)<br>
            2. Etienne Feyertag und Raymond Heredias, beide BC Strasbourg (F)<br>
            3. Gregory Wössner und Gerald Neuhaus, beide PC St. Martin Colmar (F)<br>
            3. Filippo Mancini, PCB Horb, und Rudolf Raab, BC Eisingen</p>

            <p><strong>Ergebnis C-Turnier</p></strong>

            <p>1. Mario Galluser und Carole Szestke, beide Hanweiler<br>
            2. Philipp Wienker und Youcef Hamoudi, beide BPV Freiburg</p>

            <h2>Bericht</h2>

            <p>Am 23. Juni trafen sich bei sommerlichen Temperaturen 68 Doubletten zu einem 
            gelungenen Ranglistenturnier. Es wurde A-C-B k.o. gespielt und außerhalb der 
            Wertung noch ein D-Turnier angehängt. Nach spannenden Halbfinals setzten sich 
            final Dieter Zimmer mit dem DM-Vizemeister Mathias Laukart gegen Michel Dantung 
            und Pascal Remy durch.</p>

            <p>Als Schiedsrichter fungierte wie immer souverän Phillip Brillaut, dem wir für 
            seinen Einsatz danken. Für einen reibungslosen Ablauf sorgten Hansjörg Grund und 
            Wolfgang Behr, unterstützt von Christian Fackler.</p>

            <p>Um das leibliche Wohl der Gäste kümmerten sich mit einer  bravourösen Bewirtung, 
            die wieder einmal mit viel Lob bedacht wurde,  Rita, Anne, Renuscha, Birgit, Jutta, 
            Polly, Jochen, Karl-Heinz, Manfred und  Max.</p>

            <p>Ein besonderer Dank gilt unserem Jean-Louis, der in tagelanger Vorbereitung den Platz in einen Top-Zustand versetzt hat.</p>    

        </div>

    </div>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

