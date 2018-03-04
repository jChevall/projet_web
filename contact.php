<!DOCTYPE html>
<html lang="fr">
    <?php 
        $nav = "contact";
        include 'includes/header.php'; 
    ?>
    <body>
        <?php include 'includes/nav.php'; ?>
        <!-- BODY -->
        <div class="body">
            <div class="form">
                <h1>Me contacter :</h1>
                <form action="action/sendMail.php" method="post" id="form_contact">
                    <div class="form-group">
                      <label>Nom & Prénom : </label>
                      <input id="input_name" type="text" name="name" class="form-control" placeholder="Nom & prénom" required>
                    </div>
                    <div class="form-group">
                        <label>Adresse e-mail : </label>
                        <input id="input_mail" type="email" name="mail" class="form-control" placeholder="Adresse e-mail" required>
                    </div>
                    <div class="form-group">
                        <label>Message : </label>
                        <textarea rows="4" cols="50" name="content" id="input_content"></textarea>
                    </div>
                </form>
                <input type="submit" id="contact_submit">
            </div>
            <div class="info">
                <h1>Informations :</h1>
                <div class="innerInfo">
                    <div class="divImg">
                        <img class="contactImg" src="img/contact.jpg" alt=""/>
                    </div>
                    <div class="divInfo">
                        <p><?=$website->contact_name?></p>
                        <p>Tel : <?=$website->contact_tel?></p>
                        <p>Mail : <?=$website->contact_mail?></p>
                        <a href="<?=$website->contact_facebook?>" target="_blank">Facebook</a> <span>-</span> <a href="<?=$website->contact_twitter?>" target="_blank">Twitter</a>
                    </div>
                </div>
                
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
