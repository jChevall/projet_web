<!DOCTYPE html>
<html>
    <?php
        $nav = "blog";
        include 'includes/header.php'; 
    ?>
    <body>
        <?php include 'includes/nav.php'; ?>
        <!-- BODY -->
        <div class="body">
            <ul>
                <?php 
                    // Liste des article
                    $articles = new article();
                    $articles = $articles->getAllArticle();
                    
                    if ($articles === null) { ?>
                        <div>
                            <h1>Aucun article disponible.</h1>
                            <h3>Revenez plus tard ;)</h3>
                        </div>
                    <?php 
                    } else {
                        foreach ($articles as $article) { ?>
                            <div>
                                <h1><?=$article->sArticleTitle?></h1>
                                <p><?=$article->sArticleMedia?></p>
                                <p><?=$article->sArticleText?></p>
                                <p>Crée le <?=$article->dArticleDate?></p>
                            </div>
                        <?php 
                        }
                    }
                ?>
            </ul>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
