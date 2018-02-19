<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
    <body>
        <?php
            $nav = "blog";
            include 'includes/nav.php'; 
        ?>
        <!-- BODY -->
        <div class="body">
              <form action="/action_page.php">
                <label for="name">Nom et prénom</label>
                <input type="text" id="name" name="name" placeholder="Votre nom..">

                <label for="mailAdress">Adresse mail</label>
                <input type="text" id="mailAdress" name="mailAdress" placeholder="Votre adresse e-mail..">
                
                <label for="message">Message</label></br>
                <textarea type="text" id="message" name="message" placeholder="Votre message.." ></textarea>

                <input type="submit" value="Submit">
              </form>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>
