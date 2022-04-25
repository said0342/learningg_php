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
    getAvailableDrivers() : Php yazılımları içerisinden sisteme tanımlı olan ve kullanılabilir PDO sürücülerini
    bulur ve bulduğu değerlerden yeni bir dizi oluşturarak , oluşturduğu değerleri geriye döndürür 
    */
    
    $degerler = PDO::getAvailableDrivers();
    
    echo "<pre>";
    print_r($degerler);
    echo "<pre>";


   ?>
</body>
</html>