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

/*
-CREATE TABLE     :  MySql sunucusundaki database içerisine yeni bir tablo
ekleme/oluşturma için kullanılır. Ayrıca istenirse herhangi bir tablo 
içeriklerini başka bir tabloya kopyalamak için de kullanılabilir.
*/

try{
$veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
echo "Baglanti Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Baglanti Barasisiz<br>";
echo "Hata Kodu : " . $hatamesaji -> getMessage();
die();
}

// şimdi tablo ekleyeceğiz

$Sorgu = $veritabanibaglantisi->query("CREATE TABLE ornek (  /* query yerine exec de kullanabilirdim tek fark if de denkse(===) yi kullanmak olucaktı*/

id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
adi varchar(20) NOT NULL,
soyadi varchar(20) NOT NULL,
EmailAdress varchar(40) NOT NULL UNIQUE KEY, 
durumu tinyint(1) UNSIGNED NOT NULL,                                       /* BURADA KULLANDIĞIM TERİMLERİ ÖNCEKİ KISIMDA ÇALIŞTIĞIM İÇİN BİLİYORUM */
kayittarihi timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
yoneticiaciklamasi text NOT NULL
)
ENGINE = InnoDB DEFAULT CHARACTER SET UTF8 COLLATE utf8_general_ci");



if($Sorgu){          /* exec() olsaydı if($sorgu!==false) yazmak zorunda kalırdık */
    echo "Tablo Basariyla Eklendi";
}
else{
    echo "Tablo EKlenemedi";
}




$veritabanibaglantisi = null;


?>
</body>
</html>