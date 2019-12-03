<?php
$number = 8;
/* déclaration d'une fonction "cube" qui va calculer le cube
 de la variable 'number' indiquée entre () pour ensuite retourner le résultat */
function cube($number){
  $calcul = $number * $number * $number;
  return $calcul;
}
$result = cube($number);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP partie4 exo 1</title>
  </head>
  <body>
    <p>
      <?php echo $result; ?>
    </p>
  </body>
</html>
