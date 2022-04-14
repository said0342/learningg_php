<?php
$x = 5985;
var_dump($x);  //var_dump değişkenin türünü buluyor
echo "<br>";
$y = 59.85;
var_dump(is_float($y));  //is_float yazarsak float mı bakar doğruysa true yanlışsa false yazar
echo "<br>";
$z = 1.9e411;
var_dump($z);  //sayı sonsuz olduğu için floar(INF) bastırır
echo "<br>";
$r="as";
var_dump($r); //sayı olmadığı için string(2) basar 
echo "<br>";

$x = 5985;
var_dump(is_numeric($x));  // bu ve altındaki 3 kodda numeric değişkenini kullandım sayısal bir değerse true değilse false döndürüyor
echo "<br>";
$x = "5985";
var_dump(is_numeric($x));
echo "<br>";
$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";
$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";


//şimdi değişken değiştirme yapacağım

$s=51588.84;
$int_yapma=(int)$s;
echo $int_yapma;



?>