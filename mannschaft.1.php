<!DOCTYPE html>
<html lang="de">

<head>
    <title>Mannschaft 1</title>
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

    <teaser>
        <img src="images/1Mann2023.jpg" title="1. Mannschaft des BPV Freiburg" alt="1. Mannschaft des BPV Freiburg">
        <h2>1. Mannschaft des BPV Freiburg</h2>
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
            
    <div id="mannschaft1">

        <h3>Mannschaftsmitglieder</h3>

        <p1>Oliver Anders<br>
        Harry Burger<br>
        Njakanosy Iandrianantenaina<br>
        Didier Kauffmann<br>
        Franz Kirschner<br>
        John Lancon<br>
        Harry Maugeais<br>
        Clement Melnikoff<br>
        Cathy Noll (Mannschaftsführerin)&nbsp;&nbsp;<small>Mail: c.noll@noll-avocats.com</small><br>
        Anjaratiana Rabeariosa<br>
        Christophe Riff</p1>

    </div>

    <?php include('inc_fusszeile.php') ?>

</body>
</html>

