<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>

    <style>

    </style>

</head>

<body>
    <p>
        <?php
        // Paragrafo "lorem"
        $phar = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae in quo dolore? Adipisci a amet doloremque beatae. Repellendus a accusantium quibusdam hic eaque corrupti aut. Exercitationem non perferendis et consequuntur.";

        // trovo la lunghezza del paragrafo
        $lng = strlen($phar);
        // stampo la lunghezza del paragrafo
        echo $phar . " : " . $lng;

        // parola censurata
        $cens = $_GET['cs'];
        echo "<br>";
        // stampo la parola censurata
        // echo "Parola Censurata: " . $cens;
        // echo "<br>";
        
        // asterischi sulla badword
        $newPhar = str_replace($cens, "***", $phar);
        // nuova lunghezza del paragrafo
        $newLng = strlen($newPhar);
        // stampo il nuovo paragrafo
        // echo $newPhar . " : " . $newLng;
        
        // paragrafo che compare quando c'è la parola censurata
        if (isset($cens)) {
            echo "Parola Censurata: " . $cens;
            echo "<br>";
            echo $newPhar . " : " . $newLng;
        }

        ?>
    </p>

</body>

</html>