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

    public function ingres(float $quantitat) : float
    {
      $this->saldo += $quantitat;
      return $this->saldo;
    }

    public function sortida(float $quantitat) : float
    {
      $this->saldo -= $quantitat;
      return $this->saldo;
    }
  }

  $client1 = new Client();
  $compteCorrent1 = new CompteCorrent();

  $client1->cognom = 'Castelló';
  $client1->nom = 'David';
  $compteCorrent1->saldo = 100.35;
?>

<?php include 'header.php'; ?>

<div class="saldo">
  <h2>Fitxa del Client</h2>
  <p>Nom i Cognom del Client: <?= $client1->nom; ?> <?= $client1->cognom; ?></p>
  <p>Saldo Inicial: <?= $compteCorrent1->saldo; ?>€</p>
  <p>Saldo despres d'Ingresos: <?= $compteCorrent1->ingres(50.00); ?>€</p>
  <p>Saldo despres de despeses: <?= $compteCorrent1->sortida(70.00); ?>€</p>
</div>



<?php include 'footer.php'; ?>