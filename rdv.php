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
            <div class="howto">
                <h1>Comment reservez ?</h1>
                <p>Si l'un de nos cours vous intéresse vous pouvez prendre rendez-vous du lundi au vendredi de 9h00 à 18h et le samedi de 9h00 à 12h par téléphone au <?=$website->contact_tel?> ou par e-mail : <?=$website->contact_mail?></p>
            </div>
            <hr>
            <div class="liste">
            <?php 
                // Liste des cours
                $cours = new cours();
                $cours = $cours->getAllCours();
                if ($cours === null) { ?>
                    <div>
                        <h1>Aucun cours disponible.</h1>
                        <h3>Revenez plus tard ;)</h3>
                    </div>
                <?php 
                } else {
                $count = 1;
                $max = 3;
                foreach ($cours as $lesson) {
                    if ($count === $max) {
                        echo '</div><div class="liste">';
                        $count = 1;
                    }
                    else {
                        $count++;
                    
                    }
                                
                    ?>
                    <div class="cour">
                        <h1><?=$lesson->sCoursName?> le <?php 
                            setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');                                    
                            // séparation jour, mois et années
                            list($year, $month, $day) = explode("-", $lesson->dCoursDate);

                            // affichage au format francophone
                            echo $lastmodified = "$day/$month/$year";?></h1>
                        <p>Nombres de places : <?=$lesson->iCoursMax?></p>
                        <p><?=$lesson->sCoursDesc?></p>
                    </div>
                <?php }}
            ?>
                
            </div>
            
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/js.php'; ?>
    </body>
</html>