<!DOCTYPE html>
<html lang="de">
<head>
    <title>Archiv</title>
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
        <img src="archiv/TeasArchiv.jpg" title="Frühling auf dem Platz" alt="Frühling auf dem Platz">
    </teaser>

    <Turnierplan id="turnierplan">
        <div><a href="images/Turnierplan2024.pdf"><img src="images/WebTurnierplan2024klein.gif" 
        alt="Turnierplan 2024 des BPV-Freiburg" onmouseover="src='images/WebTurnierplan2024kleinA.gif'" 
        onmouseout="src='images/WebTurnierplan2024klein.gif'" /></a></div>
    </Turnierplan>

    <Sparkasse id="sparkasse">   
        <div><a target="_blank" href="http://www.sparkasse-freiburg.de/"><img src="images/Logospark.jpg" 
        alt="Logo der Sparkasse Freiburg" title="Logo der Sparkasse Freiburg" /></a></div>
    </Sparkasse>

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
        
        <main>

        <div id="Inhalt1">

	        <p>Das Archiv enthält screen shots der Startseite. Diese werden immer dann archiviert, wenn die Startseite grundlegend aktualisiert wird.</p>

        	<h2>2018</h2>
				<a target="_blank"href="archiv/screenshot20180904.jpg">04.09.2018</a> Sönke LM, Bernard<br>
				<a target="_blank"href="archiv/screenshot20180910.jpg">10.09.2018</a> Oktoberfest<br>
				<a target="_blank"href="archiv/screenshot20181002.jpg">02.10.2018</a> Herbstturnier<br>
				<a target="_blank"href="archiv/screenshot20181014.jpg">14.10.2018</a> Finale Sommercup<br>
				<a target="_blank"href="archiv/screenshot20181104.jpg">04.11.2018</a> Jubiläumsturnier<br>
				<a target="_blank"href="archiv/screenshot20181215.jpg">15.12.2018</a> Laubaktion<br>
				<a target="_blank"href="archiv/screenshot20181226.jpg">26.12.2018</a> Tauschturnier</p>

        	<h2>2019</h2>

				<a target="_blank"href="archiv/screenshot20190205.jpg">05.02.2019</a> Regelabend, Start Cup<br>
				<a target="_blank"href="archiv/screenshot20190315.jpg">15.03.2019</a> Mitgliederversammlung<br>
				<a target="_blank"href="archiv/screenshot20190324.jpg">24.03.2019</a> Frühlingsturnier<br>
				<a target="_blank"href="archiv/screenshot20190623.jpg">23.06.2019</a> 44. Badische<br>
				<a target="_blank"href="archiv/screenshot20190629.jpg">29.06.2019</a> Ligaabschluss 2019<br>
				<a target="_blank"href="archiv/screenshot20190720.jpg">20.07.2019</a> Nocturne<br>
				<a target="_blank"href="archiv/screenshot20190729.jpg">29.07.2019</a> KIWANIS beim BPV<br>
				<a target="_blank"href="archiv/screenshot20190826.jpg">26.08.2019</a> Dantung DM 2019<br>
				<a target="_blank"href="archiv/screenshot20190929.jpg">29.09.2019</a> Herbstturnier<br>
				<a target="_blank"href="archiv/screenshot20191019.jpg">19.10.2019</a> Finale Sommercup<br>
				<a target="_blank"href="archiv/screenshot20191101.jpg">01.11.2019</a> Jubiläumsturnier<br>
				<a target="_blank"href="archiv/screenshot20191127.jpg">27.11.2019</a> Loggia / Kugeln hist.<br>
				<a target="_blank"href="archiv/screenshot20191226.jpg">26.12.2019</a> Tauschturnier</p>

        	<h2>2020</h2>

				<a target="_blank"href="archiv/screenshot20200104.jpg">04.01.2020</a> Laubaktion<br>
				<a target="_blank"href="archiv/screenshot20200108.jpg">08.01.2020</a> Abwasserprobleme<br>
				<a target="_blank"href="archiv/screenshot20200218.jpg">18.02.2020</a> neues Flutlicht<br>
				<a target="_blank"href="archiv/screenshot20200221.jpg">21.02.2020</a> Einladung MV<br>
				<a target="_blank"href="archiv/screenshot20200301.jpg">01.03.2020</a> Anboulen</p>

		</div>

        <div id="Inhalt2">

				<a target="_blank"href="archiv/screenshot20200317.jpg">17.03.2020</a> MV verschoben<br>
				<a target="_blank"href="archiv/screenshot20200501.jpg">01.05.2020</a> Regeln Pandemie<br>
				<a target="_blank"href="archiv/screenshot20200512.jpg">12.05.2020</a> Wiedereröffnung<br>
				<a target="_blank"href="archiv/screenshot20200526.jpg">26.05.2020</a> Corona KM 02.06.<br>
				<a target="_blank"href="archiv/screenshot20200611.jpg">11.06.2020</a> Absage Bad. Noct.<br>
				<a target="_blank"href="archiv/screenshot20200704.jpg">04.07.2020</a> Tipperfest<br>
				<a target="_blank"href="archiv/screenshot20200718.jpg">18.07.2020</a> Start Samstagsspiele<br>
				<a target="_blank"href="archiv/screenshot20200804.jpg">04.08.2020</a> Einladung MV 2020<br>
				<a target="_blank"href="archiv/screenshot20201016.jpg">16.10.2020</a> Patientenverfügung<br>
				<a target="_blank"href="archiv/screenshot20201109.jpg">09.11.2020</a> Absagen wg. Corona<br>
				<a target="_blank"href="archiv/screenshot20201222.jpg">22.12.2020</a> Nachruf Lupo</p>

			<h2>2021</h2>

				<a target="_blank"href="archiv/screenshot20210721.jpg">21.07.2021</a> Nachruf Fred Hauser<br>
				<a target="_blank"href="archiv/screenshot20210908.jpg">08.09.2021</a> DM Qualis 2021<br>
				<a target="_blank"href="archiv/screenshot20211126.jpg">26.11.2021</a> Vereinsturnier</p>

	    	<h2>2022</h2>

				<a target="_blank"href="archiv/screenshot20220522.jpg">22.05.2022</a> Bronze, 2. BaWü-Tag<br>
				<a target="_blank"href="archiv/screenshot20220622.jpg">22.06.2022</a> 3. DM, 1. BaWü-Liga<br>
				<a target="_blank"href="archiv/screenshot20220705.jpg">05.07.2022</a> Ligaabschluss 2022<br>
				<a target="_blank"href="archiv/screenshot20220711.jpg">11.07.2022</a> Einladung aoMV 2022<br>
				<a target="_blank"href="archiv/screenshot20220717.jpg">17.07.2022</a> Nocturne 2022<br>
				<a target="_blank"href="archiv/screenshot20220729.jpg">29.07.2022</a> Bericht aoMV 2022<br>
				<a target="_blank"href="archiv/screenshot20220815.jpg">15.08.2022</a> LM TaT+Tir, Vorstand<br>
				<a target="_blank"href="archiv/screenshot20220828.jpg">28.08.2022</a> DM TaT+Tir, Chr.Riff<br>
				<a target="_blank"href="archiv/screenshot20220924.jpg">24.09.2022</a> Herbstturnier<br>
				<a target="_blank"href="archiv/screenshot20221015.jpg">15.10.2022</a> Oktoberfest<br>
				<a target="_blank"href="archiv/screenshot20221027.jpg">27.10.2022</a> Aufstieg, Mülbert<br>
				<a target="_blank"href="archiv/screenshot20221101.jpg">01.11.2022</a> Aufstieg, Jubiläumsturnier</p>

			<h2>2023</h2>

				<a target="_blank"href="archiv/screenshot20230324.jpg">24.03.2023</a> Mitgliederversammlung<br>
				<a target="_blank"href="archiv/screenshot20230402.jpg">02.04.2023</a> Frühlingsturnier 2023<br>
				<a target="_blank"href="archiv/screenshot20230407.jpg">07.04.2023</a> Pokal Cadrage 2023 Bergalingen</p>

        </div>
		
        <div id="Inhalt3">


				<a target="_blank"href="archiv/screenshot20230411.jpg">11.04.2023</a> Erneuerung Belag Boulodrome<br>
				<a target="_blank"href="archiv/screenshot20230415.jpg">15.04.2023</a> Start Sommercup 2023<br>
				<a target="_blank"href="archiv/screenshot20230421.jpg">21.04.2023</a> Nachruf Paula Jörger<br>
				<a target="_blank"href="archiv/screenshot20230512.jpg">12.05.2023</a> LM DM Sönke, Riff, Melnikoff<br>
				<a target="_blank"href="archiv/screenshot20230625.jpg">25.06.2023</a> Badische 2023<br>
				<a target="_blank"href="archiv/screenshot20230723.jpg">23.07.2023</a> Nocturne 2023<br>
				<a target="_blank"href="archiv/screenshot20230827.jpg">27.08.2023</a> DM Tireur Riff<br>
				<a target="_blank"href="archiv/screenshot20230916.jpg">16.09.2023</a> Pokal Schopfheim<br>
				<a target="_blank"href="archiv/screenshot20231001.jpg">01.10.2023</a> Herbstturnier 2023<br>
				<a target="_blank"href="archiv/screenshot20231022.jpg">22.10.2023</a> SC Abschluss, Oktoberfest<br>
				<a target="_blank"href="archiv/screenshot20231101.jpg">01.11.2023</a> Jubiläumsturnier 2023<br>
				<a target="_blank"href="archiv/screenshot20231119.jpg">19.11.2023</a> Pokal Viertelfinale<br>
				<a target="_blank"href="archiv/screenshot20231210.jpg">10.12.2023</a> Pokal Finale, Pfeiffer 80 J<br>
				<a target="_blank"href="archiv/screenshot20231226.jpg">26.12.2023</a> Tauschturnier</p>


			<h2>2024</h2>

				<a target="_blank"href="archiv/screenshot20240323.jpg">23.03.2024</a> Frühjahrsputzete<br>
				<a target="_blank"href="archiv/screenshot20240322.jpg">22.03.2024</a> MV 2024 Kurzbericht<br>
				<a target="_blank"href="archiv/screenshot20240407.jpg">07.04.2024</a> Frühjahrsturnier 2024<br>
				<a target="_blank"href="archiv/screenshot20240515.jpg">15.05.2024</a> neuer Pavillon<br>
				<a target="_blank"href="archiv/screenshot20240627.jpg">27.06.2024</a> 70. Haribo<br>
				<a target="_blank"href="archiv/screenshot20240713.jpg">13.07.2024</a> Ligasaison Abschluss 2024<br>
				<a target="_blank"href="archiv/screenshot20240727.jpg">27.07.2024</a> Nocturne 2024</p>
		</div>

	</main>
                <?php include('inc_fusszeile.php') ?>

</body>
</html>
