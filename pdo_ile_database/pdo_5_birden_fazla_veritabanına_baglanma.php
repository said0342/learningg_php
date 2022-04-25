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
try{
$VeritabaniBaglantisiBir  =  new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
echo "1. veritbani baglantisi basarili<br>";

}
catch(PDOException $hatamesaji1){
echo "1. Veritabani baglanti hatasi <br>";
echo "1. veritabani hata kodu: ".$hatamesaji1 -> getMessage();
die();
}
 
$VeritabaniBaglantisiBir = null;


            
try{
$VeritabaniBaglantisiIki  =  new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
echo "2. veritbani baglantisi basarili";

}
catch(PDOException $hatamesaji2){
echo "2. Veritabani baglanti hatasi <br>";
echo "2. veritabani hata kodu: ".$hatamesaji2 -> getMessage();
die();
}
 
$VeritabaniBaglantisiIki = null;

*/

//yukarıda 2 veritbanına ayrı ayrı try catch ile bağlandım uzun oldu o işlemi şimdi daha kısa yapacağım

try{
$VeritabaniBaglantisiBir = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
$VeritabaniBaglantisiIki = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
echo "Veritabani Baglantilari Barayiyla Kuruldu";
}

catch(PDOException $hatamesaji){
echo "Veritabani Baglantilari Basarisiz<br>";
echo "Hata Kodu: ". $hatamesaji -> getMessage();
die();
}












?>
</body>
</html>