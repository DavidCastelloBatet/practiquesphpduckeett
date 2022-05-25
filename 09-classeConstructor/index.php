<?php
  // poso en estricte el tipat de les varibles
  declare(strict_types = 1);

  class Client
  {
    public string $nom;
    public string $cognom;
    public string $email;
    public string $password;
  }

  class CompteCorrent
  {
    // Atributs
    public int    $numeroCompte;
    public ?string $tipus = null;
    public float  $saldo;


    // Constructor
    public function __construct( int $numeroCompte,  ?string $tipus,  float $saldo = 0.00)
    {
      $this->numeroCompte = $numeroCompte;
      $this->tipus = $tipus;
      $this->saldo = $saldo;
    }

    // Metodes
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

  // Instancies de Classes
  $client = new Client();
  $client->nom = 'David';
  $client->cognom = 'Castello';

  $diari = new CompteCorrent(12345, 'Diari', 100.15);
  $estalvi = new CompteCorrent(67890, 'Estalvi', 200.15);
?>

<?php include 'header.php'; ?>

<div class="saldos">
  <h2>Extracte Comptes</h2>
  <p>Client:  <?= $client->nom . ' ' . $client->cognom; ?></p>
  <table>
    <tr>
      <th>Dia</th>
      <th><?= $diari->tipus; ?></th>
      <th><?= $estalvi->tipus;?></th>
    </tr>
    <tr>
      <td>23 Juny</td>
      <td><?= $diari->saldo; ?>€</td>
      <td><?= $estalvi->saldo; ?>€</td>
    </tr>
    <tr>
      <td>24 Juny - Ingresos</td>
      <td><?= $diari->ingres(100.00); ?>€</td>
      <td><?= $estalvi->ingres(200.00); ?>€</td>
    </tr>
    <tr>
      <td>25 Juny - Despeses</td>
      <td><?= $diari->sortida(50.00); ?>€</td>
      <td><?= $estalvi->sortida(50.00); ?>€</td>
    </tr>
  </table>
</div>



<?php include 'footer.php'; ?>