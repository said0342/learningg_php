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


//burada da birden fazla veritabanina baglanmanin baska yoluna bakacagım


try{
$VeritabaniBaglantisiBir = new PDO("mysql:host=localhost;charset=UTF8","root",""); //bu yolda dbname burada yazmıyoruz
$VeritabaniBaglantisiIki = new PDO("mysql:host=localhost;charset=UTF8","root",""); //bu yolda dbname burada yazmıyoruz
echo "Veritabani Baglantilari Barayiyla Kuruldu";
}

catch(PDOException $hatamesaji){
echo "Veritabani Baglantilari Basarisiz<br>";
echo "Hata Kodu: ". $hatamesaji -> getMessage();
die();
}
    
$SorguBir  =  $VeritabaniBaglantisiBir->query("SELECT * FROM extraegitim.uyeler"); //bu şekilde kullanılıyor ama önceki yol bana daha kolay geldi muhtemelen onu kullanırım
$SorguIki  =  $VeritabaniBaglantisiIki->query("SELECT * FROM veritabani_1.ornek"); //bir de farklı olarak query metodu yazdık onun ve exec in detayına pdo_7 de bakacağım


$VeritabaniBaglantisiBir = null;
$VeritabaniBaglantisiIki = null;



?>
</body>
</html>