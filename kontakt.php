<?php

$erfolg = " ";
$emailerror =  " ";
$nachrichterror = " ";

$empfaenger = "nikheyder@hotmail.com";
$bcc = "cfakler61@gmail.com";
//define ("EMPFAENGER","cfakler61@gmail.com","KassenwartBPV@gmx.de");
define("BETREFF","WEB-KONTAKT BPV Freiburg");
define("ABSENDER","nikheyder@hotmail.com");

$from = ".ABSENDER";

$header = "From: $from\r\n" .
          "Bcc: $bcc\r\n";

if ($_POST["send"]) {
    $email = $_POST["email"];
    $nachricht = $_POST["nachricht"];
    $ok = true;
    
    if (empty($email)) {
        $emailerror = "Bitte geben Sie eine Emailadresse an.";
        $ok = false;
    }
    
    if (empty($nachricht)) {
        $nachrichterror = "Bitte geben Sie eine Nachricht an.";
        $ok = false;
    }
    
    if ($ok) {
        /*mail ($empfaenger,BETREFF,$email,$nachricht,"From: ".ABSENDER); //or die ($erfolg = "Schrott"); */
		mail ($empfaenger,BETREFF,$email,$nachricht,$header);
		//mail ($empfaenger,BETREFF,$email,$nachricht,$header);
        $erfolg = "<p class=\" success\">Danke f&uuml;r Ihre Nachricht. Ich melde mich in K&uuml;rze.</p>";
    }
}


?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
     
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<?php include ('header.php'); ?>
</head>
<body>
<div id="main-container">
    <div id="branding">
        <img src="images/logo.august.3.png" alt="Logo Badischer Petanque Verein Freiburg e.V." title="Badischer Petanque Verein"/>
    </div>
            <ul>
                <?php include('inc_navi.php') ?>
            </ul>
    
    <div id="teaserbild">
        <img src="images/TeasKontakt.jpg" alt="Bild:"Kontakt zum Seepark" title="Reiche mir deine Hand" />
    </div>
        <div id="inhalt">
            <div id="inhalt-kontackt">
            <h1>Kontaktieren Sie den Verein</h1>
            <?php if ($erfolg) { print $erfolg; } ?>
            <form action="kontakt.php"method="post">
            
                <table>
                    <tr <?php if ($emailerror) { print"class=\"error\""; } ?>>
                        <th>Ihre Mail-Adresse:</th>
                        <td><?php if ($emailerror) { print $emailerror."<br/>"; } ?><input type="text" name="email"/></td>
                    </tr>
                    
                    <tr <?php if ($nachrichterror) { print"class=\"error\""; } ?>>
                        <th>Ihre Nachricht:</th>
                        <td><?php if ($nachrichterror) { print $nachrichterror."<br/>"; } ?><textarea name="nachricht" rows="7" cols="35"></textarea></td>
                    </tr>
                    
                    <tr>
                        <th>Daten korrekt?</th>
                        <td><input name="send" type="submit" value="Nachricht senden" /></td>
                    
                    </tr>
                </table>
            
            </form>
            
            </div>
        
            <div id="inhalt-unter">
                <div id="navigation-unter">
                <h2>Adresse und Kontaktdaten</h2>
                <address>Nik Heyder<br/>Im Glaser 34<br/>79111 Freiburg<br/>Deutschland<br/>Telefon 0176 442 06 443<br>nikheyder@hotmail.com</address>
            </div>
            </div>
 
                <?php include('inc_fusszeile.php') ?>        
        
        </div>
        </div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12905793-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>

