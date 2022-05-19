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

$Sorgu = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler",array(PDO::FETCH_OBJ)); // FETCH_OBJ yazsak da veriler sanki array(FETCH_BOTH) varmış gibi alınmalıdır.
$Sorgu->execute();
if($Sorgu){
$Kayitsayisi=$Sorgu->rowCount();
        if($Kayitsayisi>0){
             foreach($Sorgu as $Yaz){ 
                 echo $Yaz["adisoyadi"]." | ".$Yaz["il"]." | ".$Yaz["yas"]."<br><br>";
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