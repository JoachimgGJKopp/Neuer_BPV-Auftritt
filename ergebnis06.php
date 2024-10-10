<!DOCTYPE html>
<html lang="de">
<head>
    <title>Ergebnis Jubiläumsturnier 2022</title>
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
        <img src="imagefolder/TeasJubi2022.jpg" title="Jubiläumsturnier 2022" alt="Jubiläumsturnier 2022">
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

            <h2>Ergebnis 22. Jubil&auml;umsturnier 2022 (Doublette Formée)</h2>

			<p>Hier die <a target="_blank"href="Bilderwand/images/Jubi2022/ErgJubi2022.pdf">Ergebnisliste</a> als PDF.</p>

            <p><strong>Ergebnis A-Turnier</strong></parse_str>

            <p>1. Nicolas Dosser und Ludovic Loth;<br>
            2. Jacques Pepin und Karl-Heinz Klefenz;<br>
            3. Muriel Hess und Sascha Wagner;<br>
            3. David Maerklen und Roland Zimmermann.<br>
            5. Elke Wunderer und Arthur Kirsch;</br>
            5. Thomas Grünewald und Bernhard Meyer;<br>
            5. Stefan Ams und Fabian Ehret;<br>
            >5. Laurent Krebs und Regis Huber.</p>

            <p><strong>Ergebnis B-Turnier</strong></p>

            <p>1. Isabelle Cecere und Paul Abraham;<br>
            2. Albrecht Heim und Peter Frank;<br>
            3. Pascal Delacote und Veroljub Dinucovic;<br>
            3. Antoni Weiss undSteve Hoerr.<br>

            <p><strong>Ergebnis C-Turnier</strong></p>

            <p>1. Fabrice Roy und Dieter Zimmer;<br>
            2. Sascha Blum und Rene Kutsch;<br>
            3. Nico und Harald Öschger;<br>
            3. Rita Kurz und Wolfgang Behr.</p>

            <h2>Bericht</h2>

            <p>Am Dienstag, 1. November fand das 22. Jubiläumsturnier bei bewölktem trockenen 
            Wetter statt. Es kamen 104 Équipes in den Seepark; somit wurde erstmals die 
            magische Marke von 100 Mannschaften geknackt. Darunter waren traditionell viele 
            Franzosen, die wie immer um die vorderen Plätze mitspielten. Für das leibliche 
            Wohl gab es über Steaks, Würste und Kartoffelsuppe bis hin zu diversen Salaten 
            für jeden etwas. Kuchen gab es auch reichlich.</p>

            <p>Die Partien waren heiß umkämpft und spannend. Im Halbinale A z.B. war eine 
            Partie beim Stand 11:12 fast gewonnen als eine Punktkugel in fragiler Lage einen 
            schwachen Impuls bekam und weglief. Der Gegner war leer. Die Équipe versuchte mit 
            4 Kugeln auf der Hand mindestens einen Punkt zu holen um im Spiel zu bleiben, was 
            nicht gelang.</p>

            <p>Die letzten Spieler gingen nach 22 Uhr.</p>

    		<p>Das Turnier leiteten souverän Andreas Herrman, Harry Maugeais und Christian Fakler. 
            Wir danken dem Schiedsrichter Peter Mittler für seinen Einsatz. Weiter danken wir 
            unserer Ersten für den geleisteten Service.</p>
                
        </div>

    </div>
                    <?php include('inc_fusszeile.php') ?>
</body>
</html>

