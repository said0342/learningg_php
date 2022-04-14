<?php

/*
-**- while- belirtilen koşul doğru olduğu sürece bir kod bloğunda döngü yapar
-**- do...while- bir kod bloğunda bir kez döngü yapar ve ardından belirtilen 
koşul doğru olduğu sürece döngüyü tekrarlar
-**- for- bir kod bloğunda belirli sayıda döngü yapar
-**- foreach-yalnızca dizilerde çalışır , bir dizideki her öğe için bir kod bloğu boyunca döngüler
*/

//while
$x=1;
while($x<=100){    //100 den küçük olduğu müddetçe 10 ar artırarak yazdır
    echo "the number is : $x <br>";
    $x+=10;
}

echo "<br>";

//do while
$y=5;
do{         //do while mantığını anladım y yi 5 den başla 0 a kadar in yazdır , mesela şartı sağlamıyor ona rağmen 1 kere yanlış olsa da yazdırır çünkü koşulu sonda kontrol ediyor
  echo "The number is: $y <br>";
  $y++;
} 
while ($y <= 5);

echo "<br>";

//for
for($i=0;$i<10;$i++)  //for döngüsü örneği 0 dan başla 10 a kadar 1 er 1 er artır 
{    
echo "the number is : $i"."<br>";    
}

echo "<br>";


//foreach
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $renk) {  //burada colors dizisindeki elemanları tek tek renk adlı değişkene atıp yazdırdım elemanların hepsi yazılınca döngü bitti , forech dizilerde kullanılan döngüdür
  echo "$renk <br>";
}

echo"<br>";

$cars = array("maserati","bugatti","rangrover","mercedes");
foreach ($cars as $indeks => $araba){  // 3 haneli foreachlarda diziden sonra sıralamsını belirtiyorsun sonra değişkene atıyorsun 0. ahmed  1. mehmet ... gibi yazdırıyor diziyi
echo "$indeks indeksli araba $araba<br>";
}

echo"<br>";

$sayilar =range(1,10);  //range fonksiyonu bir aralığı belirtir mesela 1,10  1 ile 10 arası sayılar dizisini belirtir
foreach($sayilar as $siralamasi => $sayi){
  echo "$siralamasi indeksli eleman = $sayi<br>";
}

echo"<br>";

$harfler = range("a","z");
foreach($harfler as $indeks => $harf){
  echo "$indeks siradaki harf = $harf<br>";
}

echo"<br>";

$age = array("peter="=>"35","ben"=>"20","joe"=>"45"); //bu şekilde de kullanılır isim=>yaş yazınca forech ta isim sonra yazş basılır 1. 2. diye basılmaz çünkü burada bir şey belirtmişiz 
foreach($age as $indeks => $val){
  echo "$indeks= $val<br>";
}
echo"<br>";
/***break ve continue***/

//break : switcden atlamak için döngüden çıkmak için kullanılır.

for($p=100;$p>-1;$p=$p-10){
  if($p==50)
  break;

  echo $p;
  echo "<br>";
}
echo "<br>";
//continue:bir koşul olursa ifade bir yinelemeyi yani döngüyü keser ve dongüdeki bir sonraki kademeyle devam eder

for($x=0;$x<10;$x++){
if($x==4){
  continue;   //bunu gördü dongu başa döndü dondüğü için de 4  1 artarak 5 oldu 5 den devam etti
}
echo "number is : $x";
echo "<br>";
}









?>