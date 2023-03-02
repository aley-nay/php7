<?php
$baglan = mysqli_connect("localhost","root","","test_php7");
mysqli_set_charset($baglan,"UTF-8");
if(mysqli_connect_errno()){
echo "hata".mysqli_connect_error();
die();
}
$sorgu = mysqli_query($baglan,"select * from kisiler");
if($sorgu){
	while($kayit = mysqli_fetch_assoc($sorgu)){
		echo $kayit["isim"]."<br>";
	}
	mysqli_free_result($sorgu);
}
mysqli_close($baglan);
?>