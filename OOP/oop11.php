<!--
Sınıf içerisindeki bir özelliğe sınıf dışından değer atama
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

class Deneme{
public $okul = ""; //boş değer atayabilirim , belki değerini daha sonra ekleyeceğim
public $isim = "Volkan";
public $soy_isim = "Alakent"; 
}

$islem = new Deneme;

echo $islem -> isim;
echo "<br>";
echo $islem -> okul = "kto"; //normalde classın içinde okul özelliğinin içi boştu sınıf dışından özelliğe değer atamayı bu şekilde yaptım
echo "<br>"; echo "<br>";



class Deneme_2{
public $name = "ahmed";
public $school = "ktun";
public $username; //illaki = "" yapmamıza gerek yok bu şekilde bırakınca da boş olmuş oluyor
}

$yazdir = new Deneme_2;

echo $yazdir -> name = "said"; //classın içindeki özelliği class dışında değiştirdim
echo "<br>";
echo $yazdir -> school;
echo "<br>";
echo $yazdir -> school = "selcuk"; //classın içindeki özelliği class dışında değiştirdim
echo "<br>";
echo $yazdir -> username = "said0342";
echo "<br>"; echo "<br>";


//private ya da protected olunca özellikleri nesne dışından değişmiyor
class Deneme_3{
public $baba_adi = "hamdi";
private $seri_no = "a858sa9856";
protected $tc = "84481185161";
}

$yaz = new Deneme_3;

echo $yaz -> baba_adi."<br>";
echo $yaz -> seri_no = "aaaaaa"; //private olduğu için hata veriyor ilerleyen derslerde detaylı bakacağız
?>
</body>
</html>