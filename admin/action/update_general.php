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

$artcile = new article();

$website->sArticleTitle = $_POST['input_article_title'];
$website->sArticleText = $_POST['input_article_text'];

$website->create();

header('Location: ../index.php');
exit();