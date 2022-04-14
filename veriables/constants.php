<?php
/*Sabitler, bir kez tanımlandıklarında değiştirilememeleri
 veya tanımlanmamaları dışında değişkenler gibidir.*/

define("sayi","5");  //sabit değer oluşturulurken define kullanılır ilk parametre değişken ismi 2. parametre tutacağı değeri gösterir
echo sayi;

echo "<br>";

define("yemekler",["makarna","brokoli","et"]); //dizileri de sabit şeklinde yazabiliriz
echo yemekler[1];

//mesela fonksiyoun dışında bir sabit tanımladım onu fonksiyon içinde de kullanabilirim.

?>