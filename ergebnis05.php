<!DOCTYPE html>
<html lang="de">
<head>
    <title>Ergebnis Herbstturnier 2022</title>
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
        <img src="Bilderwand/images/TeasHerbst2022.jpg" title="Herbstturnier 2022" alt="Herbstturnier 2022">
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

            <h2>Ergebnis Herbstturnier 2022<br>Triplette Formée, 5 Runden Schweizer System + Finale, 25 Tripletten</h2>

            <p>Hier das <a target="_blank" href="Bilderwand/images/Herbst2022/ErgebnisHerbst2022.pdf">Ergebnis</a> des Turniers</p>

            <p>1. Claude Carette, Eric Koffel und Denis Reinhardt;<br>
            2. Guillaume Ratuszniak, Julien Brucker und Jean-Marie Rollin;<br>
            3. Didier Kauffmann, Clement Melnikow und Christophe Riff;<br> 
            3. David Österle, Rene Kutsch und Sascha Blum.</p> 

            <p><strong>Ergebnis Finale</strong></p>

            <p>1. Guillaume Ratuszniak, Julien Brucker und Jean-Marie Rollin;<br>
            2. Claude Carette, Eric Koffel und Denis Reinhardt.</p>
            
            <h2>Bericht</h2>

			<p>Am Sonntag, den 25. September kamen 75 Spielerinnen und Spieler in den Seepark. 
            Rund ein Viertel der Équipes waren Franzosen, die letztendlich den Sieg unter sich 
            ausmachten. Es wurden 5 Runden Schweizer System auf Zeit gespielt mit einem 
            anschließenden Finale. Das Wetter war bewölkt bis gut; nur um 17 Uhr öffnete der 
            Himmel kurzzeitig seine Schleusen. Die 3. Mannschaft versorgte die Anwesenden mit 
            Organisation, Speis und Trank.</p>

            <p>Die Stimmung auf dem Platz war gut, die Spiele heiß umkämpft und spannend. Der 
            Équipe Peter Böcherer, Andreas Scholz und Peter Martin gelang es nach hartem Kampf 
            die favorisierten Didier Kauffmann, Clement Melnikow und Christophe Riff 
            auszuschalten, scheiterten aber dann an der Équipe Claude Carette, Eric Koffel 
            und Denis Reinhardt. Diese wiederum konnten zwar den Ersten Platz der Tabelle 
            erringen, mussten sich aber im Finale 12:13 der Équipe Guillaume Ratuszniak, 
            Julien Brucker und Jean-Marie Rollin geschlagen geben. Es gelang mit 3 Kugeln 
            nicht die press platzierte Siegerkugel aus dem Spiel zu nehmen.</p>

	    	<p>Die Turnierleitung leistete Andreas Herrmann souverän. Der Dank des BPV gilt 
            ihm sowie der gesamten Dritten Mannschaft, die den Service erbrachte. Wir danken 
            auch der Helferin Muazzez, die Unmengen belegte Brötchen schmierte.</p>
        
        </div>

    </div>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

