 <?php
$baglan = mysqli_connect("localhost","root","","test_php7");
mysqli_set_charset($baglan,"UTF-8");
if(mysqli_connect_errno()){
	echo "hata".mysqli_connect_error();
	die();
}
$SorguA = mysqli_query($baglan,"select * from uyeler");
if($SorguA){
	$KayitSayisiA = mysqli_num_rows($SorguA);
	if($KayitSayisiA > 0){
		while($Kayitlar = mysqli_fetch_assoc($SorguA)){
			$GelenID        = $Kayitlar["id"];
			$GelenAdiSoyadi = $Kayitlar["adisoyadi"];
			$GelenYasi      = $Kayitlar["yas"];
			$GelenSehri     = $Kayitlar["sehir"];

			$SorguB = mysqli_query($baglan,"select * from istatistikler where uyeid=".$GelenID." limit 1");
				if($SorguB){
					$KayitSayisiB = mysqli_num_rows($SorguB);
					 if($KayitSayisiB > 0){
					 	$Kayit = mysqli_fetch_assoc($SorguB);
					 	$GelenSiteGirisSayisi = $Kayit["siteyegirissayisi"];
					 	$GelenSiparisSayisi = $Kayit["siparissayisi"];
					 }else{
					 	echo "bok";
					 }
				}
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