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


// bu işlemleri exec() ile de yapabiliriz exec() ile select yapılmaz ama ben tek tek yapmayacağım yapıldığını bilmem yeterli tek farkı kontrol ederken denk değil mi yapıyoruz (if($sorgu !== false))


try{
$veritabanibaglantisi = new PDO("mysql:host=localhost;charset=UTF8","root",""); //dbname'i sildim çünkü bir database'den başka bir database'e geçiş yapacağım
echo "Baglanti Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Baglanti Barasisiz<br>";
echo "Hata Kodu : " . $hatamesaji -> getMessage();
die();
}

// şimdi tablo kopyalama çalışacağız (FARKLI DATABASELER ARASI KOPYALAMA) 

$Sorgu = $veritabanibaglantisi->query("CREATE TABLE veritabani_1.ornekyedek LIKE test.ornek"); // burada test database'inin içindeki ornek tablosunu veritabani_1 databasesi'ne kopyaladım (yapılması da çok kolay tablo önüne database adını ekle . koy tamamdır) 



if($Sorgu){          
    echo "Tablo Basariyla Eklendi";
}
else{
    echo "Tablo EKlenemedi";
}




$veritabanibaglantisi = null;


?>
</body>
</html>