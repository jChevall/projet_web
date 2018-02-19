<?php 
    function isActive($nav, $name) {
        if ($name === $nav) {
            return 'class="active"';
        }
        return '';
    }
?>
<!-- NAV -->
<div class="header">
    <div class="topnav">
        <h1 class="title">Tan créations</h1>
        <a <?= isActive($nav, "index")?> href="index.php">Accueil de l'administration</a>
        <a <?= isActive($nav, "rea")?> href="rea.php">Ajouter une réalisations</a>
        <a <?= isActive($nav, "blog")?> href="blog.php">Ajouter un article</a>
        <a <?= isActive($nav, "rdv")?> href="rdv.php">Vos rendez-vous</a>
    </div>
</div>