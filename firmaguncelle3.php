<?php
$ID=$_POST['ID'];
$ad=$_POST['ad'];
$adres=$_POST['adres'];
$sehir=$_POST['sehir'];
$postakodu=$_POST['postakodu'];

$baglan= mysqli_connect("localhost","root","","eczanedb");

if (!$baglan) {
    echo "Hata: MySQL'e bağlanılamadı." . PHP_EOL;
    exit;
}
mysqli_set_charset($baglan,"utf8");


$sql="UPDATE firmaBilgi SET AD='$ad', ADRES='$adres', SEHIR='$sehir', POSTAKODU='$postakodu'
WHERE firmaID='$ID'";


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
