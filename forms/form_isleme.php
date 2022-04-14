<!-- PHP ETİKETİ AÇILANA KADAR HTML VE CSS İLE FORM OLUŞTURUYORUM DİV YARIMLARI İLE TABLOLAR VS OLUŞTURUYORUM -->

<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="post">  <!-- action yerinde bu formu gönderince nerede açılacağını yazarız yazdığım kodlar aynı sayfada açılmasını sağlıyor eğer mesela ornek.php yazsaydım ornek.php de açacaktı ornek.php nin içinde de benim php kodlarını yazmam lazımdı -->
<!-- yukarıda kullandığım htmlspecialchars güvenlik için önemlidir aynı sayfada formu gönderdiğim için güvenlik zaafiyetii engeller bunu yazmazsak url de js kodları ile sayfa hacklenebilir -->
<div class="form-group"> 
  <label>Isminiz</label>   <!-- div etiketleri ile formm oluşturma yapıyorum-->
  <input type="text" class="form-control" name="isim">
  <small class="form-text text-muted">* Bu Alan Zorunlu</small>
</div>

<div class="form-group">  <!-- div etiketleri ile formm oluşturma yapıyorum-->
  <label>E Posta</label>
  <input type="email" class="form-control" name="mail_adress">
  <small class="form-text text-muted">* Bu Alan Zorunlu</small>
</div>

<div class="form-group">   <!-- div etiketleri ile formm oluşturma yapıyorum-->
  <label>Web Adresiniz</label>
  <input type="url" class="form-control" name="web_site">
  <small class="form-text text-muted">* Bu Alan Zorunlu</small>
</div>

<div class="form-group">   <!-- div etiketleri ile formm oluşturma yapıyorum-->
<Label>Yasiniz</Label>
<select class="form-control" name="yas">    
<option>Yasinizi Seciniz</option>
<option value=20>20</option>
<option value=30>30</option>
<option value=40>40</option>
<option value=50>50</option> 
<option value=60>60</option>
</select>
</div>

<div class="form-group">    <!-- div etiketleri ile formm oluşturma yapıyorum-->
<label>Yorum Yapiniz</label>
<textarea class="form-conrtol" name="comment" rows="5"></textarea>
</div>

<div class="form-check form-check-inline">    
   <input class="form-check-input" type="radio" name="gender" value="kadın">
   <label class="form-check-label">Kadin</label>                                <!-- div etiketleri ile formm oluşturma yapıyorum-->
</div>
<div class="form-check form-check-inline">
   <input class="form-check-input" type="radio" name="gender" value="erkek">
   <label class="form-check-label">Erkek</label>
</div>
<br>

<button type="submit" class="btn btn-success">Gonder</button>  <!-- formda gönder butonu -->

</form>


<!-- BU KISIMDAN SONRA PHP YE GEÇİYORUM EKRANA YAZDIĞIM BİLGİLERİ İSTEDİĞİM SAYFADA (O SAYFAYI DA BEN FORM ETİKETİNDE ACTİON KISMINDA BELİRTMİŞTİM) YAZDIRMA İŞLEMİ YAPIYORUM -->

<?php require "functions/safe.php"; ?>  <!-- burada ben başka bir klasördeki php dosyası nasıl çağırılır öğrendim çağırdığım php dosyasının içinde (securty.php) güvenlik fonksiyonu yazıyor 
ben yine de o fonksiyonu yorum satırı içinde yazıyorum kontrol edebilmen için : 

function security($text){  //güvenlik fonksiyonu
$text=trim($text);    //bilgi girerken ortadan başlamaması için çok boşluk bırakamaması için vs
$text=stripslashes($text); // sitemize saldırırken html ve js ile saldıracakalrsa / işaretten kullanmak zorundalar bu fonksiyon bu işareti(/) siler
$text=htmlspecialchars($text); //bu da html ile ilgili özel karakterleri siler
return $text;
}

-->


<?php

//POST İLE ALIYORUM ÇÜNKÜ URL DE BİLGİLERİN GÖZÜKMESİNİ İSTEMİYORUM SAYFA GÜVENLİ OLMAZ


if($_SERVER["REQUEST_METHOD"] == "POST")  //BU EĞER BİR POST İŞLEMİ VARSA UYGULA ANLAMINA GELİYOR EĞER YAZMASSAM SAYFAYI AÇINCA HATA VERİYOR , BUNU YAZINCA POST İŞLEMİ UYGULAYINCA BU İŞLEMİ UYGULUYOR o yüzden hata vermiyor
{
  $isim=$mail_adress=$yas=$web_site=$comment=$gender=""; //bütün değişkenleri boşa eşitledim
  $mail_adress=security($_POST["mail_adress"]);       //bu kısımda $_POST İLE ALDIĞIM METODLARI DEĞİŞKENLERE ATTIM AŞŞAĞIDA YAZDIRMA İŞLEMİNİ DE YAPACAĞIM 
  $yas=security($_POST["yas"]);               
  $web_site=security($_POST["web_site"]);     //UYARI:BURADA SECURTY FONKSİYONU KULLANDIM GÜVENLİK AÇISINDAN O FONKSİYON İLE İLGİLİ DETAYLARI 57-65. SATILAR ARASINDA BELİRTTİM...
  $comment=security($_POST["comment"]);
  $gender=security($_POST["gender"]);
  $isim=security($_POST["isim"]);
  
  
  echo "Isminiz : ".$isim."<br>";             //YUKARIDAKİ OLUŞTURUP POSTLARI ALDIĞIM DEĞİŞKENLERİ YAZDIRIYORUM
  echo "E Posta Adresiniz : ".$mail_adress."<br>";
  echo "Yasiniz : ".$yas."<br>";                 
  echo "Web Siteniz : ".$web_site."<br>";
  echo "Yorumunuz : ".$comment."<br>";
  echo "Cinsiyetiniz : ".$gender."<br>";
}

?>