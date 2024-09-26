<!DOCTYPE html>
<html lang="de">
<head>
    <title>Vorstand1</title>
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
        <h2 style="margin-bottom: 2em; padding-left: 1.2em;">Vorstand des BPV Freiburg</h2>
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

    <div id="mvorstand">			<!-- Mobile -->

			<img src="images/Vorstand/WebNik.jpg" alt="Nik Heyder" title="Nik Heyder" class="imgV1"/>
			<p>Präsident<br>
			Nik Heyder<br>
			<a href="mailto:nikheyder@hotmail.com">Mail: nikheyder@hotmail.com</a><br>
			&nbsp;</p>

			<img src="images/Vorstand/WebDavid.jpg" alt="David da Silva" title="David Da Silva" class="imgV1"/>
			<p>Vizepräsident<br>
			David Da Silva<br>
			<a href="mailto:fariasdasilva1987@gmail.com">Mail: fariasdasilva1987@gmail.com</a><br>
			&nbsp;</p>

			<img src="images/Vorstand/WebChristian.jpg" alt="Christian Fakler" title="Christian Fakler" class="imgV1"/>
			<p>Kassenwart<br>
			Christian Fakler<br>
			<a href="mailto:CFakler61@gmail.com">Mail: CFakler61@gmail.com</a><br>
			&nbsp;</p>

			<img src="images/Vorstand/WebHeike.jpg" alt="Heike Nägele" title="Heike Nägele" class="imgV1"/>
			<p>Schriftführerin<br>
			Heike Nägele<br>
			<a href="mailto:hnaegele@web.de">Mail: hnaegele@web.de</a><br>
			&nbsp;</p>

			<img src="images/Vorstand/WebAndreas.jpg" alt="Andreas Herrmann" title="Andreas Herrmann" class="imgV1" style="margin-top: 1em";/>
			<p>Sportwart<br>
			Andreas Herrmann<br>
			<a href="mailto: hoerm68@web.de">Mail: hoerm68@web.de</a><br>
			&nbsp;</p>

			<img src="images/Vorstand/WebHansjoerg.jpg" alt="Hansjörg Grund" title="Hansjörg Grund" class="imgV1"/>
			<p>Beisitzer<br>
			Hansjörg Grund<br>
			<a href="mailto:hgrund@aol.com">Mail: hgrund@aol.com</a><br>
			&nbsp;</p>

			<img src="images/Vorstand/WebBlind.jpg" alt="n. n." title="n. n." class="imgV1"/>
			<p>Vereinsheim<br>
			n. n.<br>
			<a href=" ">Mail: n. n.</a><br>
			&nbsp;</p> 

			<img src="images/Vorstand/WebBlind.jpg" alt="n. n." title="n. n." class="imgV1"/>	
			<p>Platzwart<br>
			n. n.<br>
			<a href=" ">Mail: n. n.</a></p>

	</div>

	<?php include('inc_fusszeile.php') ?>

</body>
</html>

