<?php

//ASSOCIATIVE ARRAYS (İLİŞKİSEL DİZİLER) *****

$age = array("peter"=>"35","max"=>"20","joe"=>"10");

echo "max is ". $age['max'] . " years old";  echo "<br>";

//bu örneği tüm kişiler için foreach ile yapmaya çalışacağım

foreach($age as $indeks => $yas){

echo "$indeks is $yas years old"; 
echo "<br>";
}

echo "<br>";
?>












