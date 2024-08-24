<!DOCTYPE html>
<html lang="de">

<head>
    <title>Mannschaft 2</title>
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
        <img src="images/2Mann2024.jpg" title="2. Mannschaft des BPV Freiburg" alt="2. Mannschaft des BPV Freiburg">
        <h2>2. Mannschaft des BPV Freiburg</h2>
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

        <p1>David Ivan Farias Da Silva<br>
        Paulo Da Silva<br>
        Muazzez Eckert<br>
        Andreas Herrmann (Mannschaftsführer)&nbsp;&nbsp;<small>Mail: hoerm68@web.de</small><br>
        Dominik Hanser<br>
        Nik Heyder<br>
        Lyes-Sofian Lounes<br>
        Heike Nägele<br>
        Xavier Peyre<br>
        Martin Pfitzner<br>
        Andriniaina Ramahemintsoa Fenohasina</p1>

    </div>

    <?php include('inc_fusszeile.php') ?>

</body>
</html>

