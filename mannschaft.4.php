<!DOCTYPE html>
<html lang="de">

<head>
    <title>Mannschaft 4</title>
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
        <img src="images/4Mann2025.jpg" title="4. Mannschaft des BPV Freiburg" alt="4. Mannschaft des BPV Freiburg">
        <h2 style="margin-top: 1em;">4. Mannschaft</h2>
    </teaser>


    <div class="container-fluid">

        <div class="row">

            <div class="col-12 col-sm-12 ps-0">

                <p>Mensur Barakovic<br>
                Matthew Byrne<br> 
                Bernd Birnbreier<br>

                <span style="background-color: var(--fuehrer-color); display: inline-block; padding: 0px; margin-right: 0px; font-size: inherit;">
                Salvador Fernandez (Mannschaftsführer)&nbsp;&nbsp;<wbr /><small>salvafreiburg@gmail.com</small>
                </span><br>

                Hermann Klausmann<br>
                Hans Koch<br>
                Thomas Marschner<br>
                Cathy Noll<br>
                Hans Pfeiffer</p>

            </div>

        </div>

    </div>

    <script src="scripts/AufrufButton.js"></script>

    <?php include('inc_fusszeile.php') ?>

</body>
</html>

