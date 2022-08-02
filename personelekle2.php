<?php

$ad=$_POST['adi'];
$soyad=$_POST['soyadi'];
$tel=$_POST['telefon'];
$mail=$_POST['mail'];
$dogum=$_POST['dogum'];
$baslama=$_POST['baslama'];
$maas=$_POST['maas'];
$kullanici=$_POST['kullanici'];
$sifre=$_POST['sifre'];





if ($ad=="" || $soyad=="" || $tel==""){
	echo "Lütfen Adı, Soyadı, Telefon alanlarını doldurunuz";
	header( "refresh:2;url=personelekle1.php" );
	exit;
}



$baglan= mysqli_connect("localhost","root","","eczanedb");

if (!$baglan) {
    echo "Hata: MySQL'e bağlanılamadı." . PHP_EOL;
    exit;
}

mysqli_set_charset($baglan,"utf8");


$sql="INSERT INTO personelBilgi(AD,SOYAD,TELEFON,EPOSTA,DOGUMTARIHI,BASLAMATARIHI,MAAS,KULLANICIADI,SIFRE)
VALUES('" .$ad. "','" .$soyad. "','" .$tel. "','" .$mail. "','" .$dogum. "','" .$baslama. "','" .$maas. "','" .$kullanici. "','" .$sifre. "') ";



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
