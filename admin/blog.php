<!DOCTYPE html>
<html>
    <?php 
        $nav = "blog";
        include 'includes/header.php'; 
    ?>
    <body>
        <?php
            include 'includes/nav.php'; 
        ?>
        <!-- BODY -->
        <div class="body">
            <div class="webdata">
                <h1>Modification des articles du site :</h1>
                <form action="action/update_general.php" method="post" id="form_general">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Titre de l'article : </label>
                                <input value="" id="input_article_title" type="textarea" name="input_article_title" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Contenu de l'article : </label>
                                <textarea rows="4" cols="50" name="input_article_text" id="input_article_text"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col">
                        <input type="submit" id="general_submit">
                    </div>                        
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
