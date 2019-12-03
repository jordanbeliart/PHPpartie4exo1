<?php
/* déclaration d'une variable 'sentence' et d'une variable 'length' qui va
calculer le nombre de caractères qu'il y a dans la variable 'sentence' grâce à
la function 'strlen()' */
$sentence = 'Combien y a-t-il de caractères dans cette phrase ?';
$length = strlen($sentence);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP partie 4 exo 1</title>
  </head>
  <body>
    <?php
      echo $sentence . '<br />' . 'La phrase ci-dessus comporte ' . $length . ' caractères.';
    ?>
  </body>
</html>
