<?php
//fetch_assoc() : pdo ile tekli veri çekme sutün sıra ismiyle çekeriz.

$baglan = new mysqli("localhost","root","","test_php7");
$baglan->set_charset("UTF-8");

if($baglan->connect_errno){
	echo "hata".$baglan->connect_error;
	die();
}
$sorgu = $baglan->query("select * from kisiler");
if ($sorgu) {
	$kayit = $sorgu->fetch_assoc();
	echo "ID:".$kayit["id"]."<br>";
	echo "İsim:".$kayit["isim"]."<br>";
	echo "Yaş:".$kayit["yas"]."<br>";
	echo "Beceriler:".$kayit["beceriler"]."<br>";
	echo "Beceri Seviyeleri:".$kayit["beceriseviyeleri"]."<br>";
}else{
	echo "sdfşskd";
}
$baglan->close();

?>


