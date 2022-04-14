<?php
session_start(); ob_start();
?>
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
ob_start()          :  Php sayfası dahilinde çıkış tamponlamasını başlatır.
ob_end_clean()      :  Php sayfası dahilinde başlatılmış olan ve veri depolayan çıktı tamponlmasını siler ve çıktı tamponlamasını kapatır.
ob_end_flush()      :  Php sayfası dahilinde başlatılmış olan ve veri depolayan çıktı tamponlamasını boşaltır ve çıktı tamponlamasını kapatır.(bütün veriler okunur sonra boşaltılır)
ob_get_contents()   :  Php sayfası dahilinde başlatılmış olan ve veri depolayan çıktı tamponlaması içeriğini bularak bulduğu değeri geriye döndürür.(veriler okunmadan siliniz)
*/

echo "extra egitim<br>";
$depo1=ob_get_contents();
echo $depo1;
echo "<br>";
echo "Volkan Alakent<br><br>";
$depo2=ob_get_contents();
ob_end_clean();
echo $depo2;
?>

</body>
</html>

<?php
ob_end_flush();
?>