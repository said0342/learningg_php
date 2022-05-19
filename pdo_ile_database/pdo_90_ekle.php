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

?>



<form action="pdo_90_sonuc.php" method="POST">
ISIM SOYISIM : <input type="text" name="isim"><br>
SEHIR : <input type="text" name="sehir"><br>
YAS : <input type="text" name="yas"><br>
<br><br>
<input type="submit" value="EKLE">
</form>



</body>
</html>