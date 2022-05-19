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
echo "HATA MESAJI:".$hata->getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE id>? AND id<?");  // buraya koşul belirtecek sayısı soru işareti şeklinde yazabiliriz soru işareti yerine yazılacak sayıyı da execute içinde köşeli parantezle belirtebiliriz,istediği kadar soru işareti olsun sırayla execute içerisine yaz
$Sorgu->execute([3,5]);   // !! ? işaretinin değerleri buraya yazılıyor                                   
if($Sorgu){
$Kayitsayisi=$Sorgu->rowCount();
        if($Kayitsayisi>0){
             $Kayit=$Sorgu->fetchAll(PDO::FETCH_BOTH); 
                 foreach($Kayit as $yaz){
                 echo "ID:".$yaz["id"]." | ".$yaz["adisoyadi"]." | ".$yaz["il"]." | ".$yaz["yas"]."<br><br>";
                 }
        }
        else{
            echo "Kayit Yok";
        }
}
else{
    echo "Sorgu Hatasi";
}

$VeritabaniBaglantisi = null;

?>
</body>
</html>