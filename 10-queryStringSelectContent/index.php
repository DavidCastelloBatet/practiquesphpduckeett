<?php

  $cities = [
    'Vilafranca del Penedes' => 'Espirall, 50 2.1.',
    'Sant Sadurní d\'Anoia' => 'Torres i Bages, 4 1.2.',
    'El Pla del Penedes' => 'Pau Casals, 4'
  ];

  $city = 'Vilafranca del Penedes';
  $address = 'Espirall, 50 2.1.';
  
  if (isset($_GET['city'])) 
  { 
    $city = $_GET['city'] ;
    $address = $cities[$city];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Query String to Select Content</title>
</head>
<body>
  <h1>Query String to Select Content</h1>
  <?php foreach ($cities as $key => $value) { ?>
    <a href="index.php?city=<?= $key ?>"><?= $key ?></a>
  <?php } ?>

  
  <h2><?= $city ?></h2>
  <p><?= $address ?></p>
</body>
</html>