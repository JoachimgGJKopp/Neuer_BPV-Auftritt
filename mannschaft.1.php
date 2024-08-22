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

        <table>

            <thead>
                <tr><th style="color:rgb(3, 75, 3)">Mannschaftsmitglieder</th></tr>
            </thead>

            <tbody>
                <tr><td><th>Oliver Anders</th></td></tr>
                <tr><td><th>Harry Burger</th></td></tr>
                <tr><td><th>Njakanosy Iandrianantenaina</th></td></tr>
                <tr><td><th>Didier Kauffmann</th></td></tr>
                <tr><td><th>Franz Kirschner</th></td></tr>
                <tr><th><th>John Lancon</th></td></tr>
                <tr><td><th>Harry Maugeais</th></td></tr>
                <tr><td><th>Clement Melnikoff</th></td></tr>
                <tr><td><th>Cathy Noll (Mannschaftsführerin)</th><td>Mail: c.noll@noll-avocats.com</td></tr>
                <tr><td><th>Anjaratiana Rabeariosa</th></td></tr>
                <tr><td><th>Christophe Riff</th></td></tr>
            </tbody>

        </table>

    </div>

    <?php include('inc_fusszeile.php') ?>

</body>
</html>

