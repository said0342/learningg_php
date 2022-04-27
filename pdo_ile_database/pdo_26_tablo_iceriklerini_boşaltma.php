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
TRUNCATE TABLE : MySql sunucusundaki database içerisinde bulunan herhangi
bir tablonun tüm içeriklerini boşaltmak / sıfırlamak için kullanılır. 
*/

try{
$VeriTabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
echo "Veritabani Baglantisi Basarili<br>";
} 
catch(PDOException $hatamesaji){
echo "Veritabani Baglantisi Basarisiz<br>";
echo "Hata Kodu : ".$hatamesaji->getMessage();
die();
}

$sorgu=$VeriTabaniBaglantisi->query("TRUNCATE TABLE uyeler"); 
if($sorgu){
    echo "Tablo icerigi boşaltıldı"; //boşaltma ile silme aynı değildir mesela 4 kayıt vardı tabloyu boşalttım sonra kayıt ekledim onun id'sine 1 verir ama siler de eklersem id'sine 5 verir.
}
else{
    echo "Sorgu Hatası";
}

$VeriTabaniBaglantisi = null;

?>
</body>
</html>