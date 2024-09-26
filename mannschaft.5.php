<!DOCTYPE html>
<html lang="de">

<head>
    <title>Mannschaft 5</title>
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
        <img src="images/5Mann2024.jpg" title="5. Mannschaft des BPV Freiburg" alt="5. Mannschaft des BPV Freiburg">
        <h2>5. Mannschaft des BPV Freiburg</h2>
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

        <p>Zavatsilavina Philibert Andriananantenasoa<br>
        Florian Bischler<br>
        Martin Böhler<br>
        Johanna Bischler<br>
        Peter Bischler<br>
        Hansjörg Grund<br>
        Christian Fakler (Mannschaftsführer)&nbsp;&nbsp;<small>Mail: CFakler61@gmail.com></small><br>
        Pieter Krebs<br>
        Hannes Schuler</p>

    </div>

    <?php include('inc_fusszeile.php') ?>

</body>
</html>

