<?php
  $estock = 0;

  if ($estock >= 10) {
    $missatge = 'Bona disponibilitat';
  }

  if ($estock < 10) {
    $missatge = 'Baixa disponibilitat';
  }

  if ($estock == 0){
    $missatge = 'Sense estock';
  }

?>

<?php require_once '../05-includes/header.php'; ?>

<h2>Chocolata</h2>

<p><?= $missatge ?> </p>

<?php include '../05-includes/footer.php'; ?>