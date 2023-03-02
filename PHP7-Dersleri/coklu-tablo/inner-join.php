<?php
$baglan = mysqli_connect("localhost","root","","test_php7");
mysqli_set_charset($baglan,"UTF-8");
if(mysqli_connect_errno()){
	echo "hata".mysqli_connect_error();
	die();
}
$Sorgu = mysqli_query($baglan,"select * from uyeler inner join istatistikler on uyeler.id = istatistikler.uyeid");
if($Sorgu){
	$KayitSayisi = mysqli_num_rows($Sorgu);
	if($KayitSayisi > 0){
		while($Kayitlar = mysqli_fetch_assoc($Sorgu)){
			$GelenID        = $Kayitlar["id"];
			$GelenAdiSoyadi = $Kayitlar["adisoyadi"];
			$GelenYasi      = $Kayitlar["yas"];
			$GelenSehri     = $Kayitlar["sehir"];
			$GelenSiteGirisSayisi     = $Kayitlar["siteyegirissayisi"];
			$GelenSiparisSayisi     = $Kayitlar["siparissayisi"];

			echo "üyenin ID değeri:".$GelenID."<br/>";
			echo "üyenin İsim Soyisim değeri:".$GelenAdiSoyadi."<br/>";
			echo "üyenin Yaş değeri:".$GelenYasi."<br/>";
			echo "üyenin Şehir değeri:".$GelenSehri."<br/>";
			echo "üyenin Siteye Giriş Sayısı değeri:".$GelenSiteGirisSayisi."<br/>";
			echo "üyenin Sipariş Sayısı değeri:".$GelenSiparisSayisi."<br/>";
			echo "<br/>";
		}	
	}else{
		echo "Kayıt Yok";
	}
}
?>