<!DOCTYPE html>
<html>
    <?php 
        $nav = "rea";
        include 'includes/header.php';
    ?>
    <body>
        <?php include 'includes/nav.php'; ?>
        <!-- BODY -->
        <div class="body">
            <ul>
                <?php 
                    // Liste des images
                    $dir   = 'img/rea';
                    $files = scandir($dir, 1);

                    foreach ($files as $file) {
                        if ($file === "." || $file === "..") {
                            continue;
                        }
                        echo '<li><img class="rea_img" src="img/rea/'.$file.'" alt=""/><li>';
                    }
                ?>
            </ul>
            <div class="clear"></div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
