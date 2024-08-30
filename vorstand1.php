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
	
	<teaser>
		<img src="images/Vorstand/TeasVorstand2024.jpg" 
		alt="Der Vorstand des Badischen Pétanque-Vereins e.V. Freiburg" 
		title="Der Vorstand des Badischen Pétanque-Vereins e.V. Freiburg" 
		style="margin-bottom: 1em;"/>

		<h2>Vorstand</h2>
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
	    
	    	<table>

				<tr>
					<td>Präsident:<br><p>&nbsp;</p></td>
					<td>Nik Heyder<br>
					<p><a href="mailto:nikheyder@hotmail.com">Mail: nikheyder@hotmail.com</a></p></td>
					<td><img src="images/Vorstand/WebNik.jpg" alt="Nik Heyder" title="Nik Heyder" class="imgV"/></td>
				</tr>

				<tr>
					<td>Vizepräsident:<br><p>&nbsp;</p></td>
					<td>David Da Silva<br>
					<p><a href="mailto:fariasdasilva1987@gmail.com">Mail:&nbsp;fariasdasilva1987@gmail.com</a></p></td>
					<td><img src="images/Vorstand/WebDavid.jpg" alt="David da Silva" title="David Da Silva" class="imgV"/><td>
				</tr>

				<tr>
					<td>Kassenwart:<br><p>&nbsp;</p></td>
					<td style="padding-top: 1.65em;">Christian Fakler<br>
					<p><a href="mailto:CFakler61@gmail.com">Mail: CFakler61@gmail.com</a></p><br></td>
					<td><img src="images/Vorstand/WebChristian.jpg" alt="Christian Fakler" title="Christian Fakler" class="imgV"/></td>
				</tr>

				<td>Schriftführerin:<br><p>&nbsp;</p></td>
					<td>Heike Nägele<br>
					<p><a href="mailto:hnaegele@web.de">Mail: hnaegele@web.de</a></p></td>
					<td><img src="images/Vorstand/WebHeike.jpg" alt="Heike Nägele" title="Heike Nägele" class="imgV"/><td>
				</tr>

			</table>

		</div>

		<div id="vorstand2">

			<table>

				<tr>
					<td>Sportwart:<br><p>&nbsp;</p></td>
					<td>Andreas Herrmann<br>
					<p><a href="mailto: hoerm68@web.de">Mail:&nbsp;hoerm68@web.de</a></p></td>
					<td><img src="images/Vorstand/WebAndreas.jpg" alt="Andreas Herrmann" title="Andreas Herrmann" class="imgV"/></td>
				</tr>

				<tr>
					<td>Beisitzer:<br><p>&nbsp;</p></td>
					<td>Hansjörg Grund<br>
					<p><a href="mailto:hgrund@aol.com">Mail: hgrund@aol.com</a></p></td>
					<td><img src="images/Vorstand/WebHansjoerg.jpg" alt="Hansjörg Grund" title="Hansjörg Grund" class="imgV"/></td>
				</tr>

				<tr>
					<td>Vereinsheim:<br><p>&nbsp;</p></td>
					<td>n. n.<br>
					<p><a href=" ">Mail: n. n.</a></p></td>
					<td><img src="images/Vorstand/WebBlind.jpg" alt="n. n." title="n. n." class="imgV"/></td>
				</tr>

				<tr>
					<td>Platzwart:<br><p>&nbsp;</p></td>
					<td>n. n.<br>
					<p><a href=" ">Mail: n. n.</a></p></td>
					<td><img src="images/Vorstand/WebBlind.jpg" alt="n. n." title="n. n." class="imgV"/></td>
				</tr>

	       </table>

	    </div>

	</div>

	<?php include('inc_fusszeile.php') ?>

</body>
</html>

