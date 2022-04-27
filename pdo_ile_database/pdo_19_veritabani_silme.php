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
DROP DATABASE  : MySql sunucusu içerisinde herhangi bir database'i silmek
için kullanılır.

*/

// BURADA MEVCUT BİR DATABASE'İ SİLDİM (exec() ile sildim)

try{
$veritabanibaglantisi = new PDO("mysql:host=localhost;charset=UTF8","root","");
echo "Veritabani Baglantisi Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglanti Sorunu Olustu<br>";
echo "Hata Kodu : ". $hatamesaji->getMessage();
die();
}

$Sorgu = $veritabanibaglantisi->exec("DROP DATABASE ornek_4");
if($Sorgu!==false){
    echo "database basari ile silindi";
}
else{
    echo "database silinemedi";
}

$veritabanibaglantisi = null;

?>
</body>
</html>