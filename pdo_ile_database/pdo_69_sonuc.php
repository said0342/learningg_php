<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=,, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

 try{
 $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
 }
 catch(PDOException $hatamesaji){
 echo "Veritabani Baglanti Hatasi<br>";
 echo "Hata Kodu : " . $hatamesaji->getMessage();
 die();
 }

$GelenIdDegeri           =  $_POST["kayitIDsi"];
$GelenIsimSoyisimDegeri  =  $_POST["adisoyadi"];
$GelenSehirDegeri        =  $_POST["il"];
$GelenYasDegeri          =  $_POST["yas"];


$Guncelle = $VeritabaniBaglantisi->query("UPDATE uyeler SET adisoyadi='$GelenIsimSoyisimDegeri' , yas='$GelenYasDegeri' , il='$GelenSehirDegeri' WHERE id=$GelenIdDegeri" );

if($Guncelle){    
header("Location:pdo_69_index.php");
exit();
}
else{
    echo "Sorgu Hatasi";
}

$VeritabaniBaglantisi = NULL;

?>
</body>
</html>