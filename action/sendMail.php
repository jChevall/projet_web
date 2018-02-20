<?php

require_once '../class/bdd.php';

spl_autoload_register('autoloader');

function autoloader($classname) {
    include_once '../class/' . $classname . '.php';
}

//Extraction du xml pour le mail
$website = new website('../');

$name = $_POST['name'];
$email = $_POST['mail'];
$content = $_POST['content'];

$mail = new mail();
$mail->To = $website->mail_to;
$mail->ToName = "ADMIN ADMIN";
$mail->From = $email;
$mail->FromName = $name;
$mail->Title = "Mail de contact de : ". $name;
$mail->Contents = $content;

$mail->send();

header('Location: ../index.php');