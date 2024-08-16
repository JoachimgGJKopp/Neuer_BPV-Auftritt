<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/grid2.css">
    <link rel="stylesheet" type="text/css" href="geruest_css.css" />
    
    <title>Index</title>

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
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <a href="#">Équipes</a>
                <ul class="dropdown">
                    <li><a href="mannschaft.1.php">1. Mannschaft</a></li>
                    <li><a href="mannschaft.2.php">2. Mannschaft</a></li>
                    <li><a href="mannschaft.3.php">3. Mannschaft</a></li>
                    <li><a href="mannschaft.4.php">4. Mannschaft</a></li>
                    <li><a href="mannschaft.5.php">5. Mannschaft</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Verein</a>
                <ul class="dropdown">
                    <li><a href="vorstand.php">Vorstand</a></li>
                    <li><a href="adresse 2.php">Adresse / Anfahrt</a></li>
                    <li><a href="info.php">Informationen</a></li>
                    <li><a href="sponsoren.php">Sponsoren</a></li>
                </ul>
            </li>
            <li><a href="liga.php">Liga</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
    </nav2>

    <teaser id="teaser">
        <img src="images/TeasHome.jpg" title="Frühling auf dem Platz" alt="Frühling auf dem Platz">
    </teaser>

    <Turnierplan id="turnierplan">
        <div><a href="images/Turnierplan2024.pdf"><img src="images/WebTurnierplan2024klein.gif" 
        alt="Turnierplan 2024 des BPV-Freiburg" onmouseover="src='images/WebTurnierplan2024kleinA.gif'" 
        onmouseout="src='images/WebTurnierplan2024klein.gif'" /></a></div>
    </Turnierplan>

    <Sparkasse id="sparkasse">   
        <div><a target="_blank" href="http://www.sparkasse-freiburg.de/"><img src="images/Logospark.jpg" 
        alt="Logo der Sparkasse Freiburg" title="Logo der Sparkasse Freiburg" /></a></div>
    </Sparkasse>

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

    <main>

        <div id="Inhalt1">

            <h2>Der Sommercup ist schon wieder ins Wasser gefallen</h2>

            <img src="images/WebSommercup2024small.jpg" alt="Sommercup 2024" title="Sommercup 2024" width="100%"/>
    
            <p style="color:red;">Am Samstag, den 27. Juli 2024 findet der Sommercup 		
            nicht statt, weil das NOCTURNE ab 16.30 Uhr stattfindet.</p>
    
            <p>Am Samstag, den 20. Juli 2024 spielen wir im Seepark ab 13.30
            Uhr Doublette Formée. Das Spiel ist lizenzfrei und jedermann ist herzlich
            eingeladen mit uns mitzuspielen.</p>
    
            <p>Der Einsatz pro Spieler beträgt 5 EUR, davon gehen 1,50 EUR in den
            Preisgeldtopf für das Abschlussturnier und die Endrangliste. Cash pro Turnier und 
            Spieler sind 3,50 EUR.</p>
    
            <img src="images/WebSommercup20240622small1.jpg" alt="Sommercup 2024" title="Sommercup 2024" width="100%"/>
    
            <BR CLEAR="left"><p>Am Samstag, den 6. Juli 2024 kamen im Dauerregen nur 12 Spieler und Spielerinnen. Deshalb wurde der Sommercup zu unserem Bedauern abgesagt.</p>

            <p>Hier die <a target="_blank"href="images/Samstagspiele_Tag_06_20240615.pdf">Rangliste</a>
                    vom 15. Juni.</p>
        </div>

        <div id="Inhalt2">

            <h2>Ligaergebnisse der Saison 2024</h2>

            <h3>Erste Mannschaft</h3>
    
            <p>Unsere 1. Mannschaft musste sich mit 9:2 Punkten nur dem BC Achern 1 (11:0) geschlagen geben und hat somit einen stolzen 2. Platz errungen.</p>
    
            <p>Wir gratulieren zu dieser sehr guten Leistung der Mannschaft.</p>
            
            <h3>Zweite Mannschaft</h3>
    
            <p>Unsere 2. Mannschaft hat nach BC Lindenberg 1 und BC Ettenheim 1 einen guten 3. Platz in der Regionalliga Süd errungen. 
            Die Qualität dieser Mannschaft zeigt sich in der überragenden Spieledifferenz von 21 Zählern.
            Keine andere Mannschaft der Regionalliga Süd kann eine zweistellige positive Spieledifferenz vorweisen.<p>
    
            <p>Auch hier honorieren wir eine gute Leistung mit Applaus.
    
            <h3>Dritte Mannschaft</h3>
                
            <p>Unsere Dritte Mannschaft steht auf dem besten Abstiegsplatz in der Regionalliga Süd. Dies eröffnet die Chance, 
            dass Aufsteiger einen Platz frei machen, den unsere Dritte in der Regionalliga Süd 2025 einnehmen kann. Dies wird sich im kommenden Herbst entscheiden.</p>
    
            <h3>Vierte Mannschaft</h3>
    
            <p>Unsere 4. Mannschaft ist haarscharf am Aufstieg in der Landesliga Schwarzwald-Oberrhein vorbeigeschrammt und beendet die Saison 2024 auf dem 2. Platz.</p>
    
            <p>Dogern hat den 1. Platz errungen wozu wir gratulieren. Dogern hat zwar eine Begegnung mehr gewonnen (7:2) </p>
    
        </div>

        <div id="Inhalt3">

			<p>als der BPV (6:3), aber in der Spieledifferenz steht der BPV mit 17 Zählern besser da als Dogern (11).</p>

			<p>Auch der Vierten gratulieren wir zu ihrem Erfolg herzlich und wünschen für die Saison 2025 viel Glück.</p>

		    <h3>Fünfte Mannschaft</h3>

            <img src="images/WebFuenfte2024small.jpg" alt="Die Aufsteiger der fünften Mannschaft" title="Die Aufsteiger der fünften Mannschaft"  width="100%"/>

			<p>Die 5. Mannschaft des BPV hat am 13. Juli in Bergalingen ihren Aufstieg aus der Bezirksliga in die Landesliga Schwarzwald-Oberrhein festgemacht.</p>

			<p>Die Mannschaft ist dieses Jahr in den Ligawettbewerb gestartet und ist sofort durchmarschiert mit 10:1 Punkten.</p>

			<p>Der Verein gratuliert zu dieser hervorragenden Leistung.</p>

			<p>Insgesamt kann der Verein mit der sportlichen Leistung der Mannschaften sehr zufrieden sein und mit gutem Mut in die Saison 2025 blicken.</p>

			<h2>Nocturne am Samstag,<br>27. Juli ab 16.30 Uhr</h2>

            <img src="images/WebNocturne2024small.jpg" alt="Nocturne 2024" title="Nocturne 2024"  width="100%"/>

</div>

    </main>
    <footer id="footer">
        <div id="fusszeile">
            <p class="bottom-right"><a href="impressum.php">Impresssum</a></p>
            <p>Copyright &copy; 2024 Andreas Schulz und Joachim Kopp</p>
        </div>
    </footer>
</body>

</html>