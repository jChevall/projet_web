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
                
                
                <div class="row">
                    <div class="col">
                        <input type="submit" id="newArticle_submit" value="Nouvel Article">
                    </div>                        
                </div>
                <div id="newArticle" class="row" style="display: none">                
                    <form action="action/create_article.php" method="post" id="form_general" enctype="multipart/form-data">
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
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Image de l'article : </label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="inline-form-group">
                                                <div class="inlineCol">
                                                    <input type="button" class="submit-file" id="file_btn" value="Choisir un fichier">
                                                </div>
                                                <input type="file" id="file_input" name="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <img id="img_input">
                            </div>
                            <div class="col"></div>
                        </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" id="newArticle_submit">
                        </div>                        
                    </div>
                    </form>
                    
                </div>
                <hr>
                <?php                
                    // Liste des article
                    $articles = new article();
                    $articles = $articles->getAllArticle();
                    if ($articles === null) { ?>
                        <br><hr>
                        <div>
                            <h1>Aucun article</h1>
                            <h3>Ecrivez votre premier article ;)</h3>
                        </div>
                    <?php 
                    } else {
                    foreach ($articles as $article) { ?>
                    <div class="article">
                        <div class="article_title"><p><?=$article->sArticleTitle?></p></div>
                        <div class="article_date"><p>
                              Crée le <?php
                                setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');                                    
                                // séparation jour, mois et années
                                list($year, $month, $day) = explode("-", $article->dArticleDate);

                                // affichage au format francophone
                                echo $lastmodified = "$day/$month/$year";?>  
                        </p></div>
                        <div class="row article_btn_group">
                            <div class="col">
                                <?php
                                    Echo '<button class="button" onclick="updateArticle(' . $article->kIDArticle . ');">Modifier</button>';
                                ?>
                            </div>
                            <div class="col">
                                <form action="action/delete_article.php" method="post" id="form_<?php $article->kIDArticle ?>">
                                    <input style="display: none" value="<?=$article->kIDArticle?>" name="input_article_id">
                                    <button class="button">Supprimer</button>                                    
                                </form>
                            </div>
                        </div>
                    </div>
                            
                    <div id="<?=$article->kIDArticle?>" class="row" style="display: none">  
                        <form action="action/update_article.php" method="post" id="form_<?php $article->kIDArticle ?>">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Titre de l'article : </label>
                                        <input value="<?=$article->sArticleTitle?>" id="input_article_title" type="textarea" name="input_article_title" class="form-control" required>
                                        <input style="display: none" value="<?=$article->kIDArticle?>" name="input_article_id">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Contenu de l'article : </label>
                                        <textarea rows="4" cols="50" name="input_article_text" id="input_article_text"><?=$article->sArticleText?></textarea>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col">
                                <?php
                                Echo '<button class="button" onclick="validateUpdateArticle(' . $article->kIDArticle . ');">Validate</button>';
                                ?>
                            </div>                        
                        </div>
                        </form>
                        <hr>
                    </div>
                    <?php 
                    }
                    }
                ?>
                <br><hr>
                
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
