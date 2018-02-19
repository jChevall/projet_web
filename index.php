<!DOCTYPE html>
<html lang="fr">
    <?php include 'includes/header.php'; ?>
    <body>
        <?php
            $nav = "index";
            include 'includes/nav.php'; 
        ?>
        <!-- BODY -->
        <div class="body">
            <div class="porto">
                <img src="img/porto/1.jpg" alt=""/>
                <img src="img/porto/2.jpg" alt=""/>
                <img src="img/porto/3.jpg" alt=""/>
                <img src="img/porto/4.jpg" alt=""/>
            </div>
            <div class="body_blabla">
                <h1><?=$website->accueil_title?></h1>
                <p><?=$website->accueil_text?> </p>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>