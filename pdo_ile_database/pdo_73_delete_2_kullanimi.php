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
DELETE : MySql sunucusundaki database içerisinde bulunan herhangi bir 
tablonun herhangi bir kaydını içeren satırı / satırları silmek için
kullanılır.
*/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "Hata Kodu : " . $hatamesaji->getMessage();
die();
}

$Sil = $VeritabaniBaglantisi->query("DELETE FROM uyeler WHERE id=16"); // KULLANIMI BU ŞEKİLDE DİĞER ÖRNEKTE KOŞULLU ŞEKLİNİ KULLANACAĞIM
if($Sil){
    echo "Tablonun İçeriği Silidi";
}
else{
    "Sorgu Hatasi";
}

$VeritabaniBaglantisi = null;
?> 
</body>
</html>