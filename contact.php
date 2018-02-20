<!DOCTYPE html>
<html lang="fr">
    <?php include 'includes/header.php'; ?>
    <body>
        <?php
            $nav = "contact";
            include 'includes/nav.php'; 
        ?>
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
                        <p>Jacques CHIRAC</p>
                        <p>Tel : 06 69 69 69 69</p>
                        <p>Mail : BibiDevant@elysee.lolo</p>
                        <p>Numéro SIREN : 012 234 567</p>                        
                    </div>
                </div>
                
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
