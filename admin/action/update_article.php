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

$article = new article();

$article->sArticleTitle = $_POST['input_article_title'];
$article->sArticleText = $_POST['input_article_text'];
$article->kIDArticle = $_POST['input_article_id'];

$date = new DateTime();
$date = $date->format('Y-m-d H:i:s');

$article->dArticleDate = $date;

$article->update();

header('Location: ../blog.php');
exit();