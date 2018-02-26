<!DOCTYPE html>
<html>
    <?php 
        $nav = "index";
        include 'includes/header.php'; 
    ?>
    <body>
        <?php
            include 'includes/nav.php'; 
        ?>
        <!-- BODY -->
        <div class="body">
            <div class="webdata">
                <h1>Modification des informations générales du site :</h1>
                <form action="action/update_general.php" method="post" id="form_general">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Titre du site internet : </label>
                                <input value="<?=$website->title?>" id="input_site_title" type="text" name="input_site_title" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Adresse e-mail de l'administrateur : </label>
                                <input value="<?=$website->mail_to?>" id="input_site_mail" type="email" name="input_site_mail" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Titre de l'accueil : </label>
                                <input value="<?=$website->accueil_title?>" id="input_accueil_title" type="text" name="input_accueil_title" class="form-control" required>
                            </div>                            
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Texte de l'accueil : </label>
                                <textarea rows="4" cols="50" name="input_accueil_text" id="input_accueil_text"> <?=$website->accueil_text?></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col">
                        <input type="submit" id="general_submit">
                    </div>                        
                </div>
                    <br><hr>
                <form action="action/update_contact.php" method="post" id="form_contact">
                    <h1>Modification des informations de contact :</h1>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Nom du contact : </label>
                                <input value="<?=$website->contact_name?>" id="input_contact_name" type="text" name="input_contact_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Numéro de téléphone du contact : </label>
                                <input value="<?=$website->contact_tel?>"id="input_contact_tel" type="text" name="input_contact_tel" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Adresse e-mail du contact : </label>
                                <input value="<?=$website->contact_mail?>" id="input_contact_mail" type="email" name="input_contact_mail" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Adresse facebook : </label>
                                <input value="<?=$website->contact_facebook?>" id="input_contact_facebook" type="text" name="input_contact_facebook" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Adresse twitter : </label>
                                <input value="<?=$website->contact_twitter?>" id="input_contact_twitter" type="text" name="input_contact_twitter" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col">
                        <input type="submit" id="contact_submit">
                    </div>                        
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
