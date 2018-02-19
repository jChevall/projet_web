<!DOCTYPE html>
<html>
    <?php 
        $nav = "login";
        include 'includes/header.php'; 
    ?>
    <body>
        <?php
            include 'includes/nav.php'; 
        ?>
        <!-- BODY -->
        <div class="body">
            <div class="col"></div>
            <div class="form">
                <h1>Connexion</h1>
                <form action="action/login.php" method="post" id="form_login">
                    <div class="form-group">
                        <label>Adresse e-mail : </label>
                        <input id="input_mail" type="email" name="mail" class="form-control" placeholder="Adresse e-mail" required>
                    </div>
                    <div class="form-group">
                      <label>Mot de passe : </label>
                      <input id="input_pass" type="password" name="pass" class="form-control" placeholder="Mot de passe" required>
                    </div>
                </form>
                    <input type="submit" id="login_submit">
            </div>
            <div class="col"></div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
