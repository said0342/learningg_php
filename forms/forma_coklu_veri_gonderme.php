<?php require "functions/safe.php"; ?>  


<?php


?>
<link rel="stylesheet" href="css/main.css"> 


<form action="<?php echo htmlspecialchars("result2.php"); ?>" method="post"> 
<br>

<div class="form-group"> 
  <label>İsminiz</label>   
  <input type="text" class="form-control" name="isim">
  <small class="form-text text-muted">* Bu Alan Zorunlu  </small>
</div>
<br>
Bilgiğiniz Diller:<br><br>

<div class="form-check">
   <input class="form-check-input" type="checkbox" value="Php" name="langues[]">
   <label class="form-check-label">PHP</label>
</div>
<div class="form-check">
   <input class="form-check-input" type="checkbox" value="Js" name="langues[]">         <!-- burada formda yer alan kısımlardan birden çok seçince nasıl gönderilebileceğini yaptım -->
   <label class="form-check-label">JS</label>    
</div>
<div class="form-check">
   <input class="form-check-input" type="checkbox" value="Asp.net" name="langues[]">
   <label class="form-check-label">ASP.NET</label>
</div>
<div class="form-check">
   <input class="form-check-input" type="checkbox" value="Phyton" name="langues[]">
   <label class="form-check-label">PHYTON</label>
</div>
<br>

<button type="submit" class="btn btn-success">Gonder</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")  
{

if(empty($_POST["mail_adress"]) or empty($_POST["isim"]) or empty($_POST["web_site"]) or !preg_match(" /^[a-zA-Z-' ]*$/",security($_POST["isim"])))
{

}
else{
    echo "Isminiz : ".$isim."<br>";             
    echo "E Posta Adresiniz : ".$mail_adress."<br>";
    echo "Yasiniz : ".$yas."<br>";                 
    echo "Web Siteniz : ".$web_site."<br>";
    echo "Yorumunuz : ".$comment."<br>";
    echo "Cinsiyetiniz : ".$gender."<br>";
}
}
?>