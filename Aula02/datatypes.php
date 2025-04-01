<?php 

     $x = "Hello World!";
     $y = "Hello World!";

     var_dump($x);
     echo "<br>";
     var_dump($y);
     echo "<br>";
     
     $x = 12;

     var_dump($x);
     echo "<br><br>";

     $y = ['Claudeir', 'Junior'];

     var_dump($y);
     echo "<br>";

     echo $y [1];
     echo "<br>";

     $meuObj = new stdClass();
     $meuObj -> nome = "Davi";
     $meuObj -> idade = 42;
     $meuJson = json_encode($meuObj);
     echo $meuJson
     echo "<br>";
     var_dump($meuJson);

?>