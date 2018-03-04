<!DOCTYPE html>
<html>
    <?php 
        $nav = "rea";
        include 'includes/header.php';
    ?>
    <body>
        <?php include 'includes/nav.php'; ?>
        <!-- BODY -->
        <div class="body" style="display: block">
            <div class="row">
                <div class="col"></div>
                <div class="col" id="carrousel">
                    <h1> Carrousel </h1>
                    <ul>
                        <?php 
                            // Liste des images
                            $dir   = 'img/rea';
                            $files = scandir($dir, 1);

                            foreach ($files as $file) {
                                if ($file === "." || $file === "..") {
                                    continue;
                                }
                                echo '<li><img src="img/rea/'.$file.'" /></li>';
                                }
                        ?>
                    </ul>
                </div>
                <div class="col"></div>
            </div>
            <div>
                <h1> Galerie </h1>
                <ul>
                    <?php
                        foreach ($files as $file) {
                            if ($file === "." || $file === "..") {
                                continue;
                            }
                            echo '<li><a href="#'.$file.'"><img class="rea_img" src="img/rea/'.$file.'" alt=""/></a><li>';
                            echo '<a href="#_" class="lightbox" id="'.$file.'"><img src="img/rea/'.$file.'"></a>';
                            }
                    ?>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
