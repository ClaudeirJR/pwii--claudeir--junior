
<?php 
  //while
  $contador = 1;

  while ($i < 6) {
   echo $contador, "<br>";
   $contador++;
  }
  echo "Do while <br>";
  
  //do while
  $contadorii = 1;

  do {
    echo $contadorii;
    $contadorii++;
  } while ($contadorii < 6);

  //For 
  echo "<br> For <br>";

  for ($x = 0; $x <= 10; $x++) {
    echo "O número é $x <br>";
  }
?>