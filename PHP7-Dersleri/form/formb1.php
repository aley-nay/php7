<?php
$baglan = new mysqli("localhost","root","","test_php7");
$baglan->set_charset("UTF-8");
if($baglan->connect_errno){
	echo "error".$baglan->connect_error;
	die();
}
if($_POST){
$FormGelenAdiSoyadi = $_POST["adisoyadi"];
$FormGelenYas = $_POST["yas"];
$FormGelenSehir = $_POST["sehir"];
}
$ekle = $baglan->query("insert into uyeler (adisoyadi,yas,sehir) values ('$FormGelenAdiSoyadi','$FormGelenYas','$FormGelenSehir')");
if($ekle){
	echo "başarılı";
	$sorgu = $baglan->query("select * from uyeler order by id desc limit 1");
	$kayitsayisi = $sorgu->num_rows;
	if($kayitsayisi>0){
		$kayitgetir = $sorgu->fetch_assoc();
		echo $kayitgetir["adisoyadi"]."<br/>";
		echo $kayitgetir["yas"]."<br/>";
		echo $kayitgetir["sehir"]."<br/>";
	}
}else{
	echo "hata";
}
$baglan->close();
?>