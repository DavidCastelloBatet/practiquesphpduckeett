<?php
  $nutricio = [
    'greixos' => 16,
    'sucre' => 51,
    'sal' => 6.3,
    'proteina' => 2,
  ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays Asociatius - crear i accedir  - duckett p.39</title>
</head>
<body>
  <h1>La botiga de caramels</h1>
  <h2>Valor nutricional (per 100g)</h2>
  <p>Greixos: <?php echo $nutricio['greixos']; ?> %</p>
  <p>Sucre: <?= $nutricio['sucre']; ?> %</p>
  <p>Sal: <?= $nutricio['sal']; ?> %</p>
  <p>Proteina: <?= $nutricio['proteina']; ?> %</p>

</body>
</html>