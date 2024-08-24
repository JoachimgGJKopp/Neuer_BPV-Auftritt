<!DOCTYPE html>
<html lang="de">
<head>
    <title>Impressum</title>
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
        <img src="images/turnierszene4.jpg" title="Frühling auf dem Platz" alt="Frühling auf dem Platz" style="margin-bottom: 9em;>
    </teaser>

    <script src="scripts.js"></script>

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

    <div id="impressum">

        <h2>Impressum</h2>

        <h3>Verantwortlich für den Inhalt im Sinne §6 MDStVt:</h3>

        <p>Badischer Pétanque-Verein e.V. Freiburg</p>
        
            <p>Sitz: Boulodrome im Seepark, Schlettstadter Straße 45, 79110 Freiburg</p> 
            <p>Vereinsregister: Freiburg i. Br. VR 1055</p>
            <p>Geschäftsstelle:</p>
            <p>Nik Heyder<br>Im Glaser 34<br>79111 Freiburg</p>
            <p>Mail: <a href="mailto:nikheyder@hotmail.com">nikheyder@hotmail.com</a></p>

            
        <h3>Konzeption und Design</h3>

            <p>Andreas Schulz und Joachim Kopp</p>

        
        <h3>Webmaster</h3>

            <p>Joachim Kopp</p>

        
        <h3>Haftungshinweise</h3>

            <p>Die Inhalte externer Links werden von uns nicht geprüft. 
            Sie unterliegen der Haftung der jeweiligen Anbieter.</p>

            
        <h3>Urheberrechtshinweise:</h3>

            <p>Alle auf dieser Website veröffentlichten Beiträge und Abbildungen sind 
            urheberrechtlich geschützt. Jede vom Urheberrechtsgesetz nicht zugelassene 
            Verwertung bedarf vorheriger schriftlicher Zustimmung der Anbieter. Dies 
            gilt insbesondere für Vervielfältigung, Bearbeitung, Übersetzung, 
            Einspeicherung, Verarbeitung bzw. Wiedergabe von Inhalten in Datenbanken 
            oder anderen elektronischen Medien und Systemen.</p>

        
        <h3>Werbung</h3>

            <p>Die Nutzung von auf diesen Internetseiten veröffentlichter Informationen, 
            insbesondere E-Mail-Adressen, zu Werbezwecken wird ausdrücklich untersagt.</p>
        
    </div>

    <?php include('inc_fusszeile.php') ?>

</body>
</html>

