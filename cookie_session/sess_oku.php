<!-- 
session_start() : sessionları başlatmak veya sessionları takip etmek için kullanılır
session_destroy() : daha önceden oluşturulmuş olan sessionları silmek için kullanılır    
-->

<!-- cookie oturum açık kalma süresi 
session maximum yaşam süresi (oturumda hareketsiz kalırsan kaç dk sonra atsın)
-->
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



echo "<pre>";
print_r($_SESSION);
echo "<pre>";




?>

<a href="sess_sil.php">session sil</a>
<a href="sess_sil2.php">session sil</a>

</body>
</html>