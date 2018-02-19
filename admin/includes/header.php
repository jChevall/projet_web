<?php

session_start();
if ($nav !== "login") {
    if (!isset($_SESSION['isAdmin'])) {
        header('Location: login.php');
        exit();
    } else {
        if ($_SESSION['isAdmin'] == false) {
            header('Location: login.php');
            exit();
        }
    }    
}

require_once '../class/bdd.php';

spl_autoload_register('autoloader');

function autoloader($classname) {
    include_once '../class/' . $classname . '.php';
}

//Extraction du xml
$website = new website('../');
?>
<head>
    <meta charset="UTF-8">
    <link href="../css/main.css" rel="stylesheet" type="text/css"/>
    <link href="../css/header.css" rel="stylesheet" type="text/css"/>
    <link href="../css/body.css" rel="stylesheet" type="text/css"/>
    <link href="../css/footer.css" rel="stylesheet" type="text/css"/>
    <link href="css/login.css" rel="stylesheet" type="text/css"/>
    <title><?=$website->title?></title>
</head>