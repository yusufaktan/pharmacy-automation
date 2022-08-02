<?php
$ID=$_POST['ID'];
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$telefon=$_POST['telefon'];
$eposta=$_POST['eposta'];
$dogumtarihi=$_POST['dogumtarihi'];
$baslamatarihi=$_POST['baslamatarihi'];
$maas=$_POST['maas'];
$kullaniciadi=$_POST['kullaniciadi'];
$sifre=$_POST['sifre'];

$baglan= mysqli_connect("localhost","root","","eczanedb");

if (!$baglan) {
    echo "Hata: MySQL'e bağlanılamadı." . PHP_EOL;
    exit;
}
mysqli_set_charset($baglan,"utf8");


$sql="UPDATE personelBilgi SET AD='$ad', SOYAD='$soyad', TELEFON='$telefon', EPOSTA='$eposta', DOGUMTARIHI='$dogumtarihi', BASLAMATARIHI='$baslamatarihi', MAAS='$maas', KULLANICIADI='$kullaniciadi', SIFRE='$sifre'
WHERE personelID='$ID'";


$sonuc= mysqli_query($baglan, $sql);

if(!$sonuc){
	 echo ("Hata:".$baglan->error);
	 exit;
} else {
	echo "<center>Başarıyla güncellendi</center>";
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
