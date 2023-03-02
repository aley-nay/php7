<?php
	$baglan = mysqli_connect("localhost","root","","test_php7");
	mysqli_set_charset($baglan,"UTF-8");
	if(mysqli_connect_errno()){
		echo "hata".mysqli_connect_error();
		die();
	}

	$urunadi1 = $_POST["urunadi1"];
	$GelenIDDegeri = $_GET["id"];
					$Guncelle	=	mysqli_query($baglan, "UPDATE alisveris SET urunadi='$urunadi1' WHERE id=" . $GelenIDDegeri);
					if($Guncelle){
						echo "Kayıt Güncellendi<br />";
						echo "<a href='index.php'>Ana Sayfaya Geri Dön</a>";
					}else{
						echo "Sorgu Hatası";
					}
			mysqli_close($baglan);

?>