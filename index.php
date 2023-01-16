<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
<form method="get" action="user.php">
    <span>Exo1 // </span>
    <label for="id-nom">Nom :</label>
    <input id="id-nom" name="nom" type="text">
    <label for="id-prenom">Prénom :</label>
    <input id="id-prenom" name="prenom" type="text">

    <input type="submit" value="Envoyer">
</form>

<form method="post" action="user.php">
    <span>Exo2 // </span>
    <label for="id-nom">Nom :</label>
    <input id="id-nom" name="nom" type="text">
    <label for="id-prenom">Prénom :</label>
    <input id="id-prenom" name="prenom" type="text">

    <input type="submit" value="Envoyer">
</form>

<form method="post" action="user.php">
    <span>Exo5 // </span>
    <select name="sexe">
        <option>masculin</option>
        <option>féminin</option>
    </select>
    <label for="id-nom">Nom :</label>
    <input id="id-nom" name="nom2" type="text">
    <label for="id-prenom">Prénom :</label>
    <input id="id-prenom" name="prenom2" type="text">
    <input type="file" name="file">

    <input type="submit" value="Envoyer">
</form>
</body>
</html>
