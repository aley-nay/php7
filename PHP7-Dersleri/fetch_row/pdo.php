<?php
//mysqli_fetch_row() : mysqli ile tekli veri çekme. sutün sıra numarasıyla çekeriz.

$baglan = new mysqli("localhost","root","","test_php7");
$baglan->set_charset("UTF-8");
if ($baglan->connect_errno) {
	echo "hata. hata satırı:".$baglan->connect_error;
	die();
}
$sorgu = $baglan->query("select * from kisiler");
if($sorgu){
	$kayit = $sorgu->fetch_row();
	echo "ID:".$kayit["0"]."<br>";
	echo "ID:".$kayit["1"]."<br>";
	echo "ID:".$kayit["3"]."<br>";
	echo "ID:".$kayit["4"]."<br>";
}else{
	echo "hata";
}
$baglan->close();
?>
