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

//classlarla ilgili örnek kullanımlar açıklamalarını oop1 de yaptım

  class Deneme{
      public function Egitim(){
          $sonuc = "A dan Z ye PHP Egitim Seti";
          return $sonuc;
      }

      public function Egitim2(){
        $sonuc = "A dan Z ye JS Egitim Seti";
        return $sonuc;
    }
  }
   
  $nesne = new Deneme;
  
  $yazdir = $nesne->Egitim();
  $yazdir2 = $nesne->Egitim2();

  echo $yazdir."<br>";
  echo $yazdir2;


  ?>
</body>
</html>