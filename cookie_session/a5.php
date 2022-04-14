<?php
session_start();
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


$_SESSION["kullanici"] = array("adi"=>"volkan","soyadi"=>"konak","email"=>"mehmet@gmail.com","telefonu"=>"05442544515");
$_SESSION["sepet"] = ["id"=>"7","kodu"=>"5","tutari"=>"1500","urunnumarasi"=>"15"];

echo "<pre>";
print_r($_SESSION["sepet"]["tutari"]);
echo "<pre>";







?>


</body>
</html>