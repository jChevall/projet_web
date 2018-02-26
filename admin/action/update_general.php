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

require_once '../../class/bdd.php';

spl_autoload_register('autoloader');

function autoloader($classname) {
    include_once '../../class/' . $classname . '.php';
}

$website = new website("../../");

$website->title = $_POST['input_site_title'];
$website->accueil_title = $_POST['input_accueil_title'];
$website->accueil_text = $_POST['input_accueil_text'];
$website->mail_to = $_POST['input_site_mail'];

$website->save();

header('Location: ../index.php');
exit();