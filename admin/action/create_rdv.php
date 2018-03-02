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

$cours = new cours();

$cours->sCoursName = $_POST['input_rdv_title'];
$cours->sCoursDesc = $_POST['input_rdv_text'];
$cours->dCoursDate = $_POST['input_rdv_date'];
$cours->iCoursMax = $_POST['input_rdv_max'];


$cours->create();

header('Location: ../rdv.php');
exit();