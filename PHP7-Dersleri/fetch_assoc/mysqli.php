<?php
//mysqli_fetch_assoc() : mysqli ile tekli veri çekme. sutün sıra ismiyle çekeriz.

$baglan = mysqli_connect("localhost","root","","test_php7");
mysqli_set_charset($baglan,"UTF-8");
if (mysqli_connect_errno()) {
	echo "hata. hata satırı:".mysqli_connect_error();
	die();
}
$sorgu = mysqli_query($baglan,"select * from kisiler");
if($sorgu){
	$kayit = mysqli_fetch_assoc($sorgu);
	echo "ID:".$kayit["id"]."<br>";
	echo "İsim:".$kayit["isim"]."<br>";
	echo "Yaş:".$kayit["yas"]."<br>";
	echo "Beceriler:".$kayit["beceriler"]."<br>";
	echo "Beceri Seviyeleri:".$kayit["beceriseviyeleri"]."<br>";
	echo "ID:".$kayit["id"]."<br>";
	echo "İsim:".$kayit["isim"]."<br>";
	echo "Yaş:".$kayit["yas"]."<br>";
	echo "Beceriler:".$kayit["beceriler"]."<br>";
	echo "Beceri Seviyeleri:".$kayit["beceriseviyeleri"]."<br>";
	echo "ID:".$kayit["id"]."<br>";
	echo "İsim:".$kayit["isim"]."<br>";
	echo "Yaş:".$kayit["yas"]."<br>";
	echo "Beceriler:".$kayit["beceriler"]."<br>";
	echo "Beceri Seviyeleri:".$kayit["beceriseviyeleri"]."<br>";
}else{
	echo "hata";
}
mysqli_close($baglan);
?>
