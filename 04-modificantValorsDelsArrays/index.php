<?php
  $nutricio = [
    'greixos' => 16,
    'sucre' => 51,
    'sal' => 6.3,
    'proteina' => 2,
  ];
  // modifico valor clau ja existent
  $nutricio['greixos'] = 20;
  // afegim clau - valor nou
  $nutricio['fibra'] = 30;

  $top_vendes = ['Chocolata', 'Maduixa', 'Pera', 'Tofee',];

  $top_vendes[0] = 'Taronja';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificant Valors dels Arrays</title>
</head>
<body>
  <h1>Modificant Valors dels Arrays - duckett p.43</h1>

  <h2>Valor Nutricional</h2>
  <p>Greixos: <?php echo $nutricio['greixos']; ?>%</p>
  <p>Sucre: <?php echo $nutricio['sucre'];?>%</p>
  <p>Sal: <?php echo $nutricio['sal'];?>%</p>
  <p>Proteina: <?php echo $nutricio['proteina'];?>%</p>
  <p>Fibra: <?php echo $nutricio['fibra'];?>%</p>


  <h2>Top Vendes</h2>
  <ol>
    <li><?php echo $top_vendes[0];?></li>
    <li><?php echo $top_vendes[1];?></li>
    <li><?php echo $top_vendes[2];?></li>
  </ol>
</body>
</html>