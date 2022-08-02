<?php
//error_reporting(0);
$silinecekID=$_GET['ID'];

$baglan= mysqli_connect("localhost","root","","eczanedb");

if (!$baglan) {
    echo "Hata: MySQL'e bağlanılamadı." . PHP_EOL;
    exit;
}

mysqli_set_charset($baglan,"utf8");

$sonuc= mysqli_query($baglan,
	"DELETE FROM hastaBilgi WHERE hastaID=".$silinecekID);

if(!$sonuc){
	 echo ("Hata:".$baglan->error);
	 exit;
} else {
	echo "<center><h3>Kayıt başarıyla silindi.</h3></center>";
		header( "refresh:2;url=anasayfa2.php" );

}


?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      *{
        font-size: 100;
        font-family: sans-serif;
        background: #d9d9d9;
      }
    </style>
  </head>
  <body>

  </body>
</html>
