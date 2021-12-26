<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Déchiffrage Code Otan</h1>
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
       echo $value == "alpha" ? "a" : "";
       echo $value == "bravo" ? "b" : "";
       echo $value == "charlie" ? "c" : "";
       echo $value == "delta" ? "d" : "";
       echo $value == "echo" ? "e" : "";
       echo $value == "foxtrot" ? "f" : "";
       echo $value == "golf" ? "g" : "";
       echo $value == "hotel" ? "h" : "";
       echo $value == "india" ? "i" : "";
       echo $value == "juliette" ? "j" : "";
       echo $value == "kilo" ? "k" : "";
       echo $value == "lima" ? "l" : "";
       echo $value == "mike" ? "m" : "";
       echo $value == "november" ? "n" : "";
       echo $value == "oscar" ? "o" : "";
       echo $value == "papa" ? "p" : "";
       echo $value == "quebec" ? "q" : "";
       echo $value == "romeo" ? "r" : "";
       echo $value == "sierra" ? "s" : "";
       echo $value == "tango" ? "t" : "";
       echo $value == "uniform" ? "u" : "";
       echo $value == "victor" ? "v" : "";
       echo $value == "whisky" ? "w" : "";
       echo $value == "xray" ? "x" : "";
       echo $value == "yankee" ? "y" : "";
       echo $value == "zulu" ? "z" : "";
       echo $value == " " ? " " : "";
       echo $value == "zero" ? "0" : "";
       echo $value == "one" ? "1" : "";
       echo $value == "two" ? "2" : "";
       echo $value == "three" ? "3" : "";
       echo $value == "four" ? "4" : "";
       echo $value == "five" ? "5" : "";
       echo $value == "six" ? "6" : "";
       echo $value == "seven" ? "7" : "";
       echo $value == "height" ? "8" : "";
       echo $value == "nine" ? "9" : "";
     //echo ++$i != $numItems ? "," : "";
    }

?>