<?php
//baglan
$baglan = new mysqli("localhost","root","","test_php7");
$baglan->set_charset("UTF-8");

if ($baglan->connect_errno) {
	echo "hata";
	echo "hata açıklaması".$baglan->connect_error;
}else{
	echo "bağlandı";
}
//sorgu
$sorgu = $baglan->query("select * from kayitlar");
if ($sorgu) {
	print_r($sorgu);
}else{
	echo "hata";
}

$baglan->close();

?>
