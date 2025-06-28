<!DOCTYPE html>
<html lang="de">

<head>
    <title>Mannschaft 1</title>
    <?php include ('header.php'); ?>
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

    <teaser>
        <img src="images/1Mann2023.jpg" title="1. Mannschaft des BPV Freiburg" alt="1. Mannschaft des BPV Freiburg">
        <h2 style="margin-top: 1em;">1. Mannschaft</h2>
    </teaser>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 col-sm-12 ps-0">

                <p>Oliver Anders<br>
                Harry Burger<br>
                Njakanosy Iandrianantenaina<br>

                <span style="background-color: var(--fuehrer-color) !important; display: inline-block; padding: 0px; margin-right: 0px; font-size: inherit;">
                Didier Kauffmann (Mannschaftsführer)&nbsp;&nbsp;<wbr /><small>didier.kauffmann1702@gmail.com</small>
                </span><br>
                
                Franz Kirschner<br>
                John Lancon<br>
                Harry Maugeais<br>
                Anjaratiana Rabeariosa<br>
                Frédéric Riess<br>
                Christophe Riff<br>
                Timo Sommer<br>
                Sébastien Tromeur<br>
                Nadja Weckemann</p>

            </div>

        </div>

    </div>

    <script src="scripts/AufrufButton.js"></script>

    <?php include('inc_fusszeile.php') ?>

</body>
</html>

