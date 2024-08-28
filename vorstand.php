
<!DOCTYPE html>
<html lang="de">
    
<head>
    <title>Vorstand</title>
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

    <teaser id="teaser">
        <img src="images/Vorstand/TeasVorstand2024.jpg" alt="Vorstand" title="Vorstand" style="margin-bottom: 1em;"/>
        <h2 style="margin-bottom: 2em;">Vorstand des BPV Freiburg</h2>
    </teaser>

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

     <div id="vorstand">

	    <div id="vorstand1">
	    
			<img src="images/Vorstand/WebNik.jpg" alt="Nik Heyder" title="Nik Heyder" class="imgV"/>
			<p>Präsident:</p>
			<p>Nik Heyder</p>
			<p><a href="mailto:nikheyder@hotmail.com">Mail:<br>nikheyder@hotmail.com</a></p>

			<p>&nbsp;</p>

			<img src="images/Vorstand/WebDavid.jpg" alt="David da Silva" title="David Da Silva" class="imgV"/>
			<p>Vizepräsident:</p>
			<p>David Da Silva</p>
			<p><a href="mailto:fariasdasilva1987@gmail.com">Mail:<br>fariasdasilva1987@gmail.com</a></p>

			<p>&nbsp;</p>

			<img src="images/Vorstand/WebChristian.jpg" alt="Christian Fakler" title="Christian Fakler" class="imgV"/>
			<p>Kassenwart:</p>
			<p>Christian Fakler</p>
			<p><a href="mailto:CFakler61@gmail.com">Mail:<br>CFakler61@gmail.com</a></p>

			<p>&nbsp;</p>

			<img src="images/Vorstand/WebHeike.jpg" alt="Heike Nägele" title="Heike Nägele" class="imgV"/>
			<p>Schriftführerin:</p>
			<p>Heike Nägele</p>
			<p><a href="mailto:hnaegele@web.de">Mail:<br>hnaegele@web.de</a>

		</div>

		<div id="vorstand2">

			<img src="images/Vorstand/WebAndreas.jpg" alt="Andreas Herrmann" title="Andreas Herrmann" class="imgV"/>
			<p>Sportwart:</p>
			<p>Andreas Herrmann</p>
			<p><a href="mailto: hoerm68@web.de">Mail:<br>hoerm68@web.de</a></p>

			<p>&nbsp;</p>

			<img src="images/Vorstand/WebHansjoerg.jpg" alt="Hansjörg Grund" title="Hansjörg Grund" class="imgV"/>
			<p>Beisitzer:</p>
			<p>Hansjörg Grund</p>
			<p><a href="mailto:hgrund@aol.com">Mail:<br>hgrund@aol.com</a></p>

			<p>&nbsp;</p>

			<img src="images/Vorstand/WebBlind.jpg" alt="n. n." title="n. n." class="imgV"/>
			<p>Vereinsheim:</p>
			<p>n. n.</p>
			<p><a href=" ">Mail: n. n.</a></p>

			<p>&nbsp;</p>

			<img src="images/Vorstand/WebBlind.jpg" alt="n. n." title="n. n." class="imgV"/>	
			<p>Platzwart:</p>
			<p>n. n.<p>
			<p><a href=" ">Mail: n. n.</a></p>

		</div>

	</div>

    <?php include('inc_fusszeile.php') ?>
          
</body>
</html>

