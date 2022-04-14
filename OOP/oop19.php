<!-- ALT SINIF TÜRETME (extends) -->

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
   public $isim         =  "Volkan";
   public $soy_isim     =  "Alakent";
   private $name        =  "Volki"; //private olduğu için sadece kendi sınıfından erişilebilir.yani bu sınıftan türetilen sınıfta da çalışmaz hata verir
   protected $bilgi     =  "hava sicak 30 derece";//protected olduğu için çalışır çünkü protected kendi sınıfında ve kendi sınıfından türeyen alt sınıflarda çalışır private ile farkı da budur
}

class Iki extends Bir{ //Buradaki açıklama Iki sınıfı Bir sınıfından türemiştir demektir. Türeyen sınıf türetilen sınıfın özellik ve metodlarını kullanabilir...
   public function Bilgi(){
   $metin = "2.".$this->isim." ".$this->soy_isim .$this->name ."<br>" . $this->bilgi . "<br>" . "a dan z ye php";   
   return $metin; 
   }   

}

$Nesne = new Iki; 

echo $Nesne -> Bilgi(); //bilgiler yazılır Iki classında bilgiler olmasa bile Bir classından türediği için oradaki özellikleri kullanabilir





?>
</body>
</html>