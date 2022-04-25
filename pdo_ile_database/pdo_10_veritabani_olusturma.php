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
-CREATE DATABASE  :  MySql sunucusuna yeni bir database ekleme/oluşturma
için kullanılır.

*/



// query() ile çalışıyorum

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;charset=UTF8","root",""); //dbname yazmadık çünkü şimdi oluşturacağız
echo "Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Basarisiz<br>";
echo "Hata Kodu : ". $hatamesaji -> getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->query("CREATE DATABASE ornek_2 CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI"); // database oluşturdum karşılaştırna setini de utf8 yaptım , yapmak zorunda değildim yapmasam da oluşurdu karşılaştırma setine otomatik bir şey seçilirdi 

if($Sorgu){
    echo "Database Eklendi";
}
else{
    echo "Sorgu Hatası";
}





$VeritabaniBaglantisi = null;


?>
</body>
</html>