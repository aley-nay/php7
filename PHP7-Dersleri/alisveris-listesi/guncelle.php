<?php
	$baglan = mysqli_connect("localhost","root","","test_php7");
	mysqli_set_charset($baglan,"UTF-8");
	if(mysqli_connect_errno()){
		echo "hata".mysqli_connect_error();
		die();
	}

$GelenIDDegeri = $_GET["id"];
echo $GelenIDDegeri;

			$sorgu = mysqli_query($baglan,"select * from alisveris where id=".$GelenIDDegeri);
			if($sorgu){
				$kayitsayisi = mysqli_num_rows($sorgu);
				if($kayitsayisi>0){
					$kayit = mysqli_fetch_assoc($sorgu);
				}else{
					header("Location:index.php");
				}
			}else{
				echo "hata";
			}
?>
<form action="sonuc.php?id=<?php echo $GelenIDDegeri;?>" method="post">
<input type="text" name="urunadi1" value="<?php echo $kayit["urunadi"];?>">
<input type="submit" value="guncelle">

<?php

			mysqli_close($baglan);

?>
	
</form>

