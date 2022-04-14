<?php

//SORTİNG ARRAYS (SIRALAMA DİZİLERİ) *****

/*
sort()- dizileri artan düzende sıralayın
rsort()- dizileri azalan düzende sıralayın
asort()- ilişkisel dizileri değere göre artan düzende sıralayın
ksort()- anahtara göre ilişkisel dizileri artan düzende sıralayın
arsort()- ilişkisel dizileri değere göre azalan düzende sıralayın
krsort()- ilişkisel dizileri anahtara göre azalan düzende sıralayın
*/

$cars = array("volvo","bmw","toyota");

$numbers = array(4,5,22,11);

$y=count($cars);  //cars dizisinin eleman sayısını veriyor.

for($b=0;$b<$y;$b++)   //bu normal sıralama
{
echo $cars[$b]."<br>";   
}

echo "<br>";


sort($cars);  //burada da harf sırasına göre artan sıralama.
for($b=0;$b<$y;$b++)  
{
echo $cars[$b]."<br>";   
}


echo "<br>";echo "<br>";


rsort($cars);  //burada da harf sırasına göre azalan sıralama.
for($b=0;$b<$y;$b++)  
{
echo $cars[$b]."<br>";   
}

?>