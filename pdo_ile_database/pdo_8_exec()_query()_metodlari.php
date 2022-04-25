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


// bu sayfada exec() ile çalışacağım 

try{
$VeritabaiBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
echo "Veritabanina Baglanti Kuruldu<br>";
}
catch(PDOException $hatamesaji){
echo "Veritabanina Baglanilamadi<br>";
echo "Hata Mesaji : ". $hatamesaji -> getMessage();
die();
}

$sorgu = $VeritabaiBaglantisi->exec("SELECT * FROM uyeler_2"); //Şimdi query yerine exec kullandık . SELECT okuma işlemi yapıyor
// üstte select yerine delete yazsaydım uyeler_2 tablosunu silerdi , işlemden etkilenen kayıt sayısı da tabloda kaç kişi varsa o olurdu (3)
//exec metodu select işlemlerinde kullanılmamalıdır query() kullanılmalıdır

echo "Islemde etkilenen kayıt sayisi : ".$sorgu;

$VeritabaiBaglantisi = null;












?>
</body>
</html>