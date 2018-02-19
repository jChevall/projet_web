<?php

require_once 'class/bdd.php';

spl_autoload_register('autoloader');

function autoloader($classname) {
    include_once 'class/' . $classname . '.php';
}

//Extraction du xml
$website = new website('');
?>
<head>
    <meta charset="UTF-8">
    <link rel="manifest" href="manifest.json">
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <link href="css/header.css" rel="stylesheet" type="text/css"/>
    <link href="css/body.css" rel="stylesheet" type="text/css"/>
    <link href="css/footer.css" rel="stylesheet" type="text/css"/>
    <link href="css/rea.css" rel="stylesheet" type="text/css"/>
    <link href="css/blog.css" rel="stylesheet" type="text/css"/>
    <link href="css/contact.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4CAF50">
    <title><?=$website->title?></title>
</head>