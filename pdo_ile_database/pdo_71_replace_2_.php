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
REPLACE : MySql sunucusundaki database içerisinde bulunan herhangi bir 
tablonun herhangi bir kaydını içeren satırındaki / satırlardaki sütuna
ait veriyi tam veya kısmi olarak değiştirmek için kullanılır.
*/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "Hata Mesaji : " . $hatamesaji->getMessage();
die();
}

// Kullanımı altta olduğu şekildedir bu sayfadaki örnekte koşul kullanarak yaptım
$Degistir = $VeritabaniBaglantisi->query("UPDATE uyeler SET il=REPLACE(il,'gonya','konya') WHERE id=4"); // id=4 deki kişinin gonyası->konya oldu
if($Degistir){
    echo "Guncelleme Tamamlandi";
}
else{
    echo "Sorgu Hatasi";
}

$VeritabaniBaglantisi = null;

?>
</body>
</html>