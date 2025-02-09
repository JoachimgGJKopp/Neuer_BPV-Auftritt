<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Archiv</title>
    <?php include('header.php'); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
        <?php include('navigation.php'); ?>
    </nav>

    <nav2 id="navigation2">
        <?php include('navigation2.php'); ?>
    </nav2>

    <teaser id="teaser">
        <img src="archiv/TeasArchiv.jpg" title="Frühling auf dem Platz" alt="Frühling auf dem Platz" style="margin-bottom: 11em;">
    </teaser>

    <main>

        <div id="Inhalt1">

            <h2>2025</h2>
            <a target="_blank" href="archiv/screenshot20250203.jpg">03.02.2025</a> Nachruf Max Blechschmidt<br>
            <a target="_blank" href="archiv/screenshot20250204.jpg">04.02.2025</a> Baumfällaktion</p>

        </div>

        <div id="Inhalt2">


        </div>

        <div id="Inhalt3">


        </div>

    </main>

    <nav aria-label="Archivseiten">
        <ul class="pagination pagination-md">
            <li class="page-item"><a class="page-link" href="archiv2018-2024.php">1</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">2</span>
            </li>
        </ul>
    </nav>


    <script src="scripts/AufrufButton.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php include('inc_fusszeile.php') ?>

</body>

</html>