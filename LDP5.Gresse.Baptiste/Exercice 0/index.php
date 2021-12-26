

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exercice 1</title>
</head>
<body>
    <?php
    if($_GET['mot_de_passe'] != "0") { ?>  
    <form action="" method="get">
    <label for="label"> Mot de passe</label>
    <input type="password" name="mot_de_passe" id="label">
    <input type="submit" value="Envoyer">
    </form>
    <?php } else {
        echo "bienvenu sur ma page secrète";
    } ?>
</body>
</html>








