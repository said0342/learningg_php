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
UPDATE : MySql sunucusundaki database içerisinde bulunan herhangi bir 
tablonun herhangi bir kaydını içeren satırındaki sütuna / sütunlara
ait veriyi / verileri güncellemek için kullanılır.
*/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Veritabanina Baglanilamadi<br>";
echo "Hata Kodu : " . $hatamesaji->getMessage();
die();
}


$Guncelle = $VeritabaniBaglantisi->query("UPDATE uyeler SET adisoyadi='Hakan Kağan' , yas='55' , il='istanbul' WHERE id=5"); // koşulla beraber kullanımı da bu şekilde
if($Guncelle){
    echo "Kayitlar güncellendi koşul belirttiğimiz için(WHERE id=5 dedim id'si 5 olanı güncelledi) sadece belirttiğimiz koşula sahip satır güncellendi";

}
else{
    echo "Sorgu Hatasi";
}


$VeritabaniBaglantisi = null;

?>

</body>
</html>