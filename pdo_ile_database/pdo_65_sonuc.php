
<!-- pdo_65_index.php VE pdo_65_sonuc.php de ÖRNEKLERDE FORMDAN GİRİLEN BİLGİYİ VERİTBANINA EKLEME ÖRNEĞİ YAPACAĞIZ -->

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
catch(PDOException $hatamesaji){
echo "Veritabani Baglantisi Basarisiz<br>";
echo "Hata Kodu : ".$hatamesaji->getMessage();
die();
}

$Gelenisim = $_POST["isim"];
$Gelensehir = $_POST["sehir"];
$Gelenyas = $_POST["yas"];

$Ekle = $VeritabaniBaglantisi->query("INSERT INTO uyeler (adisoyadi,yas,il) values ('$Gelenisim','$Gelenyas','$Gelensehir')");

if($Ekle){
    header("Location:pdo_65_index.php"); // BU EĞER VERİ EKLEME BAŞARILI OLURSA GİDECEĞİ YERİ GÖSTERMEK İÇİN KULLANILIR BEN EKLEME BAŞARILI OLURSA index.php ye git dedim çünkü onun altında kolayca eklendğini görebilirim (veritabanına ekleme başarılı)

}

else{
    echo "Sorgu Hatasi";
}

$VeritabaniBaglantisi = null;

?>

</body>
</html>