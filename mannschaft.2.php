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

        <table>

            <thead>
                <tr><th style="color:rgb(3, 75, 3)">Mannschaftsmitglieder</th></tr>
            </thead>

            <tbody>
                <tr><td><th>David Ivan Farias Da Silva</th></td></tr>
                <tr><td><th>Paulo Da Silva</th></td></tr>
                <tr><td><th>Muazzez Eckert</th></td></tr>
                <tr><td><th>Andreas Herrmann (Mannschaftsf&uuml;hrer)</th><td>Mail: hoerm68@web.de</td></tr>
                <tr><td><th>Dominik Hanser</th></td></tr>
                <tr><td><th>Nik Heyder</th></td></tr>
                <tr><td><th>Lyes-Sofian Lounes</th></td></tr>
                <tr><td><th>Heike Nägele</th></td></tr>
                <tr><td><th>Xavier Peyre</th></td></tr>
                <tr><td><th>Martin Pfitzner</th></td></tr>
                <tr><td><th>Andriniaina Ramahemintsoa Fenohasina</th></td></tr>
            </tbody>

        </table>

    </div>

    <?php include('inc_fusszeile.php') ?>

</body>
</html>

