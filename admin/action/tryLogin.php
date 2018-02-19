<?php

require_once '../../class/bdd.php';

spl_autoload_register('autoloader');

function autoloader($classname) {
    include_once '../../class/' . $classname . '.php';
}

$user = new user();
$user->sUserMail = $_GET['mail'];
$user->sUserPassword = $_GET['pass'];

echo $user->tryLogin();