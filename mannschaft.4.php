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

        <table>

            <thead>
                <tr><th style="color:rgb(3, 75, 3)">Mannschaftsmitglieder</th></tr>
            </thead>

            <tbody>
                <tr><td><th>Mensur Barakovic</th></td></tr>
                <tr><td><th>Bernd Birnbreier</th></td></tr>
                <tr><td><th>Martin Böhler</th></td></tr>
                <tr><td><th>Salvador Fernandez (Mannschaftsführer)</th><td>Mail: salvafreiburg@gmail.com</td></tr>
                <tr><td><th>Sahoby Olivier Herinantenaina</th></td></tr>
                <tr><td><th>Hermann Klausmann</th></td></tr>
                <tr><td><th>Hans Koch</th></td></tr>
                <tr><td><th>Hasina Liantsoa Razanajatovo</th></td></tr>
                <tr><td><th>Thomas Marschner</th></td></tr>
                <tr><td><th>Hans Pfeiffer</th></td></tr>
            </tbody>

        </table>

    </div>

    <?php include('inc_fusszeile.php') ?>

</body>
</html>

