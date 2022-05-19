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

/*
Bu sayfada 84. sayfada yaptığım örneğin ? yerine başka bir ifade ile kullanımını görüceğim

Kullanımları aşağıdaki gibi 
*/

$IlkDeger  =  2;
$SonDeger  =  5;

$Sorgu = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE id>=:IlkIDDegeri AND id<=:SonIDDegeri"); // ? yazmadık başka şeyler yazdık  
$Sorgu->bindParam("IlkIDDegeri",$IlkDeger,PDO::PARAM_INT); // burda da normalde 1 2 3 4 ... diye sıra numarası yazdığımız yerlere ? yerine yazdığımız ifadeyi yazdık
$Sorgu->bindParam(":SonIDDegeri",$SonDeger,PDO::PARAM_INT); // burda da normalde 1 2 3 4 ... diye sıra numarası yazdığımız yerlere ? yerine yazdığımız ifadeyi yazdık
$Sorgu->execute();                                  
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