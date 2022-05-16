
<!-- pdo_65_index.php VE pdo_65_sonuc.php de ÖRNEKLERDE FORMDAN GİRİLEN BİLGİYİ VERİTBANINA EKLEME ÖRNEĞİ YAPACAĞIZ -->

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
echo "Veritabani Baglantisi Basarisiz<br>";
echo "Hata Kodu : ".$hatamesaji->getMessage();
die();
}
?>

<!-- php yi kapattım çünkü html kodları yazacağım '.php uzantılı dosyalara html css js kodları yazılır ama php taglarının içine yazmayız' , yazarsak da başına echo koyup çift tırnak ("") arasında yazarız -->
<!-- Dikkat edersek yazdığımız php kodlarını da html tagları arasında yazıyoruz (ama .php uzantılı dosyaya yazılyoruz .html uzantılı dosyalara yazamazdık) bu demektir ki html php css js kodları birbiri içine yazılabilir bu çok güzel bir özelliktir -->

<form action="pdo_66_sonuc.php" method="POST">
ISIM  : <input type="text" name="isim"><br />
YAS   : <input type="number" name="yas"><br />
SEHİR : <input type="text" name="sehir"><br />
<br>
<input type="submit" value="Kaydet">
</form>

<br><br>

<?php
$Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM uyeler",PDO::FETCH_ASSOC);
if($Sorgu){
    $kayitsayisi = $Sorgu->rowCount();
     if($kayitsayisi>0){
     foreach($Sorgu as $satirlar){
         echo $satirlar["id"]." | ".$satirlar["il"]." | ".$satirlar["adisoyadi"]." | ".$satirlar["yas"]."<br><br>";
     }
     }
     else{
         echo "Kayit Yok";
     }
}
else{
    echo "Sorgu Hatasi";
}



$VeritabaniBaglantisi = null;

?>
</body>
</html>