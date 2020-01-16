<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Aufgabe 7</title>
    <meta name="viewport" content=""width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style type="text/css">
        #Hintergrund
        {
            background-color:#F5F5DC;
            margin-top:2px;
            padding: 4px 4px;
            border-radius: 10px;
        }
        #EingabeOK
        {
            background-color:#F5F5DC;
            margin-top:2px;
            padding: 4px 4px;
            border-radius: 10px;
        }
        #roterHintergrund
        {
            background-color: #FFFFFF;
            margin-top: 2px;
            padding: 4px 4px;
            border-radius: 10px;
            color: #B22222;
        }

    </style>
</head>
<body>
<div class="container">
    <h2>Anmeldung</h2>
    <?php
    if($_POST)
    {
    $vorname = filter_var($_POST["vorname"], FILTER_SANITIZE_STRING);
    $nachname = filter_var($_POST["nachname"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $studiengang = filter_var($_POST["studiengang"], FILTER_SANITIZE_STRING);

    if (!$vorname) {
        $fehler = "<li>Vorname fehlt</li>";
    }
    if (!$nachname) {
        $fehler = "<li>Nachname fehlt</li>";
    }
    if (!$email) {
        $fehler = "<li>Email fehlt</li>";
    }


    if (empty($fehler))
    {
    ?>
    <div id="EingabeOK">
        Herzlichen Dank <?php echo $vorname . "" . $nachname; ?> vom Studiengang <?php echo $studiengang; ?> <br> Wir
        haben eine Bestätigung ihrer Anmeldung an die E-Mail-Adresse
        <?php echo $email; ?> versendet.
        <a href="aufgabe7.php">Zurück</a>
    </div>
        <?php
    }

    else{
        ?>
        <div id="Hintergrund">
            Bitte korrigieren Sie Ihre Eingaben: <br>
            <div id="roterHintergrund">
                <?php
                echo "<ul class?\92 list-group\92>" . $fehler . "</ul>";
                ?>
            </div>
        </div>

    <?php
    include("errorformular.php");
    }
    }
    else
        {
        include("formular.php");
    }

    ?>

</div>

</body>

</html>