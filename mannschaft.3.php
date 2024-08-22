<!DOCTYPE html>
<html lang="de">

<head>
    <title>Mannschaft 3</title>
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
        <img src="images/3Mann2024.jpg" title="3. Mannschaft des BPV Freiburg" alt="3. Mannschaft des BPV Freiburg">
        <h2>3. Mannschaft des BPV Freiburg</h2>
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
                    <tr><td><th>Serge Aloird</th></td></tr>
                    <tr><td><th>Claude Carette</th></td></tr>
                    <tr><td><th>Youcef Hamoudi</th></td></tr>
                    <tr><td><th>Helmut Köttner</th></td></tr>
                    <tr><td><th>Harry Kröner</th></td></tr>
                    <tr><td><th>Erika Passon (Mannschaftsführerin)</th><td>Mail: RikaMitsch@gmx.de</td></tr>
                    <tr><td><th>Denis Reinhardt</th></td></tr>
                    <tr><td><th>Anjarasoa Ratohinomenjonahary</th></td></tr>
                    <tr><td><th>Barbara Staudinger</th></td></tr>
                    <tr><td><th>Julia Tengattini</th></td></tr>
                    <tr><td><th>Tim Villard</th></td></tr>
               </tbody>

        </table>

    </div>

    <?php include('inc_fusszeile.php') ?>

</body>
</html>

