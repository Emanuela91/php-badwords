<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>

    <style>

    </style>
    <?php
    // Paragrafo "lorem"
    $phar = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae in quo dolore? Adipisci a amet doloremque beatae. Repellendus a accusantium quibusdam hic eaque corrupti aut. Exercitationem non perferendis et consequuntur.";
    // trovo la lunghezza del paragrafo
    $lng = strlen($phar);
    ?>
</head>

<body>
    <p>
        <?php
        // stampo la lunghezza del paragrafo
        echo $phar . " : " . $lng;
        ?>
    </p>

</body>

</html>