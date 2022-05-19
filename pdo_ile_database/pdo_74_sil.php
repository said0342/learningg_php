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
catch(PDOException $hata){
echo "Veritabani Baglanti Hatasi<br>";
echo "Hata Kodu : " . $hata->getMessage();
die();
}

$GelenID = $_GET["id"];

$sil = $VeritabaniBaglantisi->query("DELETE FROM istatistikler WHERE id=$GelenID");

if($sil){
    header("Location:pdo_74_index.php");
    exit();
}
else{
    echo "Sorgu Hatasi";
}


$VeritabaniBaglantisi = null;
?>
</body>
</html>