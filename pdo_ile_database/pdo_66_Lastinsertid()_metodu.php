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
LastInsertId : MySql sunucusundaki database içerisinde bulunan
herhangi bir tabloya yeni bir kayıt eklendiğinde , eklenen son
kaydın id değerini/verisini bulmak için kullanılır.
*/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Veritabanina Baglanma Hatasi<br>";
echo "Hata Kodu : ".$hatamesaji->getMessage();
die();
}

$Ekle = $VeritabaniBaglantisi->query("INSERT INTO uyeler (adisoyadi,yas,il) values ('Berke Didin','22','Afyon')");
if($Ekle){
    echo "Ekleme Basarili<br>";
    echo "Son Eklenen Kaydin ID Degeri : ".$VeritabaniBaglantisi->lastInsertId(); // Son eklenen kaydın ID değerini bulma bu şekilde yapılır.
}
else{
    echo "Sorgu Hatasi";
}

$VeritabaniBaglantisi = null;

?>

</body>
</html>