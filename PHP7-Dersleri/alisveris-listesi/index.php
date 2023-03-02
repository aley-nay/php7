<?php
	$baglan = mysqli_connect("localhost","root","","test_php7");
	mysqli_set_charset($baglan,"UTF-8");
	if(mysqli_connect_errno()){
		echo "hata".mysqli_connect_error();
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alışveriş Listesi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		#list{
			height: 100vh;
		}

		.form-control:focus{
	    color: #495057;
	    background-color: #fff;
	    border-color: #ffc107;
	    outline: 0;
	    box-shadow: 0 0 0 0.2rem rgba(255,193,7,.5);
		}

		ul.list-group {
		    display: block;
		    padding-left: 0px;
		}

		.row:nth-child(2){
			display: block;
		}

		form{
			display: table-cell;
			width: 100%;
			vertical-align: middle;
			text-align: center;
		}
	</style>
</head>
<body>
<div id="list" class="container">
	<div class="row">
		<form action="index.php" method="post" class="mt-1">
		  <div class="form-group">
		    <label>Alışveriş Listesi</label>
		    <input name="urun" type="text" class="form-control" placeholder="Ürün gir">
		  </div>
		  <button type="submit" class="btn btn-warning text-white mb-3">+ Ekle</button>
		</form>
	</div>
	<div class="row">
		<?php
		if($_POST){
			$formurun = $_POST["urun"];
			$ekle = mysqli_query($baglan,"insert into alisveris (urunadi) values ('$formurun')");
			if($ekle){
				echo "<h3 class='text-center'>başarılı</h3><br>";
			}else{
				echo "<h3>hatalı</h3><br>";
			}}
			$sorgu = mysqli_query($baglan,"select * from alisveris order by id desc");
			if($sorgu){
				$kayitsayisi = mysqli_num_rows($sorgu);
				if($kayitsayisi>0){
				echo "<ul class='list-group'>";
				while($kayit = mysqli_fetch_assoc($sorgu)){
						echo "<li class='list-group-item'>".$kayit["urunadi"]."<a href='guncelle.php?id=".$kayit["id"]."'>güncelle</a> | <a href='sil.php?id=" . $kayit["id"] ."'>Sil</a></li>";
					}
					echo "</ul>";
				}
			}
		
		mysqli_close($baglan);
		?>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>