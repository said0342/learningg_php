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
try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "Hata Kodu : " . $hatamesaji->getMessage();
die();
}

$GelenID = $_GET["kayitidsi"];


$Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM uyeler WHERE id=$GelenID");
if($Sorgu){
    $kayitsayisi=$Sorgu->rowCount();
    if($kayitsayisi>0){
        $Sorgukaydi = $Sorgu->fetch(PDO::FETCH_ASSOC);
         $KaydinIsimSoyisimDegeri = $Sorgukaydi["adisoyadi"];
         $KaydinYasDegeri = $Sorgukaydi["yas"];
         $KaydinSehirDegeri = $Sorgukaydi["il"];
    }
    else{
        echo "Kayit Yok";
    }
}
else{
    echo "Sorgu Hatasi";
}

?>

<!--  <form action="pdo_69_sonuc.php ? KayitIDsi= <?php $GelenID; ?>" method="POST"> -->

<!-- Hangi id'li satırı güncelleyeceğimi belirtme işlemini Üstteki gibi de kullanabilirim alttaki gibi de kullanabilirim biirnde formun içinde hallettim diğerinde de inputun içinde hidden(gizli demektir formda görünmez) açarak yaptım ilerde hangisi kolay gelirse onu kullanırım -->

<form action="pdo_69_sonuc.php" method="POST">
    <input type="hidden" name="kayitIDsi" value="<?php echo $GelenID; ?>"> 
    
    Isim Soyisim  :  <input type="text" name="adisoyadi" value="<?php echo $KaydinIsimSoyisimDegeri; ?>"><br>   
    Sehir  :  <input type="text" name="il" value="<?php echo $KaydinSehirDegeri; ?>"><br> 
    Yas  :  <input type="text" name="yas" value="<?php echo $KaydinYasDegeri; ?>"><br><br>
    
    <input type="submit" value="Güncelle">
</form>


<?php
$VeritabaniBaglantisi = null;
?>

</body>
</html>