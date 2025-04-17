<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Archiv</title>
    <?php include('header.php'); ?>

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
        <img src="archiv/TeasArchiv.jpg" title="Frühling auf dem Platz" alt="Frühling auf dem Platz">
    </teaser>

	<div class="container-fluid">

        <main style="margin-top: 3em;">

            <div class="row">
			
                <div class="col-12 col-sm-4">

                    <h2>2025</h2>
                    <p><a target="_blank" href="archiv/screenshot20250203.jpg">03.02.2025</a> Nachruf Max Blechschmidt<br>
                    <a target="_blank" href="archiv/screenshot20250204.jpg">04.02.2025</a> Baumfällaktion<br>
                    <a target="_blank" href="archiv/screenshot20250225.jpg">25.02.2025</a> Einladung MV<br>
                    <a target="_blank" href="archiv/screenshot20250308.jpg">08.03.2025</a> Laubaktion<br>
                    <a target="_blank" href="archiv/screenshot20250322.jpg">22.03.2025</a> Galanacht Anja Christoph<br>
                    <a target="_blank" href="archiv/screenshot20250327.jpg">27.03.2025</a> Mitgliederversammlung<br>
                    <a target="_blank" href="archiv/screenshot20250405.jpg">05.04.2025</a> RL Süd Seepark<br>
                    <a target="_blank" href="archiv/screenshot20250412.jpg">12.04.2025</a> Start Sommercup</p>

                </div>

                <div class="col-12 col-sm-4">


                </div>

                <div class="col-12 col-sm-4">

                </div>

            </div>

        </main>

    </div>

	<nav aria-label="Archivseiten" class="pagination-container">
		<ul class="pagination pagination-md">
			<li class="page-item" aria-current="page"><a class="page-link" href="archiv2018-2024.php">1</a></li>
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