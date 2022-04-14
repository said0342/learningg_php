<!-- ALT SINIF TÜRETME (extends) işlemleri ve örnekleri -->

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
   
    public $isim  =  "AHMED";

    public function Bilgi(){
    $metin = "PHP";
    echo $this->isim."  ";
    return $metin; 
    }
}

class Iki extends Bir{ 
   public function Bilgi(){
   $metin = "js ".parent::Bilgi();
   return $metin;  
   }  
}

$Nesne = new Iki; 

echo $Nesne -> Bilgi(); 





?>
</body>
</html>