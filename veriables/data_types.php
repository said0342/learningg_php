<?php

/*PHP aşağıdaki veri türlerini destekler:

Sicim
tamsayı
Float (kayan noktalı sayılar - çift olarak da adlandırılır)
Boole
Dizi
Nesne
BOŞ
Kaynak*/

//php boolean 

$x=true;
$y=false;


//php array

$players=array("messi","ronaldo","mbappe");
var_dump($players);  //dizinin eleman sayısını basar,hangi indiste ne var basar uzunluklarını string halinde basar.

echo "<br>";

for($i=0;$i<3;$i++)   //döngüyle de yazdırabilirim
{
echo $players[$i];
echo "<br>";
}



?>


