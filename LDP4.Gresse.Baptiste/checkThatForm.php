<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>exercice final</title>
</head>
<body>
<?php

    $CONDITION1 = false;
    $CONDITION2 = false;
    $CONDITION3 = false;
    $CONDITION4 = false;
    $CONDITION5 = false;
    $CONDITION6 = false;
    $CONDITION7 = false;
    $CONDITION8 = false;
    $CONDITION9 = false;
    $GANDALF = 0;

    $firstname = $_POST['user_firstname'];

    if(!empty($firstname) && strlen($firstname) > 2  && ctype_alpha($firstname)) {
        $CONDITION1 = TRUE;
    } else {
        if(empty($firstname)) { echo "• Le champ Prenom n'est pas rempli.<br>"; }
        if(strlen($firstname) < 2) { echo "• Le champ Prenom ne contient pas 2 caracteres.<br>"; }
        if(!ctype_alpha($firstname)) {echo "• Le champ Prenom ne contient pas uniquement des caracteres alphabetiques.<br>";}
        $GANDALF++;
    }

    $lastname = $_POST['user_lastname'];

    if(!empty($lastname) && strlen($lastname) > 2 && ctype_alpha($lastname)) {
        $CONDITION2 = TRUE;
    } else {
        if(empty($lastname)) {echo "• Le champ Nom n'est pas rempli.<br>";}
        if(strlen($lastname) < 2) { echo "• Le champ Nom ne contient pas 2 caracteres.<br>"; }
        if(!ctype_alpha($lastname)) {echo "• Le champ Nom ne contient pas uniquement des characteres alphabetiques.<br>";}
        $GANDALF++;
    }

    $email = $_POST['user_email'];

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $CONDITION3 = TRUE;
    } else {
        if(empty($email)) {echo "• Le champ E-mail n'est pas rempli.<br>";}
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {echo "• Le champ E-mail n'est pas une adresse e-mail valide.<br>";}
        $GANDALF++;
    }

    $age = $_POST['user_age'];

    if(!empty($age) && ctype_digit($age) && $age <= 160 && $age >= 13) {
        $CONDITION4 = TRUE;
    } else {
        if(empty($age)) {echo "• Le champ Age n'est pas rempli.<br>";}
        if(!ctype_digit($age)) {"• Le champ Age ne contient pas uniquement des chiffres.<br>";}
        if(!$age <= 160 && !$age >= 13) {"• Le champ Age n'est pas valide.<br>";}
        $GANDALF++;
    }

    $bachelor = $_POST['user_bachelor'];

    if(!empty($bachelor) && $bachelor == "dev" || $bachelor == "business" || $bachelor == "design") {
        $CONDITION5 = TRUE;
    } else {
        if(empty($bachelor)) {echo "• Le champ Bachelor n'est pas rempli.<br>";}
        if($bachelor != "dev" || $bachelor != "business" || $bachelor != "design") {echo "• Le champ Bachelor ne contient pas 'dev', 'business' ou 'design'.<br>";}
        $GANDALF++;
    }

    $password = $_POST['user_password'];

    if(!empty($password) && strlen($password) > 12) {
        $CONDITION6 = TRUE;
    } else {
        if(empty($password)) {echo "• Le champ Mot de passe n'est pas rempli.<br>";}
        if(strlen($password) < 12) {echo "• le Mot de passe ne contient pas 12 caracteres.<br>";}
        $GANDALF++;
    }

    $cpassword = $_POST['user_confirmpassword'];

    if(!empty($cpassword) && strlen($cpassword) > 12 && $cpassword == $password) {
        $CONDITION7 = TRUE;
    } else {
        if(empty($cpassword)) { echo "• Le champ Retaper le mot de passe n'est pas rempli.<br>";}
        if(strlen($password) < 12) {echo "• Le champ Retaper le mot de passe ne contient pas 12 caracteres.<br>";}
        $GANDALF++;
    }

    $sexe = $_POST['sexe'];

    if(!empty($sexe) && $sexe == "femme" || $sexe == "homme") {
        $CONDITION8 = TRUE;
    } else {
        echo "• Le champ Sexe n'est pas rempli.<br>";
        $GANDALF++;
    }

    $tome = $_POST['tome'];

    if(!empty($tome)) {
        $CONDITION9 = TRUE;
    } else {
        echo "• Le champ Tome n'est pas rempli.<br>";
        $GANDALF++;
    }

    $textarea = $_POST['user_textarea'];
?>

<?php if($CONDITION1 == true && $CONDITION2 == true && $CONDITION3 == true && $CONDITION4 == true && $CONDITION5 == true && $CONDITION6 == true && $CONDITION7 == true && $CONDITION8 == true && $CONDITION9 == true) {
?>
    <table border="1">
    <tr> <td class="td1">Prenom</td>  <td class="td2"><?php echo $firstname ?></td> </tr>
    <tr> <td class="td1">Nom</td>  <td class="td2"><?php echo $lastname ?></td> </tr>
    <tr> <td class="td1">Email</td>  <td class="td2"><?php echo $email ?></td> </tr>
    <tr> <td class="td1">Age</td>  <td class="td2"><?php echo $age ?></td> </tr>
    <tr> <td class="td1">Bachelor</td>  <td class="td2"><?php echo $bachelor ?></td> </tr>
    <tr> <td class="td1">Mot de passe</td>  <td class="td2"><?php echo $password ?></td> </tr>
    <tr> <td class="td1">Mot de passe verifie</td>  <td class="td2"><?php echo $cpassword ?></td> </tr>
    <tr> <td class="td1"> Sexe</td>  <td class="td2"><?php echo $sexe ?></td> </tr>
    <tr> <td class="td1">Tome</td>  <td class="td2"><?php echo $tome ?></td> </tr>
    <tr> <td class="td1">Commentaire</td>  <td class="td2"><?php echo htmlentities($textarea)  ?></td> </tr>
    </table>
<?php } ?>

<?php if($GANDALF > 0) { ?> 
<img src="gandy.jpeg">
<?php } ?>

</body>
</html>
