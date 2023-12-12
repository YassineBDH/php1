<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document..</title>
</head>
<div class="exo"></div>
<body>
    <!-- <h1>noofs</h1> -->
    <?php
    $nom = 'boudouh';
    $prenom = 'Yassine';
    $age = 31;
    $taille = 1.83;
    $ageM= $age+2;
    $maPhrase = "Mon nom est $nom $prenom j'ai $age ans, ma taille est $taille m ,mon âge dans 2ans est $ageM ";
    echo $maPhrase ;
    var_dump($maPhrase);
    
    $Mathéo = 15.4;
    $Nathan = 9.2;
    $Léo = 16.1;
    $Maxime = 12.6;
    $moy = ($Mathéo+$Nathan+$Léo+$Maxime)/4;
    var_dump($moy);
    ;
    $unchiffre = rand(1,12000);
    echo $unchiffre;
    ?>
<div></div>
</body>
</html>