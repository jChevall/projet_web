<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
    <body>
        <?php
            $nav = "index";
            include 'includes/nav.php'; 
        ?>
        <!-- BODY -->
        <div class="body">
            <h3>Vous êtes connectez en tant que : <?=$_SESSION['userNom']?> <?=$_SESSION['userPrenom']?></h3>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
