<!DOCTYPE html>
<html lang="de">
<head>
    <title>Links</title>
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
        <img src="images/TeasHome.jpg" title="Frühling auf dem Platz" alt="Frühling auf dem Platz">
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
    <div id="teaserbild">
        <img src="images/TeasLinkAbend.jpg" alt="Bild:"Abendhimmel überm Seepark" title="Abendhimmel überm Seepark" />
    </div>
        
        <div id="links">
            <div id="linkspalte1">
            <h2>Verb&auml;nde</h2>
            
                   <ul>
                       <li><a target="_blank"href="http://www.petanque-bw.de">BBPV Baden-Württemberg</a></li>
                       <li><a target="_blank"href="http://www.petanque-dpv.de">Deutscher Petanque Verband</a></li>
                       <li><a target="_blank"href="https://www.ffpjp.org/">Französicher Petanque Verband</a></li>
                       <li><a target="_blank"href="http://www.fipjp.org/">F.I.P.J.P. - F&eacute;d&eacute;ration Internatio- nale de P&eacute;tanque et Jeu Provençal</a></li>
                  </ul>

            <h2>Verband Regional</h2>
            
                   <ul>
                       <li><a target="_blank"href="http://www.Rhein-Neckar-Liga.de/">Ligaregion Rhein-Neckar</a></li>
                       <li><a target="_blank"href="https://www.mittelbaden-boule.de/">Ligaregion Mittelbaden</a></li>
                       <li><a target="_blank"href="http://bouleclub-stuttgart.de/index.php?id=567">Nord-W&uuml;rttemberg</a></li>
                       <li><a target="_blank"href="https://petanque-bw.de/liga-pokal/rl-nord-2-2-2-3-2/">Schwarzwald-Oberrhein</a></li>
                  </ul>

	    <h2>Turnierkalender</h2>

		  <ul>
                       <li><a target="_blank"href="http://www.petanque-bw.de/index.php?id=1427">BBPV-Turnierkalender</a></li>
                       <li><a target="_blank"href="https://petanque-aktuell.de/termine/">Pétanque aktuell Terminkalender</a></li>
		      
             </div>
             <div id="linkspalte2">
             <h2>Vereine</h2>
                     <ul>
                       <li><a target="_blank"href="http://www.bc-ettenheim.de">Boule Club Ettenheim</a></li>
                       <li><a target="_blank"href="https://djk-feldkirch.de/">DJK-Bouler Feldkirch</a></li>
                       <li><a target="_blank"href="http://www.le-cochonnet.de/">Le Cochonnet Schopfheim</a></li>
                       <li><a target="_blank"href="http://www.boule-march.de">Boule Petanque March</a></li>
                       <li><a target="_blank"href="http://www.bouleclub-weisweil.de">Boule Club Weisweil</a></li>
                       <li><a target="_blank"href="https://www.alemannia-zaehringen.de/boule/">Boule Zähringen</a></li>
                       <li><a target="_blank"href="https://www.naturbad-sulz.de/boule/">Boule im Naturbad Sulz</a></li>
                       <li><a target="_blank"href="https://www.boule95.de/">Boule 95 Denzlingen</a></li>
                       <li><a target="_blank"href="http://www.latschariboule.de/index.php">Latschari Boule Gutach</a></li>
                       <li><a target="_blank"href="http://www.petanqueverein-kirchzarten.de">Petanque Verein Kirchzarten</a></li>
                       <li><a target="_blank"href="http://www.ft1844-freiburg.de/petanque">FT 1844 Freiburg</a></li>
                       <li><a target="_blank"href="http://www.boulefreunde-rheinhausen-2010.de">Boulefreunde-Rheinhausen</a></li>
                       <li><a target="_blank"href="http://www.boule13waldkirch.de/">Boule 13 Waldkirch e.V.</a></li>
                    </ul>
             </div>
        
             <div id="linkspalte3">
             <h2>Boule-Spieler</h2>
                     <ul>
                       <li><a target="_blank"href="http://www.boulistenaute.com/actualite-joueurs-petanque-portrait-20-rocher-dylan-benji-4760">Spieler Dylan Rocher</a></li>
                       <li><a target="_blank"href="http://www.quintaisport.fr/">Spieler Phillippe Quintais</a></li>
                       <li><a target="_blank"href="http://bruno.leboursicaud.free.fr/">Spieler Bruno Leboursicaud</a></li>
                  </ul>
	
            <h2>Boulekurse</h2>
                   <ul>
                       <li><a target="_blank"href="http://www.boulekurse.de">Training Sönke Backens</a></li>
                  </ul>
	
            <h2>Kugelverk&auml;ufer</h2>
                   <ul>
                       <li><a target="_blank"href="https://www.bouleundwein.de/">Boule und Wein Frank Höfer</a></li>
                       <BR CLEAR="left"><li><a target="_blank"href="http://www.boule-petanque.de">Boule-Maus</a></li>
                       <BR CLEAR="left"><li><a target="_blank"href="http://www.boulesmatz.de/">Boules Matz</a></li>
                       <BR CLEAR="left"><li><a target="_blank"href="http://www.boule-partner.de">Boule Partner</a></li>
                       <BR CLEAR="left"><li><a target="_blank"href="http://www.bouleaufer.de/">Boule au fer</a></li>
                       <BR CLEAR="left"><li><a target="_blank"href="http://www.boule.ch/">Boule.ch </a></li>
                       <BR CLEAR="left"><li><a target="_blank"href="http://www.bouli.de/">Bouli.de</a></li>
                  </ul>

            </div>
        
            <div id="linkspalte4">
            <h2>Literatur / Video</h2>
                   <ul>
                       <li><a target="_blank"href="http://www.buchhandlunghenzler.de/bhneu/literaturliste_boule/literaturliste.htm">Literaturliste Boule der<BR>Buchhandlung Henzler</a></li>
		       <li><a target="_blank"href="http://www.aufershop.de/Essay.php">Essays Boule au fer</a></li>
                       <li><a target="_blank"href="http://www.videos-petanque.fr/top_videos.html">Video P&eacute;tanque</a></li>
                       <BR CLEAR="left"><li><a target="_blank"href="http://citesport.com/fr/petanque/programme-tv.html">Citesport Pétanque TV</a></li>
                  </ul>
            <h2>Kugelhersteller</h2>
                   <ul>
                       <li><a target="_blank"href="http://www.obut.com/">Hersteller Obut</a></li>
                       <li><a target="_blank"href="http://www.boules-jb.com/">Hersteller JB</a></li>
                       <li><a target="_blank"href="http://www.laboulenoire.com/">Hersteller Boule Noir</a></li>
                       <li><a target="_blank"href="http://www.laboulebleue.fr/">Hersteller Boule Bleu</a></li>
                       <li><a target="_blank"href="http://www.labouleintegrale.com/">Hersteller Integrale</a></li>
                       <li><a target="_blank"href="http://www.ms-petanque.com/">Hersteller MS</a></li>
                       <li><a target="_blank"href="http://www.bocceunibloc.it/">Hersteller Unibloc</a></li>
                       <li><a target="_blank"href="http://www.indoor-boules.de/">Hersteller Indoor Boules</a></li>
                  </ul>
            </div>
            
                <?php include('inc_fusszeile.php') ?>
   
        </div>
                
        
        </div>
        </div>
    </div>
</div>
</body>
</html>

