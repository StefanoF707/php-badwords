<?php

    $text = "Dodici voci urlavano rabbiose, ed erano tutte uguali. Non c'era più alcun dubbio su ciò che era successo alla faccia dei maiali. Dall'esterno le creature volgevano lo sguardo dal maiale all'uomo, e dall'uomo al maiale, e ancora dal maiale all'uomo: ma era già impossibile distinguere l'uno dall'altro.";

    $badWord = $_GET["badWord"];
    $censoredWord = "maiale";

    $censoredText = str_replace($badWord, "***", $text);

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHP Badwords</title>
    </head>
    <body>

        <h2>Citazione:</h2>
        <p><?php echo $text ?></p>

        <h2>Lunghezza:</h2>
        <p>La lunghezza della citazione è di <strong><?php echo strlen($text) ?></strong> caratteri.</p>

        <h2>Citazione censurata:</h2>
        <p><?php echo $censoredText ?></p>

        <a href="?badWord=<?php echo $censoredWord ?>"><strong>Clicca per censurare</strong></a>

    </body>
</html>
