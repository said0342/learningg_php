<?php
$myFile = fopen("php_dosyasi.txt","r");
echo fread($myFile,filesize("php_dosyasi.txt"));  //fread oku demektir ilk parametre okunacak dosya ikinci parametre ne kadar okunacağıdır u-yazdığım kod sonuna kadar oku demektir.
fclose($myFile); //dosyayı kapatır işimiz bitince kapatırız

echo "<br>"; echo "<br>"; echo "<br>";

$myFile = fopen("php_dosyasi.txt","r");
echo fgets($myFile); //fgets tek satır okur , işlev kullanıldıktan sonra işaretçisi 1 sonraki satırın başına geçer
echo fgets($myFile);
fclose($myFile);

echo "<br>"; echo "<br>"; echo "<br>";

$myFile = fopen("php_dosyasi.txt","r");
while(!feof($myFile)){   //feof dosyanın sonuna kadar git demek !feof da sonuna gelmedikçe devam et anlamındadır
echo fgets($myFile);
}
fclose($myFile);

echo "<br>"; echo "<br>"; echo "<br>";

$myFile = fopen("php_dosyasi.txt","r");
while(!feof($myFile)){
echo fgetc($myFile);       //fgetc karakter karakter okur , çağırdıktan sonra işaretçisi bir sonraki karaktere geçer
}
fclose($myFile);

?>