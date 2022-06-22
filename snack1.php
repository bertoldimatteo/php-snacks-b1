<?php

$partite = [
    [
        'squadraCasa' => 'OlimpiaMilano',
        'squadraOspite' => 'Cantù',
        'puntiCasa' => 55,
        'puntiOspite' => 60,
    ],
    [
        'squadraCasa' => 'VirtusPallacanestro',
        'squadraOspite' => 'DinamoSassari',
        'puntiCasa' => 40,
        'puntiOspite' => 55,
    ],
    [
        'squadraCasa' => 'ReyerVenezia',
        'squadraOspite' => 'Victoria Libertas',
        'puntiCasa' => 60,
        'puntiOspite' => 35,
    ],
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <ul>
        <?php for ($i = 0; $i < count($partite); $i++){ ?>
            <li><?php echo $partite[$i]['squadraCasa'];?> - <?php echo $partite[$i]['squadraOspite'];?> | <?php echo $partite[$i]['puntiCasa'];?> - <?php echo $partite[$i]['puntiOspite'];?></li>
        <?php } ?>    
    </ul>
</body>
</html>