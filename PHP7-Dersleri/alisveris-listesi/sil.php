<?php	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "test_php7");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Sorunu<br />";
		echo "Hata Açıklaması : " . mysqli_connect_errno();
		die();
	}
	$GelenIDdegeri = $_GET["id"];
	$sil = mysqli_query($VeritabaniBaglantisi,"delete from alisveris where id='$GelenIDdegeri'");
	if($sil){
		echo "silindi";
		echo "<a href='index.php'>Ana Sayfaya Geri Dön</a>";
	}else{
		echo "hata";
	}
	mysqli_close($VeritabaniBaglantisi);
?>