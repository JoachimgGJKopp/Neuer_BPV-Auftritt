<!DOCTYPE html>
<html lang="de">
<head>
    <title>Dokumente</title>
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

    <img src="images/TeasMeinung.jpg" title="Rhododendren im Seepark" alt="Rhododendren im Seepark">

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
    

    <div id="beginner" style=margin-top:2em>

        <h2>Erwin Müller aus Mühlacker schreibt uns:</h2>
        <p>Wir sind derzeit schon auf der Rheintal-Autobahn unterwegs nach Süden, nicht auf einer 
        Urlaubsfahrt, sondern mit unserer 1. Mannschaft zum Ligaspieltag in Freiburg, zum Boulodrome 
        im Freiburger Seepark, in der Schlettstadter Straße 45. Wir kommen flott voran, keine 
        Baustellen auf der Autobahn, das hat schon was. Nur ein paar dunkle Wolken, dann wieder 
        ist die A5 etwas nass, doch dann lichtet es sich, und schon geht es durch ein paar 
        Vorortstraßen, - die Baustellen haben uns hier eingeholt -, und das Navi spielt verrückt. 
        Wir kamen an, wo wir hin wollten, ohne Umwege, und wer auf dieser Bouleanlage noch nicht 
        gewesen ist, der hat in seinem Leben etwas versäumt.</p>

		<p>Ich bin überwältigt von der Lage und den riesigen dickstämmigen Bäumen, in voller 
        Blätterpracht, die überall herumstehen, ohne im Weg zu sein, und den 26 kreativ ins Gelände 
        eingebetteten Plätzen. 18 davon, wie parademäßig in Reih und Glied, und die restlichen in 
        interessant geometrischen Formen dazwischen verteilt, geben dem Gesamtbild eine 
        künstlerische Leichtigkeit und ermuntern manche zum Kugeln werfen; auch mit Bänken, 
        Stühlen und Tischen drum herum, die zum verweilen und zuschauen einladen, wurde nicht gespart.</p>

 		<p>Da könnte man wirklich Kind und Kegel, ja auch die Oma mit den Enkelkindern mitbringen, 
        denn neben schönen sonnigen und auch schattigen Plätzchen, ist für das leibliche Wohl 
        reichlich gesorgt. Und wenn man sich so hinsetzt, den Blick nach Süden gewandt, kann man 
        außerhalb des Boulodromes gelegen, - nur von einem Weg getrennt, auf dem ab und zu eine 
        sportlich modern knapp bekleidete Joggerin daher trabt, und zwischendurch auch mal ein 
        Mann -, an einem Steilhang einen herrlichen Rhododendronwald, in allen Farben leuchtend 
        bestaunen. Doch nun genug geschwelgt, die Pflicht ruft, denn wir sind ja zum Boule 
        spielen gekommen ...</p>

    </div>

    <?php include('inc_fusszeile.php') ?>


</body>
</html>

