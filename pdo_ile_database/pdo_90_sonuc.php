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
echo "Veritabanina Baglanma Hatasi";
echo "Hata Kodu : " . $HataMesaji->getMessage();
die();
}

$GelenISIM  = $_POST["isim"]; 
$GelenYAS   = $_POST["yas"];
$GelenSEHIR = $_POST["sehir"];

$Sorguu = $VeritabaniBaglantisi->query("INSERT INTO uyeler (adisoyadi,yas,il) values ('$GelenISIM','$GelenYAS','$GelenSEHIR')");
if($Sorguu){
    header("Location:pdo_90_index.php");
    exit();

}
else{
    echo "Sorgu Hatasi";
}

?>
</body>
</html>