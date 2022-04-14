<!-- ALT SINIF TÜRETME (extends) ve parent nedir vs. -->

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

class Bir{
    public function Bilgi(){
    $metin = "PHP";
    return $metin; 
    }
}

class Iki extends Bir{ 
   public function Bilgi(){
   $metin = "JS";
   echo $metin." ";
   return parent::Bilgi(); //parent dediğim için ebebeyin sınıfındaki metoda gidiyor ve program hata vermiyor (this deseydim sonsuz döngüye girerdi)
   }   //parentler ile özellikleri alamayız metodları alabiliriz
}

$Nesne = new Iki; 

echo $Nesne -> Bilgi(); 





?>
</body>
</html>