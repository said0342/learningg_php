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


$Guncelle = $VeritabaniBaglantisi->query("UPDATE istatistikler SET uyeid='8' , siteyegirissayisi='80' , siparissayisi='20'"); // kullanımı da bu şekilde
if($Guncelle){
    echo "Kayitlar guncellendi fakat hiç koşul (WHERE İfadesi) kullanmadığımız için tablodaki tüm kayıtlı şeyler için belirttiğimiz sütunlar değişir";

}
else{
    echo "Sorgu Hatasi";
}


$VeritabaniBaglantisi = null;

?>

</body>
</html>