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
Bu örnekte de ? yazdığım yerlerin değerlerini execute içinde belirtmedim öncelikle değişken oluşturup vereceğim değerleri 
değişkene atadım sonra bindParam ifadesini kullanarak ? yerine yazılacak değerleri değişken çağırtarak belirttimm .
Kaç tane ? varsa o kadar da $Sorgu->bindParam() ifadesini kullanacağız ilk parametre 1 2 3 ... kaç tane varsa soru işareti
artıra artıra yazıcaz sonra değerleri sırayla yazıcaz sonra da türünü belirticez int float vs.

Kullanımları aşağıdaki gibi 
*/

$IlkDeger  =  2;
$SonDeger  =  5;

$Sorgu = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE id>=? AND id<=?");  
$Sorgu->bindParam(1,$IlkDeger,PDO::PARAM_INT);
$Sorgu->bindParam(2,$SonDeger,PDO::PARAM_INT);
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