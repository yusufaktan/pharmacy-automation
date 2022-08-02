<?php

$adi=$_POST['adi'];
$adres=$_POST['adres'];
$sehir=$_POST['sehir'];
$postakodu=$_POST['postakodu'];

if ($adi=="" || $adres=="" || $sehir=="" || $postakodu==""){
	echo "Lütfen Ad, Adres, Sehir ve Posta Kodu alanlarını doldurunuz";
	header( "refresh:2;url=firmaekle1.php" );
	exit;
}



$baglan= mysqli_connect("localhost","root","","eczanedb");

if (!$baglan) {
    echo "Hata: MySQL'e bağlanılamadı." . PHP_EOL;
    exit;
}

mysqli_set_charset($baglan,"utf8");


$sql="INSERT INTO firmaBilgi(AD,ADRES,SEHIR,POSTAKODU)
VALUES('" .$adi. "','" .$adres. "','" .$sehir. "','" .$postakodu. "') ";



$sonuc= mysqli_query($baglan, $sql);

if(!$sonuc){
	 echo ("Hata:".$baglan->error);
	 exit;
} else {
	echo "<center>Kayıt başarıyla gerçekleşti.</center>";
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
