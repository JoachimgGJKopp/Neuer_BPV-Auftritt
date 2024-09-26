<!DOCTYPE html>
<html lang="de">

<head>
    <title>Mannschaft 4</title>
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
        <img src="images/4Mann2024.jpg" title="4. Mannschaft des BPV Freiburg" alt="4. Mannschaft des BPV Freiburg">
        <h2>4. Mannschaft des BPV Freiburg</h2>
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

        <p>Mensur Barakovic<br>
        Bernd Birnbreier<br>
        Martin Böhler<br>
        Salvador Fernandez (Mannschaftsführer)&nbsp;&nbsp;<small>Mail: salvafreiburg@gmail.com</small><br>
        Sahoby Olivier Herinantenaina<br>
        Hermann Klausmann<br>
        Hans Koch<br>
        Hasina Liantsoa Razanajatovo<br>
        Thomas Marschner<br>
        Hans Pfeiffer</p>

    </div>

    <?php include('inc_fusszeile.php') ?>

</body>
</html>

