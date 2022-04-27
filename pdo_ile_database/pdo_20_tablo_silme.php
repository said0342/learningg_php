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
DROP TABLE     : MySql sunucusundaki database içerisinde bulunan herhangi 
bir tabloyu silmek için kullanılır.
*/

try{
    $veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
    echo "Veritabani Baglantisi Basarili<br>";
    }
    catch(PDOException $hatamesaji){
    echo "Veritabani Baglanti Sorunu Olustu<br>";
    echo "Hata Kodu : ". $hatamesaji->getMessage();
    die();
    }
    
    $Sorgu = $veritabanibaglantisi->exec("DROP TABLE aaa");
    if($Sorgu!==false){
        echo "tablo basari ile silindi";
    }
    else{
        echo "database silinemedi";
    }
    
    $veritabanibaglantisi = null;
    


?>
</body>
</html>