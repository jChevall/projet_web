<?php

require_once 'class/bdd.php';

spl_autoload_register('autoloader');

function autoloader($classname) {
    include_once 'class/' . $classname . '.php';
}

$mail = new mail();
$mail->To = "glouke@gmail.com";
$mail->ToName = "Enzo BLANCHON";
$mail->From = "blanchonenzo@gmail.com";
$mail->FromName = "BLANCHON Enzo";
$mail->Title = "Titre";
$mail->Contents = "CONTENT <br> LALALA";

$mail->send();