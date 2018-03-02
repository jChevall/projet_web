<!DOCTYPE html>
<html>
    <?php 
        $nav = "rdv";
        include 'includes/header.php'; 
    ?>
    <body>
        <?php
            include 'includes/nav.php'; 
        ?>
        <!-- BODY -->
        <div class="body">
            <ul>
                <?php 
                    // Liste des article
                    $cours = new cours();
                    $cours = $cours->getAllCours();
                    if ($cours === null) { ?>
                        <div>
                            <h1>Aucun cours disponible.</h1>
                            <h3>Revenez plus tard ;)</h3>
                        </div>
                    <?php 
                    } else {
                    foreach ($cours as $lesson) { ?>
                        <div>
                                <h1><?=$lesson->sCoursName?> le <?=$lesson->dCoursDate?></h1>
                                <p>Nombres de places : <?=$lesson->iCoursMax?></p>
                                <p><?=$lesson->sCoursDesc?></p>
                            </div>
                    <?php }}
                ?>
            </ul>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>