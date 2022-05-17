<?php
  $top_vendes = ['Chocolata', 'Maduixa', 'Pera', 'Tofee',];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear i Accedir Arrays Indexats</title>
</head>
<body>
  <h1>La Botiga de Caramels - duckett p.41</h1>
  <h2>Top Vendes</h2>
  <ol>
    <li><?php echo $top_vendes[0]; ?>.</li>
    <li><?php echo $top_vendes[1]; ?>.</li>
    <li><?php echo $top_vendes[2]; ?>.</li>
  </ol>
</body>
</html>