<?php
$baglan = mysqli_connect("localhost","root","","test_php7");
mysqli_set_charset($baglan,"UTF-8");
if(mysqli_connect_errno()){
	echo "hata".mysqli_connect_error();
	die();
}
$ekle = mysqli_query($baglan,"insert into uyeler (adisoyadi,yas,sehir) values ('johnny depp','45','erzurum')");
if($ekle){
	echo "eklendi";
}else{
	echo "eklenmedi";
}
$sorgu = mysqli_query($baglan,"select * from uyeler order by id desc limit 1");
if($sorgu){
	$kayitsayisi = mysqli_num_rows($sorgu);
	if($kayitsayisi>0){
		while($kayitlar = mysqli_fetch_assoc($sorgu)){
			echo "<br/>";
			echo $kayitlar["adisoyadi"]."<br/>";
			echo $kayitlar["yas"]."<br/>";
			echo $kayitlar["sehir"]."<br/>";
		}
	}else{
		echo "kayıt yok";
	}
}else{
	echo "sorgu hatalı";
}
?>