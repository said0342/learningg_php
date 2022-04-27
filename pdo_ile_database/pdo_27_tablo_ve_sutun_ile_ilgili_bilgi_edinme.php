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
SHOW TABLES   : MySql sunucusundaki database içerisinde bulunan tüm
tabloların listesini bulmak için kullanılır.

SHOW COLUMNS  : MySql sunucusundaki database içerisinde bulunan herhangi
bir tablonun tüm sütunlarının listesini bulmak için kullanılır.
*/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
echo "Veritabani baglantisi basarili<br>";
}
catch(PDOException $hatamesaji){
echo "veritabani baglanti hatasi<br>";
echo "hata kodu : ".$hatamesaji->getMessage();
die();
}

$sorgu = $VeritabaniBaglantisi->query("SHOW TABLES"); // kullanımı bu şekilde dizi gibi atıyor en son foreach ile yazdırdım
if($sorgu){
foreach($sorgu as $tablolar){
echo "$tablolar[0]<br>";
} 
}

/*
 $sorgu = $VeritabaniBaglantisi->query("SHOW TABLES FROM extraegitim"); // kullanımı bu şekilde dizi gibi atıyor en son foreach ile yazdırdım
 if($sorgu){   //   yukarda dbname belirtmezsek bu şekilde de FROM kullarak dbname ' i burda yazdırabiliriz
 foreach($sorgu as $tablolar){
 echo "$tablolar[0]<br>";
 } 
 }
*/

else{
    echo "Sorgu Hatasi";
}


$VeritabaniBaglantisi = null;

?>
</body>
</html>