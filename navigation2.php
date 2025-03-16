    <!-- Mobile -->

	<ul>
        <li><a href="index.php">Home</a></li>

        <li>
            <a href="#">Équipes</a>
            <ul class="dropdown">
                <li><a href="mannschaft.1.php">1. Mannschaft</a></li>
                <li><a href="mannschaft.2.php">2. Mannschaft</a></li>
                <li><a href="mannschaft.3.php">3. Mannschaft</a></li>
                <li><a href="mannschaft.4.php">4. Mannschaft</a></li>
                <li><a href="mannschaft.5.php">5. Mannschaft</a></li>
            </ul>
        </li>

        <li>
            <a href="#">Verein</a>
            <ul class="dropdown">
                <li><a href="mvorstand.php">Vorstand</a></li>
                <li><a href="adresse 2.php">Adresse / Anfahrt</a></li>
                <li><a href="info.php">Informationen</a></li>
                <li><a href="msponsoren.php">Sponsoren</a></li>
                <li><a target="_blank"href="dokumente/Satzung2023.pdf">Satzung</a></li>
                <li><a target="_blank"href="dokumente/MAntragEinwillBeitragso2025.pdf">Mitgliedsantrag</a></li>
                <li><a target="_blank"href="dokumente/Datenschutzhinweis 2022.pdf">Datenschutzhinweis</a></li>
                <li><a target="_blank"href="dokumente/Platzordnung.pdf">Platzordnung</a></li>
                <li><a target="_blank"href="dokumente/Bewirtungsordnung.pdf">Bewirtungsordnung</a></li>
            </ul>
        </li>

        <li>
            <a href="#">Turniere</a>
            <ul class="dropdown">
                <li><a href="dokumente/Turnierplan2025.pdf">Turnierplan 2025</a></li>
                <li><a href="turniere2.php">Sommercup</a></li>
            </ul>
        </li>

        <li>
            <a href="#">Ergebnisse</a>
            <ul class="dropdown">
                <li><a href="ergebnis13.php">Jubiläumsturnier 2024</a></li>
                <li><a href="ergebnis12.php">Herbstturnier 2024</a></li>
		        <li><a href="ergebnis11.php">Frühlingsturnier 2024</a></li>
                <li><a href="ergebnis10.php">Jubiläumsturnier 2023</a></li>
                <li><a href="ergebnis09.php">Herbstturnier 2023</a></li>   
	            <li><a href="ergebnis08.php">Badische Meisterschaften 2023</a></li>
	            <li><a href="ergebnis07.php">Frühlingsturnier 2023</a></li> 
                <li><a href="ergebnis06.php">Jubiläumsturnier 2022</a></li>
                <li><a href="ergebnis05.php">Herbstturnier 2022</a></li>
            </ul>
        </li>

        <li>
            <a href="#">Galerien</a>

            <?php
                $galerien = [
                    'Herbstfest 2024',
                    'Jubiläumsturnier 2024',
                    'Herbstturnier 2024',
                    'Frühlingsturnier 2024',
                    'Jubiläumsturnier 2023',
                    'Oktoberfest 2023',
                    'Herbstturnier 2023',
                    'Nocturne 2023',
                    'Badische Meisterschaften 2023',
                    'Frühlingsturnier 2023',
                    'Jubiläumsturnier 2022',
                    'Oktoberfest 2022',
                    'Herbstturnier 2022',
                ];


                echo '<ul class="dropdown">';
                foreach ($galerien as $galerie) {
                    // Ersetze Leerzeichen durch Unterstriche im Dateinamen
                    $folderName = str_replace(' ', '_', $galerie);
                    echo '<li><a href="galerie.php?folder=' . $folderName . '">' . $galerie . '</a></li>';
                }
                echo '</ul>';
            ?>

	    </li>

        <li><a href="liga.php">Liga</a></li>

        <li><a href="beginners.php">Einsteiger</a></li>

        <li><a href="links.php">Links&nbsp;</a></li>

        <li>
            <a href="#">Dokumente</a>
            <ul class="dropdown">
                <li><a href="dokumente.php">Dokumente</a></li>
                <li><a href="archiv2018-2024.php">Archiv</a> 
            </ul>
        </li>            
        
        <li><a href="kontakt.php">Kontakt</a></li>

        <li>
            <a href="#">Diverses</a>
            <ul class="dropdown">
                <li><a href="meinung.php">Leserbrief zum Boulodrome</a></li>
                <li><a href="hexen.php">els&auml;sser Hexen</a></li>
	            <li><a target="_blank"href="https://tsg-woersdorf-petanque.de/maenner-mit-putzlappen/">Männer mit Putzlappen</a></li>
            </ul>
        </li>
    </ul>

