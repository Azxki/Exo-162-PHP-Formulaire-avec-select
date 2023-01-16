<?php

if (isset($_GET['nom']) & isset($_GET['prenom'])) {
    echo "Mon nom est " . $_GET['nom'] . ", mon prénom est " . $_GET['prenom'];
}

if (isset($_POST['nom']) & isset($_POST['prenom'])) {
    echo "Mon nom est " . $_POST['nom'] . ", mon prénom est " . $_POST['prenom'];
}

$file = $_POST['file'];

if (isset($_POST['nom2']) & isset($_POST['prenom2']) & isset($_POST['sexe'])) {
    echo "Mon nom est " . $_POST['nom2'] . ", mon prénom est " . $_POST['prenom2'] . " et je suis de sexe " .
        $_POST['sexe'] . " <br> <br> le fichier chargé à pour nom et extension : " . $_POST['file'];

    if ($file === pathinfo($file['filename + .png'])){
        echo $file;
    }
}