
    <div>           <!-- Desktop -->

            <li><a href="index.php">Home&nbsp;&nbsp;</a></li>

            <li><span>Équipes</span>
            <ul>
                <li><a href="mannschaft.1.php">1. Mannschaft</a></li>
                <li><a href="mannschaft.2.php">2. Mannschaft</a></li>
                <li><a href="mannschaft.3.php">3. Mannschaft</a></li>
                <li><a href="mannschaft.4.php">4. Mannschaft</a></li>
                <li><a href="mannschaft.5.php">5. Mannschaft</a></li>
            </ul>
            </li>

            <li><span>Verein</span>
        	<ul>
                <li><a href="dvorstand.php">Vorstand</a></li>
                <li><a href="adresse 2.php">Adresse / Anfahrt</a></li>
                <li><a href="info.php">Informationen</a></li>
                <li><a href="dsponsoren.php">Sponsoren</a></li>
                <li><a target="_blank"href="dokumente/Satzung2023.pdf">Satzung</a></li>
                <li><a target="_blank"href="dokumente/MAntragEinwillBeitragso2022.pdf">Mitgliedsantrag</a></li>
                <li><a target="_blank"href="dokumente/Datenschutzhinweis 2022.pdf">Datenschutzhinweis</a></li>
                <li><a target="_blank"href="dokumente/Platzordnung.pdf">Platzordnung</a></li>
                <li><a target="_blank"href="dokumente/Bewirtungsordnung.pdf">Bewirtungsordnung</a></li>
		    </ul>
            </li> 

            <li><span>Turniere</span>
                <ul>
                    <li><a href="images/Turnierplan2024.pdf">Turnierplan 2024</a></li>
                    <li><a href="turniere2.php">Sommercup</a></li>
                </ul>
            </li>

            <li><span>Ergebnisse</span>
            <ul>
                <li><a href="ergebnis12.php">Herbstturnier 2024</a></li>
		        <li><a href="ergebnis11.php">Frühlingsturnier 2024</a></li>
                <li><a href="ergebnis10.php">Jubiläumsturnier 2023</a></li>
                <li><a href="ergebnis09.php">Herbstturnier 2023</a></li>   
	            <li><a href="ergebnis08.php">Badische Meisterschaften 2023</a></li>
	            <li><a href="ergebnis07.php">Frühlingsturnier 2023</a></li> 
                <li><a href="ergebnis06.php">Jubiläumsturnier 2022</a></li>
                <li><a href="ergebnis05.php">Herbstturnier 2022</a></li>
                <li><a href="ergebnis04.php">Jubiläumsturnier 2019</a></li>
                <li><a href="ergebnis03.php">Herbstturnier 2019</a></li>
	            <li><a href="ergebnis02.php">Badische Meisterschaften 2019</a></li>
	            <li><a href="ergebnis01.php">Frühlingsturnier 2019</a></li>
            </ul>
            </li>

            <li><span>Galerien</span>
            <?php
                $galerien = [
                    'Herbstturnier 2024',
                    'Frühlingsturnier 2024',
                    'Jubiläumsturnier 2023',
                    'Oktoberfest 2023',
                    'Herbstturnier 2023',
                    'Nocturne 2023',
                    'Badische Meisterschaften 2023',
                    '2. Großspieltag RL Süd 2023',
                    'Frühlingsturnier 2023',
                    'Jubiläumsturnier 2022',
                    'Oktoberfest 2022',
                    'Herbstturnier 2022',
                    'Jubiläumsturnier 2019',
                    'Herbstturnier 2019',
                    'Badische Meisterschaften 2019',
                    'Frühlingsturnier am 24. März 2019'
                ];

                echo '<ul>';
                foreach ($galerien as $galerie) {
                    // Ersetze Leerzeichen durch Unterstriche im Dateinamen
                    $folderName = str_replace(' ', '_', $galerie);
                    echo '<li><a href="galerie.php?folder=' . $folderName . '">' . $galerie . '</a></li>';
                }
                echo '</ul>';
            ?>

	        </li>

            <li><a href="liga.php">Liga&nbsp;</a></li>

            <li><span>Einsteiger</span>
            <ul>
                <li><a href="beginners.php">Informationen zum Beginn</a></li>
                <li><a href="images/regeln.pdf"><img src="images/pdf.gif"alt="pdf download" title="pdf download"/> &nbsp;&nbsp;so geht das Spiel</a></li>
            </ul>
            </li>

            <li><a href="links.php">Links&nbsp;</a></li>

            <li><span>Dokumente</span>
            <ul>
                <li><a href="dokumente.php">Dokumente</a></li>
                <li><a href="archiv.php">Archiv</a> 
            </ul>
        	</li>

            <li><a href="kontakt.php">Kontakt&nbsp;</a></li>

            <li><span>Diverses</span>
            <ul>
                <li><a href="meinung.php">Leserbrief zum Boulodrome</a></li>
                <li><a href="hexen.php">els&auml;sser Hexen</a></li>
	            <li><a target="_blank"href="https://tsg-woersdorf-petanque.de/maenner-mit-putzlappen/">Männer mit Putzlappen</a></li>
            </ul>
            </li>
    </div>

