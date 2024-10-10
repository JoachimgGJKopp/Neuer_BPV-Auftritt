<!DOCTYPE html>
<html lang="de">
<head>
    <title>Ergebnis Herbstturnier 2019</title>
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
        <img src="imagefolder/TeasHerbst2019.jpg" title="Herbstturnier 2019" alt="Herbstturnier 2019">
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

            <h2>Ergebnis Herbstturnier 2019 (Triplette Formée) Poule A-B k.o.</h2>

            <p><strong>Ergebnis A-Turnier</strong></p>

            <p>1. Christian Bossert, Matthias Ungerer, beide BC Rastatt, und Philippe Jankowski, BF Malsch;<br>
            2. Dieter Zimmer, FT Freiburg, Pascal Remy, BPV Freiburg, und Thomas Sekinger, LB Gutach;<br>
            3. Karin Sumser, Harald Mayer, beide LFJ Tübingen, und Dr. Christian Büttner, BSG Schopfheim;<br> 
            3. Thomas Haas, Jacques Louis Gatta-Michelet und Pascal Ponnaroy, alle BC Rastatt.</p> 

            <p><strong>Ergebnis B-Turnier</strong></p>

            <p>1. Salvador Fernandez, Harry Maugeais, beide BPV Freiburg, Peter Martin, B95 Denzlingen;<br>
            2. Oliver Anders, Bühler BC, Nadir Taskale, SG Wiehre Freiburg, und Uwe Nübling, LB Gutach;<br>
            3. Ewald Furlan, Mensur Barakovic und Hermann Klausmann, alle BPV Freiburg;<br>
            3. Tanja Hauge, Klaus Sievers und Anja Claudia Reinert, alle BC Ettenheim.</p>
                
            <h2>Bericht</h2>

            <p>Am 29. September fanden sich im Seepark 30 Tripletten bei klarem aber windigem 
            Wetter ein zum Poule A-B k.o. Die normalerweise zahlreich vertretenen Franzosen 
            fehlten an diesem Sonntag.</p>

            <p>Das Turnier lief reibungslos und harmonisch ab. Der Service, dem wir danken, 
            funktionierte einwandfrei.</p>

            <p>Das Turnier leiteten Harry Burger und Christian Fakler. Schiedsrichter war 
            Ernesto del Ciotto, dem wir für seinen Einsatz danken.</p>

            <p>Ebenfalls zu Dank verpflichtet sind wir unserem Service, den Erika, Philipp,
            Gino, Mike, Hans, Jean-Louis und andere leisteten.</p> 

        </div>

    </div>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

