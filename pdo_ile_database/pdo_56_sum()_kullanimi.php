<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/*
COUNT : MySql sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun toplam kayıt sayısını bulmak için kullanılır.
MIN   : MySql sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun en küçük değerini bulmak için kullanılır.
MAX   : MySql sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun en büyük değerini bulmak için kullanılır.
SUM   : MySql sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun tüm kayıt değerlerinin toplamını bulmak için kullanılır.
AVG   : MySql sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun tüm kayıt değerlerinin ortalmasını bulmak için kullanılır.
*/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Baglanti Hatasi<br>";
echo "Hata Mesaji : " . $hatamesaji->getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->query("SELECT SUM(yas) AS toplamyas FROM uyeler")->fetch(); // yas yerine adisoyadi id falan da yazabiliriz 
//SUM SÜTUNLARDAKİ TOPLAM DEĞERLERİ BULUR

if($Sorgu){

  echo "Yaslarin Toplami : ".$Sorgu["toplamyas"];

}
else{
    echo "Baglanti Hatasi";
}

$VeritabaniBaglantisi = null;
?>
</body>
</html>
