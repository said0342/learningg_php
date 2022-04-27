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
RENAME : MySql sunucusundaki database içerisinde bulunan herhangi bir
tablonun adını değiştirmek / güncellemek için kullanılır. Ayrıca istenirse
herhangi bir tabloyu içerisinden bulunduğu databaseden başka bir
database'e taşımak için kullanılır. 
*/

/* Tablonun adını değiştiriyorum */

try{
$veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
echo "Veritabai Baglantisi Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Veritabanina Baglanilamadi<br>";
echo "Hata Kodu : ".$hatamesaji->getMessage();
die();
}

$sorgu  =  $veritabanibaglantisi->query("RENAME TABLE volkan TO said"); // tablonun adı volkan'dı said oldu soldaki eski sağdaki yeni.

if($sorgu){
    echo "Tablo adi degistirildi";
}
else{
    echo "Sorgu Hatasi";
}


$veritabanibaglantisi = null;

?>
</body>
</html>