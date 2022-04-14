<?php

use JetBrains\PhpStorm\Language;

   if($_POST){
   $isim=$_POST["isim"];
   $langues=$_POST["langues"];
   echo $message="YETKİNİZ VAR"."<br>";
   echo "isminiz:".$isim."<br>";
   echo "<br>"; 
   echo "Bilgigin diller"."<br>";
   foreach($langues as $yaz){
       echo $yaz."<br>";
   }
   } 
   else{
   echo "BU SAYFAYA GİRİŞ YETKİNİZ YOK";
   }  
?>


