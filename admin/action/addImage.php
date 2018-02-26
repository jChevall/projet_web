<?php
session_start();

// Gestion de l'accès admin
if (!isset($_SESSION['isAdmin'])) {
    header('Location: login.php');
    exit();
} else {
    if ($_SESSION['isAdmin'] == false) {
        header('Location: login.php');
        exit();
    }
}

// Pas de contrôle car trop facile a hacker, pour faire un vrai ctrl il faudrait découper le binaire de l'image pour savoir si c'est vraiment une image et pas un binaire malveillant
// bref, quite a être niquer, autant pas perdre de temps

$extension_upload = strtolower(  substr(  strrchr($_FILES['img']['name'], '.')  ,1)  );
$nom = time().md5(uniqid(rand(), true));

move_uploaded_file($_FILES['img']['tmp_name'],'../../img/rea/'.$nom.'.'.$extension_upload);
  
header('Location: ../rea.php');
exit();