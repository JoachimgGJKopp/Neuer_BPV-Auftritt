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
        <img src="images/TeasClub.jpg" title="Vereinsheim des BPV" alt="Vereinsheim des BPV" style="margin-bottom: 10em;">
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

    <adresse id="adresse">
        <h2>Adresse/Anfahrt</h2>
        <p>79110 Freiburg, Schlettstadter Straße 45, Tel.: +49 761 8818276</p>
    </adresse>

    <main>

        <div id="Inhalt1">

            <h3>Anfahrt von der Autobahn A5</h3>

            <p>Von der Autobahnausfahrt Mitte auf den Zubringer Richtung Freiburg. 
            Dann die Zubringer-Ausfahrt Bischofslinde / Sportzentrum West nehmen. Nach links 
            auf die Berliner Allee. Nach 1,3 km zum Sportzentrum West nach links 
            einbiegen. Die Nächste links ums Eisstadion, dann rechts in die 
            Schlettstadter Straße abbiegen. Vorne an der Wendeplatte fällt links 
            ein Weg ab zum Seepark. Nach 50 m rechts ist der Bouleplatz.</p> 
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10677
            .208312039083!2d7.81702374424257!3d48.007873521723916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
            .1!3m3!1m2!1s0x47911b0b3b95335b%3A0x81c6733eff465d7e!2sSchlettstadter%20Str
            .%2045%2C%2079110%20Freiburg%20im%20Breisgau!5e0!3m2!1sde!2sde!4v1724054247230!5m2!1sde!2sde" 
            width="245" height="auto" style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

        <div id="Inhalt2">

            <h3>Von Osten via B31</h3>

            <p>Aus dem Dreisamtal kommend auf den Zubringer Mitte zur Autobahn A5 entlang der Dreisam. Unterwegs
            die Abfahrt Bischofslinde / Sportzentrum West nehmen. An der Ausfahrtampel nach links 		
            auf die Berliner Allee. Nach 1,3 km zum Sportzentrum West nach links einbiegen. Die Nächste links ums Eisstadion, dann rechts in die 
            Schlettstadter Straße abbiegen. Vorne an der Wendeplatte fällt links 
            ein Weg ab zum Seepark. Nach 50 m rechts ist der Bouleplatz.</p>

        </div>

        <div id="Inhalt3">

            <h3>Mit der Straßenbahn</h3>

            <p>Mit der Linie 4 (Messe) vom Bertoldsbrunnen über den Hauptbahnhof nach der Haltestelle 
            Berliner Allee. Zum linken Eck Ensisheimer Straße / Berliner Allee gehen. 20 m links vom Eck 
            führt hinter dem Eisstadion ein Fußweg nach rechts Richtung Schlettstadter Straße durch. 
            Von der Wendeplatte am Ende der Schlettstadter Straße fällt links ein Weg ab zum Seepark. 
            Nach 50 m rechts ist der Bouleplatz.</p>

            <ul style="list-style-type:none;">
                <li><a target="_blank"href="https://www.vag-freiburg.de/fahrplan/liniennetzplaene">Liniennetzplan<br>VAG Freiburg</a></li>
            </ul>

            <h3>Der Bouleplatz von oben</h3>

            <p>Der Plan zeigt den Bouleplatz aus der Vogelschau mit der Einzeichnung der Spielbahnen. 
            Der Eingang von der Schlettstadter Straße ist bezeichnet.</p> 
            
            <a href="images/PlanPlatzbig.jpg" target="_blank"><img 
            src="images/PlanPlatzbig.jpg" alt="Lageplan der Bahnen" max-width="100%"/></a>

        </div>

    </main>

    <?php include('inc_fusszeile.php') ?>
  
</body>
</html>