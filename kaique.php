<?php
$proprietario = "Kaique";
$locador = "José";
$valor = 2000.00;
$reajuste = 5.00;

$novo_valor = $valor * ($reajuste / 100 + 1);

echo "<H1>Proprietário:</H1>";
echo "<mark>$proprietario</mark>";

echo "<H1>Locador:</H1>";
echo "<mark>$locador</mark>";

echo"<H1>Valor:</H1>";
echo "<mark>$valor</mark>";

echo"<H1>Reajuste:</H1>";
echo "<mark>%$reajuste</mark>";

echo"<H1>Novo valor:</H1>";
echo "<mark>$novo_valor</mark>";
?>