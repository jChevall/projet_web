<?php

require_once 'class/bdd.php';

spl_autoload_register('autoloader');

function autoloader($classname) {
    include_once 'class/' . $classname . '.php';
}

// CRUD TEST
$test_rand_number = ''.rand();

// Create
$c = new article();
$c->sArticleTitle = "L'article de test";
$c->sArticleText = $test_rand_number;
$c->sArticleMedia = "";
$c->kIDCreator = 0;
$c->create();

if ($c->kIDArticle == -1) {
    echo "<p style='color: red;'>CREATE ERROR, STOP TEST</p>";
    exit();
}
else {
    echo "<p style='color: green;'>CREATE OK </p><br>";
}

// Read
$r = new article();
$r->kIDArticle = $c->kIDArticle;
$r->hydrate();

if ($r->sArticleText != $test_rand_number) {
    echo "<p style='color: red;'>READ ERROR, STOP TEST</p>";
    exit();
}
else {
    echo "<p style='color: green;'>READ OK </p><br>";
}

// Update
$update_test_rand_number = ''.rand();
$u = new article();
$u->kIDArticle = $c->kIDArticle;
$u->hydrate();
$u->sArticleText = $update_test_rand_number;
$u->update();

$test_u = new article();
$test_u->kIDArticle = $u->kIDArticle;
$test_u->hydrate();

if ($test_u->sArticleText != $update_test_rand_number) {
    echo "<p style='color: red;'>UPDATE ERROR, STOP TEST</p>";
    exit();
}
else {
    echo "<p style='color: green;'>UPDATE OK </p><br>";
}

// Delete
$d = new article();
$d->kIDArticle = $u->kIDArticle;
$d->hydrate();
$d->delete();

$test_d = new article();
$test_d->kIDArticle = $u->kIDArticle;
$test_d->hydrate();

if ($test_d->kIDArticle != -1) {
    echo "<p style='color: red;'>DELETE ERROR</p>";
    exit();
}
else {
    echo "<p style='color: green;'>DELETE OK</p>";
}