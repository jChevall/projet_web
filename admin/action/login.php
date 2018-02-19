<?php
session_start();

require_once '../../class/bdd.php';

spl_autoload_register('autoloader');

function autoloader($classname) {
    include_once '../../class/' . $classname . '.php';
}

$user = new user();
$user->sUserMail = $_POST['mail'];
$user->sUserPassword = $_POST['pass'];

if ($user->tryLogin() == "true") {
    $user->login();
    $_SESSION['isAdmin'] = $user->bUserAdmin;
    $_SESSION['userMail'] = $user->sUserMail;
    $_SESSION['userMail'] = $user->sUserMail;
    $_SESSION['userNom'] = $user->sUserNom;
    $_SESSION['userPrenom'] = $user->sUserPrenom;
}

header('Location: ../index.php');