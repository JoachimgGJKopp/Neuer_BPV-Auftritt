<?php
function getFolder($replaceUnderscores = false) {
    // Überprüfe, ob der 'folder'-Parameter in der URL gesetzt ist
    if (isset($_GET['folder'])) {
        // Schütze den Wert mit htmlspecialchars
        $folder = htmlspecialchars($_GET['folder']);
        
        // Validierung: Keine Verwendung von .. oder /
        if (strpos($folder, '..') !== false || strpos($folder, '/') !== false) {
            return "Zugriff verweigert. Ungültiger Ordner.";
        }
        
        // Ersetze Unterstriche durch Leerzeichen, wenn $replaceUnderscores true ist
        if ($replaceUnderscores) {
            return str_replace('_', ' ', $folder);
        }
        
        // Gib den ursprünglichen Wert zurück, wenn $replaceUnderscores false ist
        return $folder;
    } else {
        // Gib eine Standardnachricht zurück, falls kein Parameter gesetzt ist
        return "Kein Ordner ausgewählt.";
    }
}
?>
