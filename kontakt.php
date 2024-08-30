
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include ('header.php'); ?>
    <title>Kontakt</title>
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

    <img src="images/TeasKontakt.jpg" alt="Kontakt zum Seepark" title="Reiche mir deine Hand" style="margin-bottom: 1em;"/>
    <h2 style="margin-bottom: 1em;">Kontakt</h2>

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

    <div id="kontakt">

        <div id="Kontakt1">

            <h2>Kontaktieren Sie uns per eMail</h2>

            <p>&nbsp;</p>

            <img src="images/Vorstand/WebNik.jpg" alt="Nik Heyder" title="Nik Heyder" id="heyder"/>
            <h3 style="padding-top: 0.7em";>Präsident</h3>
            <p>Nik Heyder</p>
            <p style="font-size: normal;"><a href="mailto:nikheyder@hotmail.com">Mail: nikheyder@hotmail.com</a></p>
 
            <p>&nbsp;</p>

            <img src="images/Vorstand/WebChristian.jpg" alt="Christian Fakler" title="Christian Fakler" id="fakler"/>
            <h3 style="padding-top: 0.7em";>Kassenwart</h3>
            <p>Christian Fakler</p>
            <p style="font-size: normal;"><a href="mailto:CFakler61@gmail.com">Mail: CFakler61@gmail.com</a></p>
       
        </div>
        
        <div id="Kontakt2">

                <h2 style="padding-bottom: 0.5em;">Adresse Präsident</h2>
                <address>Nik Heyder<br/>Im Glaser 34<br/>79111 Freiburg<br/>Deutschland<br/>Telefon 0176 442 06 443<br>nikheyder@hotmail.com</address>

        </div>

    </div>
 
                <?php include('inc_fusszeile.php') ?>        
        
</body>
</html>

