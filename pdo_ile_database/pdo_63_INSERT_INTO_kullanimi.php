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
INSERT INTO : MySql sunucusundaki database içerisinde bulunan herhangi
bir tabloya yeni bir kayıt satırı ile birlikte verisini de /verilerini de
eklemek için kullanılırç.
*/

try{
$Veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Veritbani Baglanti Hatasi."."<br>";
echo "Hata Kodu :".$hatamesaji->getMessage();
die();
}

$Ekle = $Veritabanibaglantisi->query("INSERT INTO uyeler (il,adisoyadi,yas) values ('Konya','Ahmed Said Çetiner',19)"); // satır yani 1 kişi ekleme bu şekilde
if($Ekle){
    echo "Kayit Eklendi";
}
else{
    echo "Sorgu Hatası";
}

$Veritabanibaglantisi = null;

?>
</body>
</html>