<?php

$Precio1 = $_POST['pComida'];
$Precio2 = $_POST['pBebida'];
$Precio3 = $_POST['pComidaR'];
$Sub1 = $Precio1 * 80;
$Sub2 = $Precio2 * 20;
$Sub3 = $Precio3 * 40;
$Total = $Sub1 + $Sub2 + $Sub3;

echo "<a href=\"menu.php\"><input type=\"button\" value=\"Otra compra\" style=\"height:40px;width:110px\"></a></br></br>";
echo "<b>Total a Pagar</b></br></br>";
echo "Hamburguesas ............ $80 x $Precio1 = $$Sub1</br>";
echo "CocaColas .................. $20 x $Precio2 = $$Sub2</br>";
echo "PapasFritas ................. $40 x $Precio3 = $$Sub3</br>";
echo "</br>Total = $$Total"; 

?>