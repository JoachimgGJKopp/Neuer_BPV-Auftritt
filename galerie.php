<?php include 'getFolder.php';



$ordner = 'imagefolder/' . getFolder(); // Pfad zu deinem Bilder-Ordner

// echo $ordner;

// Alle Bilder mit dem Endung big.jpg finden
$bilder_gross = glob($ordner . '/*big.jpg');

// Array für kleine Bilder erstellen
$bilder_klein = [];

foreach($bilder_gross as $bild_gross) {
    $bild_name = basename($bild_gross, 'big.jpg'); // Bildname ohne big.jpg
    $bild_klein = $ordner . '/' . $bild_name . 'small.jpg'; // Pfad für das kleine Bild
    if (file_exists($bild_klein)) { // Überprüfen, ob die kleine Bilddatei existiert
        $bilder_klein[] = [
            'gross' => $bild_gross,
            'klein' => $bild_klein
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../geruest_css.css">
  <title>
  <?php echo getFolder(true); ?>
  </title>

  <?php include('header.php'); ?>

    <!-- jQuery einbinden -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <!-- Fancybox CSS einbinden -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  
  <style>
    /* Einfaches Styling für die Galerie */
    .gallery img {
      width: 100%;
      height: auto;
      max-width: 100px;
    }

    body {
        max-width: 100vw;
    }
  </style>
</head>
<body>
    
    <button id="btnMenu">
        <img src="images/menu.png" alt="Menu">
    </button>

    <nav id="navigation" style="margin-left: 3em;">
        <?php  include ('navigation.php'); ?>
    </nav>

    <nav2 id="navigation2">
        <?php include ('navigation2.php'); ?>
    </nav2>

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

    <h1 style="margin: 1em 0em 0em 1.5em; color: rgb(3, 75, 3);">
      <?php echo getFolder(true); ?>
    </h1>
 <!-- Bildergalerie -->
 <div class="gallery" style="margin: 2em 1em 0em 3em;">
    <?php foreach($bilder_klein as $bilder): ?>
      <a data-fancybox="gallery" href="<?php echo $bilder['gross']; ?>">
        <img src="<?php echo $bilder['klein']; ?>" alt="<?php echo basename($bilder['gross']); ?>">
      </a>
    <?php endforeach; ?>
  </div>

  <!-- Fancybox JS einbinden -->
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script>
        $(document).ready(function() {
        $('[data-fancybox="gallery"]').fancybox();
        });
    </script>

</body>

</html>