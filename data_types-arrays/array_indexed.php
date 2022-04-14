<?php
//INDEXED ARRAYS *****

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

$yemekler = array("tavuk","pirzola","kunefe");
$a=count($yemekler);   //dongünün bitişini belirlemek için kaç haneli dizi onu buldum a ya atadım

for($i=0;$i<$a;$i++) //0 dan başla yukarıdaki belirttiğim gibi a ya kadar git ve tek tek yazdır
{
 echo $yemekler[$i]."<br>";   
}
echo "<br>";
?>