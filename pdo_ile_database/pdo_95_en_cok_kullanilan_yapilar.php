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

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $HataMesaji){
echo "Veritabani Baglantİ Hatasi<br>";
echo "Hata Kodu : " . $HataMesaji->getMessage();
die();
}

$Guncelle = $VeritabaniBaglantisi->prepare("UPDATE uyeler SET il=:yeniil WHERE il=:kayitliil"); // ? kullanmadan yaptım kendim parametre tanımladım
$Guncelle->execute(['yeniil' => 'konya' , 'kayitliil' => 'Afyonkarahisar']);

if($Guncelle){
    echo "Kayit Guncellendi";
}
else{
    echo "Sorgu Hatasi";
}


$VeritabaniBaglantisi = null;

?>

</body>
</html>