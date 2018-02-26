<!DOCTYPE html>
<html>
    <?php 
        $nav = "rea";
        include 'includes/header.php'; 
    ?>
    <body>
        <?php
            include 'includes/nav.php'; 
        ?>
        <!-- BODY -->
        <div class="body">
            <div class="webdata">
                <h1>Ajouter une réalisation :</h1>
                <form action="action/addImage.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <div class="inline-form-group">
                                <div class="inlineCol">
                                    <input type="button" class="submit-file" id="file_btn" value="Choisir un fichier">
                                </div>
                </form>
                                <div class="inlineCol">
                                    <input type="submit" id="img_submit">
                                </div>
                                <input type="file" id="file_input" name="img">
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <img id="img_input">
                        </div>
                        <div class="col"></div>
                    </div>
                <h1>Liste des réalisations :</h1>
                <h3>(cliquez sur une image pour la supprimer)</h3>
                <ul id="img_list">
                    <?php 
                        // Liste des images
                        $dir   = '../img/rea/';
                        $files = scandir($dir, 1);

                        foreach ($files as $file) {
                            if ($file === "." || $file === "..") {
                                continue;
                            }
                            echo '<li><form action="action/delImage.php" method="post"><img class="rea_img" src="../img/rea/'.$file.'" alt=""/><input type="hidden" name="link" value="../../img/rea/'.$file.'"></form><li>';
                        }
                    ?>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
