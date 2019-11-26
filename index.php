<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $objet = 'table';
    $message = 'coucou !';
    echo $objet . ' ' . $message;
    $lastname = 'Evain';
    $firstname = 'Julien';
    $age = '38';
    echo $lastname . ' ' . $firstname . ' ' . $age;
    $km = 1;
    echo $km;
    $km = 3;
    echo $km;
    $km = 125;
    echo $km;
    $name = 'Juju';
    echo $name;
    $answer = 'Yes'; 
    $yes = 'vous avez répondu "oui"';
    $no = 'vous avez répondu "non"';
        if($answer == 'Yes')
    { 
            echo $yes;
    } 
    else
    {
        echo $no;
    }
    $number = '140';
    echo ( $number + 30 ) / 2;
    ?>
    <p><?= $objet . ' ' . $message ?></p>
    <p><?= $lastname . ' ' . $firstname . ' ' . $age ?></p>
    <p><?= $km ?></p>
    <p>Bonjour <?= $name ?>, comment vas-tu ?</p>
    <p>Vous avez répondu '<?= $answer ?>' </p>
    <p><?= ( $number + 30 ) / 2 ?></p>
</body>
</html>