<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
    <body>
        <?php
            $nav = "login";
            include 'includes/nav.php'; 
        ?>
        <!-- BODY -->
        <div class="body">
            <div class="col"></div>
            <div class="form">
                <h1>Connexion</h1>
                <form action="action/co.php" method="post">
                    <div class="form-group">
                        <label>Adresse e-mail : </label>
                        <input type="email" name="mail" class="form-control" placeholder="Adresse e-mail" required>
                    </div>
                    <div class="form-group">
                      <label>Mot de passe : </label>
                      <input type="password" name="pass" class="form-control" placeholder="Mot de passe" required>
                    </div>
                    <input type="submit">
                </form>
            </div>
            <div class="col"></div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
