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
echo "Veritabani Baglanti Hatasi";
echo "HATA KODU : " . $hatamesaji->getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM uyeler",PDO::FETCH_ASSOC);
if($Sorgu){
    $KayitSayisi = $Sorgu->rowCount();
    if($KayitSayisi>0){
    foreach($Sorgu as $Yaz){
        echo $Yaz["id"]." | ".$Yaz["adisoyadi"]." | ".$Yaz["il"]." | ".$Yaz["yas"]."→→→→→→→"."<a href='pdo_69_guncelle.php ? kayitidsi=".$Yaz["id"]."'>GÜNCELLE</a>"."<br><br>";
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