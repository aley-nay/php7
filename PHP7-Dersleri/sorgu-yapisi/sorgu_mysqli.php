<?php

$baglan = mysqli_connect("localhost","root","","test_php7");
mysqli_set_charset($baglan,"UTF-8");

if (mysqli_connect_errno()) {
	echo "hata";
	echo "hata satırı:".mysqli_connect_error();
}else{
	echo "bağlandı";
}

$sorgu = mysqli_query($baglan,"select * from kayitlar");
if ($sorgu) {
	print_r($sorgu);
}else{
	echo "hata";
}

mysqli_close($baglan);
?>