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
            <div class="webdata">
                <h1>Modification des rendez-vous du site :</h1>
                
                
                <div class="row">
                    <div class="col">
                        <input type="submit" id="newRdv_submit" value="Nouveau rendez-vous">
                    </div>                        
                </div>                
                <div id="newRdv" class="row" style="display: none">                
                    <form action="action/create_rdv.php" method="post" id="form_general">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Nom du rendez-vous : </label>
                                    <input value="" id="input_rdv_title" type="textarea" name="input_rdv_title" class="form-control" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Description du rendez-vous : </label>
                                    <textarea rows="4" cols="50" name="input_rdv_text" id="input_rdv_text"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col">
                                <div class="form-group">
                                    <label>Date : </label>
                                    <input value="" id="input_rdv_date" type="date" name="input_rdv_date" class="form-control" required>
                                </div>
                        </div>
                        <div class="col">
                                <div class="form-group">
                                    <label>Nombre de place maximun : </label>
                                    <input value="" id="input_rdv_max" type="number" name="input_rdv_max" class="form-control" required>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" id="newRdv_submit">
                        </div>                        
                    </div>
                    </form>
                    
                </div>
                    
                <?php                
                    // Liste des article
                    $cours = new cours();
                    $cours = $cours->getAllCours();
                    if ($cours === null) { ?>
                        <div>
                            <h1>Aucun article</h1>
                            <h3>Ecrivez votre premier article ;)</h3>
                        </div>
                    <?php 
                    } else {
                    foreach ($cours as $lesson) { ?>
                        <div>
                            <label><?=$lesson->sCoursName?></label>                          
                            <label>le <?php 
                                setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');                                    
                                // séparation jour, mois et années
                                list($year, $month, $day) = explode("-", $lesson->dCoursDate);

                                // affichage au format francophone
                                echo $lastmodified = "$day/$month/$year";?></label>
                        
                        <div class="row">
                            <div class="col">
                                <?php
                                    Echo '<button class="button" onclick="updateRdv(' . $lesson->kIDCours . ');">Modifier</button>';
                                ?>
                            </div>
                            <div class="col">
                                <form action="action/delete_rdv.php" method="post" id="form_<?php $lesson->kIDCours ?>">
                                    <input style="display: none" value="<?=$lesson->kIDCours?>" name="input_rdv_id">
                                    <button class="button">Supprimer</button>                                    
                                </form>
                            </div>
                        </div>
                            
                        <div id="<?=$lesson->kIDCours?>" class="row" style="display: none">  
                            <form action="action/update_rdv.php" method="post" id="form_<?php $lesson->kIDCours ?>">
                                
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Nom du rendez-vous : </label>
                                            <input value="<?= $lesson->sCoursName ?>" id="input_rdv_title" type="textarea" name="input_rdv_title" class="form-control" required>
                                            <input style="display: none" value="<?= $lesson->kIDCours ?>" name="input_rdv_id">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Description du rendez-vous : </label>
                                            <textarea rows="4" cols="50" name="input_rdv_text" id="input_rdv_text"><?= $lesson->sCoursDesc ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col">
                                        <div class="form-group">
                                            <label>Date : </label>
                                            <input value="<?= $lesson->dCoursDate ?>" id="input_rdv_date" type="date" name="input_rdv_date" class="form-control" required>
                                        </div>
                                </div>
                                <div class="col">
                                        <div class="form-group">
                                            <label>Nombre de place maximun : </label>
                                            <input value="<?= $lesson->iCoursMax ?>" id="input_rdv_max" type="number" name="input_rdv_max" class="form-control" required>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <?php
                                    Echo '<button class="button" onclick="validateUdateRdv(' . $lesson->kIDCours . ');">Validate</button>';
                                    ?>
                                </div>                        
                            </div>
                            </form>
                        </div>
                    </div>
                    <?php 
                    }
                    }
                ?>
                
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
