<!DOCTYPE html>
<html lang="de">
<head>
    <title>Ergebnis Jubiläumsturnier 2019</title>
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
        <img src="imagefolder/TeasJubi2019.jpg" title="Jubiläumsturnier 2019" alt="Jubiläumsturnier 2019">
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

            <h2>Ergebnis 19. Jubiläumsturnier 2019 (Doublette Formée)</h2>

			<p>Hier die <a target="_blank"href="images/Jubi2019/ErgJubi2019.jpg">Ergebnisliste</a> für die Rangliste.</p>

            <p><strong>Ergebnis A-Turnier</strong></p>

            <p>1. Niclas und Dieter Zimmer, FT Freiburg;<br>
            2. Tobias Müller,PCB Horb, und Peter Frank, BC Zimmern;<br>
            3. Rachid Belhaid, BF Malsch, und Omar Bouaoune, PSG Friedrichshafen<br>
            3. Niclas Zimmer, FT Freiburg, und Tobias Müller, PCB Horb</p>

            <p><strong>Ergebnis B-Turnier</strong></p>

            <p>1. Riff Christophe, PC Boulay, und Melnikoff Clément, PC St. Martin - Colmar;<br>
            2. Cecerce Fabrice und Bluntzer Jean-Luc, beide PC Gerstein;<br>
            3. Teau Christian, Boule 2000, und Schaller Christian, 01-PC Rhin;<br>
            3. Michael Löffler und Marion Häuptle, beide BPV Freiburg.</p>

            <p><Strong>Ergebnis C-Turnier</strong></pcntl_fork>

            <p>1. Martin Busam und Ilse Abd El Aziz, beide BC Rheinau;<br>
            2. Heyder Nik und Nägele Heike, beide Wohlen Bern;<br>
            3. Jutta Schmidt und Wolfgang Behr, beide BPV Freiburg;<br>
            3. Guillaume Rioux, BC Rastatt, und Koffel Eric, 01-Colmar.</p>

            <h2>Bericht</h2>

            <p>Am Freitag, den 1. November ließen sich 84 Doubletten vom anfänglich guten 
            Wetter verleiten in den Seepark nach Freiburg zu kommen. Gegen Mittag setzte 
            dann ordentlich Dauerregen ein, der bis zum Abend anhielt. Das tat der guten 
            Stimmung auf dem Platz jedoch keinen Abbruch und nicht nur die zahlreich 
            vertretenen Franzosen taten das ihre um für Spannung zu sorgen.</p>

            <p>Das Turnier lief zügig ab und ab ca. 17 Uhr starteten die letzten Finals.</p>

            <p>Wie immer bei einem Turnier dieses Formats läuft nichts ohne einen Schwarm 
            freiwilliger Helfer im Sevice.</p>

            <p>Wir danken Evi, Rita, Andreas, Franz, Didier, Ewald, Hans, Salva und Jean-Louis 
            für ihre Mitarbeit.</p>

            <p>Auch dem helfenden Küchengeschwader bei der Zubereitung der inzwischen 
            berühmten Gulaschsuppe am Vorabend danken wir ganz herzlich.</p>    

        </div>

    </div>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

