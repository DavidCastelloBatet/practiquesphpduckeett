<?php
  $nomUsuari = 'David';

  $salutacio = 'Hola';
  if ($nomUsuari){
    $salutacio = 'Benvingut de nou,' .' '.  $nomUsuari;
  }

  $producte = 'xupaxups';
  $cost = 2;

  for ($i = 1; $i <= 10; $i++){
    $subtotal = $cost * $i;
    $descompte = ($subtotal / 100) * ($i * 4);
    $totals[$i] = $subtotal - $descompte;
  }

?>

<?php require '../05-includes/header.php' ?>


<p><?= $salutacio ?></p>
<h2><?= $producte ?> amb descompte</h2>

<table>
  <tr>
    <th>Paquets</th>
    <th>Preu</th>
  </tr>
  <?php foreach ($totals as $quantitat => $preu) { ?>
    <tr>
      <td>
        <?= $quantitat ?>
        paquet<?= ($quantitat === 1) ? '' : 's' ?>
      </td>
      <td>
        <?= $preu ?>€
      </td>
    </tr>
  <?php } ?>
    
 
</table>


<?php include  '../05-includes/footer.php' ?>