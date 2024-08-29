<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  # 1.
  $code = array("JavaScript", "Python", "C#", "PHP");


  # 2.
  echo '<pre>';
  print_r($code);
  echo '</pre>';


  # 3.
  # a)
  $bakelser = [
    [
      "Bakelse" => "Bulla",
      "Pris" => 1.50,
      "Antal" => 10
    ],
    [
      "Bakelse" => "Kaka",
      "Pris" => 5.00,
      "Antal" => 4
    ],
    [
      "Bakelse" => "Pirog",
      "Pris" => 2.50,
      "Antal" => 12
    ]
  ];

  foreach ($bakelser as $bakelse) {
    echo "Bakelse: " . $bakelse["Bakelse"] . ", Pris: " . $bakelse["Pris"] . ", Antal: " . $bakelse["Antal"] . "<br>";
  }

  echo "<br>";


  # b)
  echo "Pris på bulla: " . $bakelser[0]["Pris"];
  echo "<br>";
  echo "Antal piroger: " . $bakelser[2]["Antal"];


  echo "<br>";
  echo "<br>";


  # c)
  $antal_bakelser = count($bakelser);

  echo "Antalet olika bakelser: " . $antal_bakelser;


  echo "<br>";
  echo "<br>";


  # d)
  $totalt = 0;

  foreach ($bakelser as $bakelse) {
    $totalt += $bakelse["Antal"];
  }

  echo "Totala antalet bakelser: " . $totalt;


  ?>

</body>

</html>
