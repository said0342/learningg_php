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

$Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM uyeler",PDO::FETCH_ASSOC);
if($Sorgu){
  
$kayitsayisi = $Sorgu->rowCount();
if($kayitsayisi>0){
    foreach($Sorgu as $yazdir){
        echo $yazdir["adisoyadi"]." | ".$yazdir["il"]." | ".$yazdir["yas"]."<br><br>";
    }
    
    echo "<a href=pdo_90_ekle.php>EKLE</a>";
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