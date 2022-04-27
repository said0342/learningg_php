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

// BU SAYFADA TABLOYA SÜTUN DEĞİŞTİRME GÜNCELLEME İŞLEMLERİNİ YAPIYORUM (MODIFY -> isim değiştirmnez özellik değiştirir)

try{
$veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
echo "Veritabani Baglantisi Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglantisi Basarisiz<br>";
echo "Hata Kodu : ".$hatamesaji->getMessage();
die();
}

$SorguA = $veritabanibaglantisi->query("ALTER TABLE uyeler_2 MODIFY sifre timestamp DEFAULT current_timestamp NOT NULL");

if($SorguA){
    echo "Sutun basariyla guncellendi<br>";
}
else{
    echo "Sorgu Hatasi<br>";
}





$veritabanibaglantisi = null;

?>
</body>
</html>