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
                        <div class="row">
                            <h1>Aucun article disponible.</h1>
                            <h3>Revenez plus tard ;)</h3>
                        </div>
                    <?php 
                    } else {
                        foreach ($articles as $article) { ?>
                            <div class="row">
                                <h1><?=$article->sArticleTitle?></h1>
                                <img src="img/article/<?=$article->sArticleMedia?>">
                                <p><?=$article->sArticleText?></p>
                                <p>Crée le <?php 
                                    setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');                                    
                                    // séparation jour, mois et années
                                    list($year, $month, $day) = explode("-", $article->dArticleDate);

                                    // affichage au format francophone
                                    echo $lastmodified = "$day/$month/$year";?></p>
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
