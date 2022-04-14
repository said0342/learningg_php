<?php

function operation($par,$number){
if($par == "topla"){
    $process=1;  
}
else if($par == "çıkar"){
    $process=2;
}
else if($par == "çarp"){
    $process=3;
}
else if($par == "böl"){
    $process=4;
}

return calculate($process,$number);  //normalde fonsksiyonun sonunca echo ya da bir işlemle return ediyorduk , burda gördüğümüz üzere fonksiyonu başka bir fonksiyon ile return edebiliyoruz fonksiyonu da tanımlamak şartıyla...

}

//NOT:FONKSİYON RETURN'Ü GÖRDÜĞÜ ANDA SONRA YAZILANLARA BAKMADAN BİTER YANİ RETURNU GÖRDÜĞÜ YERDE BİTER

function calculate($process,$number){ //return edilen fonksiyoru tanımlıyorum
    if($process == 1){
        echo $number+=7;  
    }
    else if($process == 2){
        echo $number-=7;
    }
    else if($process == 3){
        echo $number*=7;
    }
    else if($process == 4){
        echo $number/=8;
    }

}


echo operation("böl",70);  //burada 1. fonksiyonu çağııryorum.


?>