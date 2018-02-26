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

$website->contact_name = $_POST['input_contact_name'];
$website->contact_tel = $_POST['input_contact_tel'];
$website->contact_mail = $_POST['input_contact_mail'];
$website->contact_facebook = $_POST['input_contact_facebook'];
$website->contact_twitter = $_POST['input_contact_twitter'];

$website->save();

header('Location: ../index.php');
exit();