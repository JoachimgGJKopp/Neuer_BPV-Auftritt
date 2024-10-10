<!DOCTYPE html>
<html lang="de">
<head>
    <title>Sponsoren</title>    <!-- Desktopversion -->
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

        <img src="images/TeasSpons.jpg" title="Turnier am Seepark" alt="Turnier am Seepark">
        <h2>Unsere Sponsoren</h2>

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
       
    <div id="dsponsoren"> <!-- Desktopversion -->

        <div id="dsponsoren1">

            <h3>Sparkasse Freiburg</h3>
            <a target="_blank"href="http://www.sparkasse-freiburg.de/"><img id="sparkasse-img" src="images/Web-sparkasse-freiburg.gif" alt="Logo der Sparkasse Freiburg" title="Logo der Sparkasse Freiburg" /></a>
            <p>Unser Verein wird seit 2007 von der Sparkasse Freiburg durch Sponsoring unterstützt.</p>
            <p> Zum einen konnten wir mit Hilfe des Sponsoring unsere fünf großen Turniere - die der Verein jährlich durchführt - attraktiver gestalten, zum anderen konnten wir unsere Jugendveranstaltung wie den Inter-Cup Freiburg finanziell absichern und auch die guten Leistungen der Jugendlichen angemessen honorieren.</p>
            <p></p>
            <p> Aber auch in die Infrastuktur des Vereins konnten wir mit Hilfe des Sponsoring investieren und so auch eine gute Spielfeldpflege gewährleisten.</p>
 
        </div>
        
        <div id="dsponsoren2">

            <h3>Bankhaus Mayer</h3>
            <a target="_blank"href="http://www.bankhaus-mayer.de/"><img id="mayer-img" src="images/logo_bhm.2.png" alt="Logo Bankhaus Mayer" title="Logo Bankhaus Mayer" /></a>
            <p>Dem Bankhaus Mayer und im Besonderen Jürgen Imm dem Geschäftsführer, sind wir sehr dankbar für die große finanzielle Unterstützung, die er und das Bankhaus Mayer bei der Realisierung unseres Jugend- turniers, dem "Inter-Cup Freiburg für Junioren und Espoirs", geleistet hat.</p>
            <p>Ohne die großzügige Unterstützung seitens des Bankhaus Mayer wäre dieses Jugendturnier in Freiburg nicht möglich gewesen.</p>
            <p>Jürgen Imm hat aber auch an anderen Stellen wie zum Beispiel bei der Finanzierung unserer neuen Platz- beleuchtung entscheidend beigetragen, wofür der Verein ihm sehr dankbar ist.</p>
            
        </div>

            
    </div>
                
    <?php include('inc_fusszeile.php') ?>       

</body>
</html>

