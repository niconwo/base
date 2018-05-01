<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=contrebande;charset=utf8', 'root', 'pangot');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}


$reponse = $bdd->query('SELECT * FROM contrebandier' );


while ($donnees = $reponse->fetch())

{

    echo  $donnees['nom']  . ' ' . $donnees['prenom'] . $donnees['nationnalite']  ;
}


$reponse->closeCursor();





?>
</body>
</html>
