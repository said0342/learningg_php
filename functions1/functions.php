<?php

function us_alma($a,$b){
   echo pow($a,$b); 
}

function ailebilgi($yas,$isim){
echo "ismi $isim , yasi $yas";
}

function topla($c,$d){
return $c+$d;
}

us_alma(2,6);
echo "<br>";
ailebilgi(14,"ahmet");
echo "<br>";
echo topla(5,9);

function boy($x=50){
   echo "the height is : $x";
}
echo "<br>";
boy(100);
echo "<br>";
boy();    //içi boş gönderirsem fonksiyonu tanımlarken kaça değişkeni herhangi bir şeye eşitlediysem onu yazdırır tanımlarken sadece tanımlama yapıp bir şeye eşitlemediysem hata verir.
echo "<br>";

function besekleme($a){
   return $a+=5;
}

echo besekleme(50);






?>