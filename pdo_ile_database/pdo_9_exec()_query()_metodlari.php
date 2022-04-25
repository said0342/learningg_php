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


// bu sayfada exec() ile 1 tane ekleme yapmaya çalışıyorum (exec genelde silme ekleme güncelleme vs. işlemlerini yapar)

try{
$VeritabaiBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
echo "Veritabanina Baglanti Kuruldu<br>";
}
catch(PDOException $hatamesaji){
echo "Veritabanina Baglanilamadi<br>";
echo "Hata Mesaji : ". $hatamesaji -> getMessage();
die();
}

$sorgu = $VeritabaiBaglantisi->exec("INSERT INTO uyeler_2 (adisoyadi) values ('php ile said cetin')");

echo "islemden etkilenen kayit sayisi : " .$sorgu;


$VeritabaiBaglantisi = null;












?>
</body>
</html>