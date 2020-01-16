<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Datei einlesen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="container-fluid">
<h1>Datei einlesen</h1>
<?php
/*
 * falls das Zeilenende der einzulesenden Datei nicht korrekt
 * erkannt werden sollte, dann sollte die folgende Anweisung
 * ausgeführt werden
 */
ini_set("auto_detect_line_endings", true);
/* Öffnen der Datei zum Lesen "r"
 * Datei muss im gleichen Verzeichnis liegen wie aufgabe6.php
 * andernfalls Pfadangabe ändern
 * @ unterdrückt evtl Warnungen
 */
$file = @fopen ( "./mockdatatext", "r" );
/*
 * wenn das Öffnen der Datei nicht funktioniert hat, ist $file FALSE
 * ansonsten steht der Dateizeiger am Anfang der ersten Zeile
 */


$i=0;

if (! $file) {
    echo "Es ist ein Problem beim Öffnen der Datei 'mockupdatatext' aufgetreten.";
} else {
    /*
     * feof - end of file
     * prüft, ob ein Dateizeiger am Ende der Datei steht
     */
    echo "<div class=\"card\"> <div class='card-body',><div class='col-sm'> <ul class=\"list-group\">";
    while ( ! feof ( $file ) ) {
        /*
         * fegts() liest eine Zeile einer Datei aus
         * fgets() gibt einen String zürück
         * nach Aufruf von fgets() steht der Dateizeiger
         * in der nächsten Zeile (außer, es wurde eine
         * Leselänge als 2. Parameter fgets übergeben)
         */



        if ($i==10){ //if Anweisung für den counter
            echo "</ul></div class='col-sm'></div>"; //Liste wird beendet, wenn i=10
            echo "<div class=\"card\"> <div class='card-body'> <ul class=\"list-group\">"; //neue Liste fängt an
            $i=0; //i wieder auf 0 setzen sonst macht er nicht weiter
        }
        $i++;



        $line1= fgets ( $file );
        $line2= fgets ($file);
        $line3= fgets ($file);
        fgets ($file);
        fgets ($file); //5 Zeile für die leere Zeile, kann man auch weglassen
        echo "<li class=\"list-group-item\">$line1 $line2 (<a href='mailto:' . $line3>$line3</a>) $i</li>";
        /*
         * Sie können für die Lösung der Aufgabe davon ausgehen,
         * dass jeder Datensatz aus 4 Zeilen besteht und dass zwischen
         * den einzelnen Datensätzen immer genau eine Leerzeile ist.
         */
    }
    echo "</ul> </div></div></div>";

    fclose ( $file );
}
?>
</body>
</html>