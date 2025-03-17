<?php
    $cidade = "Bauru";
    $dia = 3;
    $mes = "marco";
    $ano = 2025;

    while($dia <=31)
    {
    $data = "<b>$cidade</b>, $dia de $mes de <mark>$ano</mark><br>";
    echo $data;
    $dia += 7;
    }
    //Neste programa criei variaveis para cada termo a utilizar, e dei um valor a elas, como a cidade, dia, mes e ano, nisso concatenei as variaveis para formar uma frase/
?>