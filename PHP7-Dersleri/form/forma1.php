<?php
$baglan = mysqli_connect("localhost","root","","test_php7");
mysqli_set_charset($baglan,"UTF-8");
if(mysqli_connect_errno()){
	echo "error".mysqli_connect_error();
	die();
}
if($_POST){
$FormGelenAdiSoyadi = $_POST["adisoyadi"];
$FormGelenYas = $_POST["yas"];
$FormGelenSehir = $_POST["sehir"];
}
$ekle = mysqli_query($baglan,"insert into uyeler (adisoyadi,yas,sehir) values ('$FormGelenAdiSoyadi','$FormGelenYas','$FormGelenSehir')");
if($ekle){
	echo "başarılı";
	$sorgu = mysqli_query($baglan,"select * from uyeler order by id desc");
	$kayitsayisi = mysqli_num_rows($sorgu);
	if($kayitsayisi>0){
		$kayitgetir = mysqli_fetch_assoc($sorgu);
		echo $kayitgetir["adisoyadi"]."<br/>";
		echo $kayitgetir["yas"]."<br/>";
		echo $kayitgetir["sehir"]."<br/>";
	}
}else{
	echo "hata";
}
?>