<?php require "functions/safe.php"; ?>  


<?php
$nameerror="".$mailerror="".$weberror="";
if($_SERVER["REQUEST_METHOD"] == "POST")  
{
  $isim=$mail_adress=$yas=$web_site=$comment=$gender=$nameerror=""; 
  if(empty($_POST["isim"])){
    $nameerror="İsim Alanı Bos Gecilemez";
  }
  else if(empty($_POST["mail_adress"])){
    $mailerror="E Posta Alanı Boş Olamaz";
  }
  else if(empty($_POST["web_site"])){
    $mailerror="Web Alanı Boş Olamaz";
  }
  

  $mail_adress=security($_POST["mail_adress"]);      
  $yas=security($_POST["yas"]);               
  $web_site=security($_POST["web_site"]);   
  $gender=security($_POST["gender"]);
  $isim=security($_POST["isim"]);
}
?>
<link rel="stylesheet" href="css/main.css">  <!-- oluşturduğum main.css dosyasını böyle çağırdım ben o main.css dosyasını da youm satırı olarak hemen alt satıra ekleyeceğim -->
<!-- .error{
    color:red;
    font-weight: bolder;
} -->
<span class="error">ZORUNLU ALANLAR</span>  <!-- Formumun üstüne uyarı yazmak istedim kırmızı yazmak için span oluşturdum , sonra css klosorunde main.css in içinde error diye bir clas oluşturdum onu burada çağırarak kullandım. -->
<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="post"> 
<br>
<div class="form-group"> 
  <label>Isminiz</label>   
  <input type="text" class="form-control" name="isim">
  <small class="form-text text-muted">* Bu Alan Zorunlu  </small>
  <small>
    <small class="error"><?php echo $nameerror;?></small>
  </small>
 
</div>
<div class="form-group">  
  <label>E Posta</label>
  <input type="email" class="form-control" name="mail_adress">  <small class="form-text text-muted">* Bu Alan Zorunlu  </small>
  <small class="error"><?php echo $mailerror;?></small>
</div>
<div class="form-group">   
  <label>Web Adresiniz</label>
  <input type="url" class="form-control" name="web_site">
  <small class="form-text text-muted">* Bu Alan Zorunlu  </small>
  <small class="error"><?php echo $weberror; ?></small>
</div>
<div class="form-group">  
<Label>Yasiniz</Label>
<select class="form-control" name="yas">    
<option>Yasinizi Seciniz</option>
<option>20</option>
<option>30</option>
<option>40</option>
<option>50</option> 
<option>60</option>
</select>
</div>
<div class="form-group">    
<label>Yorum Yapiniz</label>
<textarea class="form-conrtol" name="comment" rows="5"></textarea>
</div>
<div class="form-check form-check-inline">    
   <input class="form-check-input" type="radio" name="gender" value="kadın">
   <label class="form-check-label">Kadin</label>                              
</div>
<div class="form-check form-check-inline">
   <input class="form-check-input" type="radio" name="gender" value="erkek">
   <label class="form-check-label">Erkek</label>
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