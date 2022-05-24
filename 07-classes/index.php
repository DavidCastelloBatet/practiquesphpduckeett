<?php
  class Client
  {
    public string $nom;
    public string $cognom;
    public string $email;
    public string $password;
  }

  class CompteCorrent
  {
    public int    $numeroCompte;
    public string $tipus;
    public float  $saldo;
  }

  $client1 = new Client();
  $compteCorrent1 = new CompteCorrent();

  $client1->cognom = 'Castelló';
  $client1->nom = 'David';
  $compteCorrent1->saldo = 50.05;
?>

<?php include 'header.php'; ?>

<div class="saldo">
  <h2>Fitxa del Client</h2>
  <p>Nom i Cognom del Client: <?= $client1->nom; ?> <?= $client1->cognom; ?></p>
  <p>Saldo: <?= $compteCorrent1->saldo; ?>€</p>
</div>



<?php include 'footer.php'; ?>