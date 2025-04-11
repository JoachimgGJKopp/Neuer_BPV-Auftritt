
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include ('header.php'); ?>
    <title>Kontakt</title>
</head>
<body>

    <div class="transparent-layer"></div>
    
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

    <img src="images/TeasKontakt.jpg" alt="Kontakt zum Seepark" title="Reiche mir deine Hand" style="margin-bottom: 2em;"/>

    <div class="container">

    <h2 style="padding-bottom: 1em; margin-left: -0.5em">Kontaktieren Sie uns per eMail</h2>

    <div id="kontakt">

        <div class="row">

            <div class="col-12 col-sm-5 p-0">

                <img src="images/Vorstand/WebNik.jpg" alt="Nik Heyder" title="Nik Heyder" id="heyder"/>
                <h3 style="padding-top: 0.7em";>Präsident</h3>
                <p>Nik Heyder</p>
                <p style="font-size: normal;"><a href="mailto:nikheyder@hotmail.com">nikheyder@hotmail.com</a></p>
    
                <p>&nbsp;</p>

                <h3>Adresse Präsident</h3>
                <p style="margin-bottom: 3em;"><i>Nik Heyder<br/>
                Im Glaser 34<br/>
                79111 Freiburg<br/>
                Deutschland<br/>
                Telefon 0176 442 06 443<br>
                nikheyder@hotmail.com</i></p>
 
            </div>

            <div class="col-0 col-sm-2"></div>
        
            <div class="col-12 col-sm-5 p-0" style="padding-top: 2em;">

                <img src="images/Vorstand/WebChristian.jpg" alt="Christian Fakler" title="Christian Fakler" id="fakler"/>
                <h3 style="padding-top: 0.7em";>Kassenwart</h3>
                <p>Christian Fakler</p>
                <p style="font-size: normal; padding-bottom: 1em;"><a href="mailto:CFakler61@gmail.com">CFakler61@gmail.com</a></p>

            </div>

        </div>

    </div>

    </div>

    <script src="scripts/AufrufButton.js"></script>
 
    <?php include('inc_fusszeile.php') ?>        
        
</body>
</html>

