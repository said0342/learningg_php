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
echo "Veribani Baglanti Hatasi<br>";
echo "Hata Mesaji : " . $hatamesaji->getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM istatistikler",PDO::FETCH_ASSOC);
if($Sorgu){

    $KayitSayisi = $Sorgu->rowCount();
    if($KayitSayisi>0){
       foreach($Sorgu as $yaz){
           echo $yaz["id"]." | ".$yaz["uyeid"]." | ".$yaz["siteyegirissayisi"]." | ".$yaz["siparissayisi"]." --->>> <a href='pdo_74_sil.php?id=".$yaz["id"]."'>SİL</a>"." <br><br> ";
       }
    }
    else{
        echo "Kayit Bulunamadi";
    }
}
else{
    echo "Sorgu Hatasi";
}

$VeritabaniBaglantisi = null;

?>
</body>
</html>