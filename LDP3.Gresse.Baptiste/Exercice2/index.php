<!DOCTYPE html>
<html lang="fr">
<head>
</head>
<body>
    <?php

        $res0 = "";
        $res1 = "";

          if(empty($_POST)){
         $res0 = "Vous n'avez séléctionné aucune tortue.";
          } else {
            $res1 = $_POST['tortue'];
          }
      ?>
    
<p style="color:red"><?php echo $res0 ?></p>
<p style="color:green"> <?php echo $res1 ?></p>
</body>
</html>

