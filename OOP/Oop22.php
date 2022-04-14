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

class Dersler{
  
   public function AAA(){
   $icerik = "a dan z ye PHP egitim seti"."<br>";
   echo $icerik;
   }    
   public function BBB(){
   $icerik = "a dan z ye JS egitim seti"."<br>";
   echo $icerik;
   }  
   public function CCC(){
   $icerik = "a dan z ye CSS egitim seti"."<br>";
   echo $icerik;
   }  

   
}


class Egitmenler extends Dersler{

    public function AAA(){
    $kim = "Volkan Alakent";
    echo $kim." =   ";
    parent::AAA();
    }    
    public function BBB(){
    $kim = "Onur Tatlı";
    echo $kim." =   ";
    parent::BBB();
    }  
    public function CCC(){
    $kim = "Ümit Okudan";
    echo $kim." =   ";
    parent::CCC();
    }   

}

$Nesne = new Egitmenler;

$Nesne -> AAA()."<br>".$Nesne->BBB()."<br>".$Nesne->CCC();



?>
</body>
</html>