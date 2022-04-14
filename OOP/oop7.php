
<!-- 
class içinde standart değişken tanımlama 
konusunu işledik
-->
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


class deneme{
    var $name  =  "said"; //var kullanarak normal değişken tanımlayabiliyoruz , sabitlerde ve fonksiyonlarda tanımlama yaparken var kullanmadan yapılır var sadece standart değişkenlerde kullanılır
}

$yaz = new deneme;

echo $yaz->name;


 
?>

</body>
</html>