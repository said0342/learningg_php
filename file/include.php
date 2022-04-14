<!-- 
( includeveya require) ifadesi, belirtilen dosyada bulunan
tüm metni/kodu/işareti alır ve bunu include ifadesini kullanan
dosyaya kopyalar.
Bir web sitesinin birden çok sayfasına aynı PHP, HTML veya metni eklemek
istediğinizde dosyaları dahil etmek çok yararlıdır.    
-->

<?php

function topla($a,$b){
    return $a+$b;
}

echo topla(5,8);
echo "<br>";

require 'eklenecek_dosya.php';    //require ile de include ile de ekleme yapılır ben örnekte include yi yorum satırına aldım requireyi de alabilirdim
//include 'eklenecek_dosya.php';
echo "<br>";
echo "I have a $color $car";  //çağırdığımız sayfadaki tanımlanan değişkenler çağırılan sayfada da geçerli olur




?>