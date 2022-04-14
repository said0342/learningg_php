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
  Class : Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan nesnelere verilen isimdir.
  
  new : Daha önceden tanımlanmış olan herhangi bir sınıfı çağırmak için kullanılır.

  Kurallar 
  1. Sınıf isimleri her zaman anlamlı kullanılmalıdır. 
  2. Sınıf isimlerinde (a-z A-Z 0-9) ve (alt çizgi(_)) kullanılabilir.
  3. Sınıf isimleri mutlaka bir harf veya _ ile başlamalıdır. Hiçbir zaman da rakam ile başlayamaz.
  4. Sınıf isimleri içerisinde hiçbir zaman boşluk,türkçe karakterler ve özel karakterler kullanılamaz.
  5. Sınıf isimleri tanımlanırken PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz. 
  6. Sınıf isimleri hiçbir zaman birden fazla kes kullanılamaz.(Namespace(isim uzayı kullanılması durumunda birden fazla kez kullanılabilir))
  7. İsimleri küçük harfe büyük harfe duyarlı değildir.
  8. Sınıf kapsama / etki alanı kurallarına tabidir.

  
  YAPISI
  class isim{
    kod blokları
  }
  */

class IsimSoyisim{
  
 /***CLASSLARDA DEĞİŞKENLERE VE SABİTLERE ÖZELLİK DENİR***/ 
 //$degisken = "";  //classın içinde normal değişken tanımlamak için 'var' komutu kullanılır. oop7 de detaylı bir şekilde inceledim.
 public $isim = "volkan";     //Her yerden erişilebilir özellik
 public $soy_isim = "cetin";
 private $soyisim = "alakentli";   //Özel yani sadece sınıf içerisinden erişilebilir özellik
 protected $cinsiyet = "erkek"; //korumalı yani bu sınıf içerisinden ve bu sınıftan türiyen başka sınıflar içinden erişilebilir özellik 

 public const TEST = "MESAJ"; //const = sabit demektir
 
 

 /***CLASSLARDA FONKSİYONLARA DA METOD DENİR***/
 /*
 function xxx(){

 }

 function qqqqq(){

 }
 */

}

 $sonuc = new IsimSoyisim; // sonuç değişkenine sınıfı çalışır vaziyette attım ama ekrana bir şey basmaz çünkü herhangi bir özelliğini bas demedim daha o işlemi 1 alt satırda yaptım

 echo $sonuc ->isim." ";         //özellik çağırma (değişken tipliler böyle çağırılır)
 echo $sonuc ->soy_isim."<br>";  //özellik çağırma (değişken tipliler böyle çağırılır)
 echo IsimSoyisim::TEST;         //özellik çağırma (sabitler böyle çağırılır)
  







  ?>
</body>
</html>