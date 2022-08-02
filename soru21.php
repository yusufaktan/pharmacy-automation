<?php
$baglan= mysqli_connect("localhost","root","","eczanedb");

if (!$baglan) {
    echo "Hata: MySQL'e bağlanılamadı." . PHP_EOL;
    exit;
}

mysqli_set_charset($baglan,"utf8");

?>

<!DOCTYPE html>
<html lang="tr">
<head>
		<title>Film Ekle</title>
		 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		 <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>
	<div class="container">
		<div class="row">
<?php

$ilacadi= $_POST['ilacadi'];
$ilackategori=$_POST['ilacKategori'];
$firmaBilgi= $_POST['firmaBilgi'];
$fiyat= $_POST['fiyat'];
$stok= $_POST['stok'];



$sql="INSERT INTO ilacBilgi(ILACADI,FIYAT,STOK, firmaID,kategoriID)
VALUES('$ilacadi','$fiyat','$stok','$firmaBilgi','$ilackategori')";
$sonuc= mysqli_query($baglan, $sql );

if(!$sonuc){
		 echo ("Bir hata oluştu:".$baglan->error);
		 exit;
	} else{
		echo '
		<div class="alert alert-success" role="alert">
 			Kayıt başarıyla yapıldı.
		</div>';
		header( "refresh:2;url=anasayfa2.php" );
	}

?>
</div>
</div>
</body>
</html>
