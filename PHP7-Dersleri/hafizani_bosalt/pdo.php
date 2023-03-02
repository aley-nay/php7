<?php
$baglan = new mysqli("localhost","root","","test_php7");
$baglan->set_charset("UTF-8");
if($baglan->connect_errno){
echo "hata".$baglan->connect_error;
die();
}
$sorgu = $baglan->query("select * from kisiler");
if($sorgu){
	while($kayit = $sorgu->fetch_assoc()){
		echo $kayit["isim"]."<br>";
	}
	$sorgu->free_result();
	//$sorgu->free(); aynı işlemi yapar
	//$sorgu->close(); aynı işlemi yapar
}
$baglan->close();
?>