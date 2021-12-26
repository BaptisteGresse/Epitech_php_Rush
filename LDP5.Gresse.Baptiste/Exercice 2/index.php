<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<h1>Déchiffrage Code Morse</h1>
  <form action="" method="GET">
    <textarea style="resize: none;" name="text"  cols="30" rows="2"></textarea>
    <input type="submit" name="submit">
  </form>
</body>
</html>


<?php 
    $init = $_GET['text']; 
    $table = explode(",", $init);
    $numItems = count($table); 
    // $i = 0;
    foreach($table as $key => $value) {
       echo $value == "._" ? "a" : "";
       echo $value == "_..." ? "b" : "";
       echo $value == "_._." ? "c" : "";
       echo $value == "_.." ? "d" : "";
       echo $value == "." ? "e" : "";
       echo $value == ".._." ? "f" : "";
       echo $value == "__." ? "g" : "";
       echo $value == "...." ? "h" : "";
       echo $value == ".." ? "i" : "";
       echo $value == ".___" ? "j" : "";
       echo $value == "_._" ? "k" : "";
       echo $value == "._.." ? "l" : "";
       echo $value == "__" ? "m" : "";
       echo $value == "_." ? "n" : "";
       echo $value == "___" ? "o" : "";
       echo $value == ".__." ? "p" : "";
       echo $value == "__._" ? "q" : "";
       echo $value == "._." ? "r" : "";
       echo $value == "..." ? "s" : "";
       echo $value == "_" ? "t" : "";
       echo $value == ".._" ? "u" : "";
       echo $value == "..._" ? "v" : "";
       echo $value == ".__" ? "w" : "";
       echo $value == "_.._" ? "x" : "";
       echo $value == "_.__" ? "y" : "";
       echo $value == "__.." ? "z" : "";
       echo $value == " " ? " " : "";
       echo $value == "_____" ? "0" : "";
       echo $value == ".____" ? "1" : "";
       echo $value == "..___" ? "2" : "";
       echo $value == "...__" ? "3" : "";
       echo $value == "...._" ? "4" : "";
       echo $value == "....." ? "5" : "";
       echo $value == "_...." ? "6" : "";
       echo $value == "__..." ? "7" : "";
       echo $value == "___.." ? "8" : "";
       echo $value == "____." ? "9" : "";
       echo $value == "._._._" ? "." : "";
       echo $value == "__..__" ? "," : "";
       echo $value == "..__.." ? "?" : "";
       echo $value == "_.._." ? "/" : "";
     //echo ++$i != $numItems ? "," : "";
    }

?>