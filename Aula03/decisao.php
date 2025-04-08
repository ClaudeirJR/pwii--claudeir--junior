<?php
    $x = 5;
    $y = 3;
    $media = ($x + $y) /2;


    if ($media >= 6.0) {
        echo 'Aluno aprovado';
    } else if ($media >= 4.0) {
        echo 'Aluno em recuperação'; 
    } else {
        echo 'Aluno reprovado';
    }

?>