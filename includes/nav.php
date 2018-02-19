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
    <div class="topnav" id ="topnav">
        <h1 class="title" id="title">Tan créations</h1>
        <a <?= isActive($nav, "index")?> href="index.html">Accueil</a>
        <a <?= isActive($nav, "rea")?> href="rea.html">Réalisations</a>
        <a <?= isActive($nav, "blog")?> href="blog.html">Blog</a>
        <a <?= isActive($nav, "rdv")?> href="rdv.html">Rendez-vous</a>
        <a <?= isActive($nav, "contact")?> href="contact.html">Contacts</a>
        <a href="javascript:void(0);" class="icon" onclick="responsiveMenu()">&#9776; Menu</a>
    </div>
</div>