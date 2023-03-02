<?php
//mysqli_fetch_row() : mysqli ile tekli veri çekme. sutün sıra numarasıyla çekeriz.

$baglan = mysqli_connect("localhost","root","","test_php7");
mysqli_set_charset($baglan,"UTF-8");
if (mysqli_connect_errno()) {
	echo "hata. hata satırı:".mysqli_connect_error();
	die();
}
$sorgu = mysqli_query($baglan,"select * from kisiler");
if($sorgu){
	$kayit = mysqli_fetch_row($sorgu);
	echo "ID:".$kayit["0"]."<br>";
	echo "ID:".$kayit["1"]."<br>";
	echo "ID:".$kayit["3"]."<br>";
	echo "ID:".$kayit["4"]."<br>";
}else{
	echo "hata";
}
mysqli_close($baglan);
?>
