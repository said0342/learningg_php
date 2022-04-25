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

// exec() ile çalışıyorum

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;charset=UTF8","root",""); //dbname yazmadık çünkü şimdi oluşturacağız
echo "Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Basarisiz<br>";
echo "Hata Kodu : ". $hatamesaji -> getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->exec("CREATE DATABASE ornek_4 CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI");  //DİKKAT EXEC() KULLANDIM

if($Sorgu !== false){   // exec() biraz değişik if else de kullnırken denk(===) ve denk değilse(!==) ile kullanılıyor
    echo "Database Eklendi";
}
else{
    echo "Sorgu Hatası";
}



$VeritabaniBaglantisi = null;


?>
</body>
</html>