<?php

$languaes=array("php","asp","node js","html","css","angular js"
,function(){ //anonim fonksyionn 
    echo "php calismaya devam ediyorum";
},"http","asp.net");


/*dizi içinde fonksiyon yazmak için anonim fonksiyon kullanmak 
zorundayım,anonim fonksiyon da function yazdıktan sonra fonksyion
ismini yazmadan hemen {
.............
}  yazarsak anonim olur yukarıdaki örnekte zaten yaptım*/

echo $languaes[6]();  //dizi içindeki fonk böyle çağırılır
echo "<br>"; 
echo $languaes[4];   //normal dizi elemanı böyle çağırılır
echo "<br>"; echo "<br>"; echo "<br>";

//FONKSİYONLARA SINIRSIZ PARAMETRE ALMA

function mesaj(){
    $parametredegerleri=func_get_args(); //func_get_args paremetre değerlerini turar burada onu başka bir değişkene yani diziye atadım
    

  foreach($parametredegerleri as $yaz){  //atadoğım diziyi de foreach ile yazdırdım
      echo $yaz."<br>";
  }

  echo func_get_arg(4); //bu da fonksiyonun istenilen parametresini yazdırmak için kullanılır

echo "<br>";

  return func_num_args();  //fonksiyonun parametre sayısını veren fonksiyon
}

$parametrenumber=mesaj("fehmi","ayfer","elnaz","sanaz","isa");

echo $parametrenumber;





?>