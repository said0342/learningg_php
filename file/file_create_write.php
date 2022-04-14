<?php

$myFile2 = fopen("php_dosyasi2.txt","w");
$txt = "John Doe\n";
fwrite($myfile2, $txt);
$txt = "Jane Doe\n";
fwrite($myfile2, $txt);
fclose($myfile2);


echo realpath("php_dosyasii.txt"); //dosya konumunu gösterir
echo "<br>";


?>