<!DOCTYPE html>
<html>
<head>
	<title>PERSONEL GUNCELLEME</title>
</head>
<style>
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: #d9d9d9;
  }
  .box2{
    border: 0;
    background: #191919;
    display: block;
    margin: 10px;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
    font-size: 25px;
    text-decoration: none;
  }
  .box2:hover{
    background: #2ecc71;
  }
  .box2 input[type="submit"]{
    border: 0;
    background: none;
    display: block;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 100px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
  }
  table{
    width: 300px;
    padding: 10px;
    background: #191919;
    text-align: center;
    color: white;
    font-weight: 700;
    border-radius: 15px;
  }
  h3{
    font-size: 40px;
    color: green;
  }

  td{
    padding: 15px;
  }
  input{
    border: 0;
    background: none;
    display: block;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 8px 30px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
  }

</style>
<?php

$gID=$_GET['ID']; //Güncellenecek ID

$baglan= mysqli_connect("localhost","root","","eczanedb");

if (!$baglan) {
    echo "Hata: MySQL'e bağlanılamadı." . PHP_EOL;
    exit;
}

mysqli_set_charset($baglan,"utf8");

$sonuc= mysqli_query($baglan, "select * from personelBilgi where personelID=$gID");

if(!$sonuc){
	 echo ("Hata:".$baglan->error);
	 exit;
} else{

	$satir=mysqli_fetch_array($sonuc);
   $personelID=$satir['personelID'];
	 $ad=$satir['AD'];
	 $soyad=$satir['SOYAD'];
	 $tel=$satir['TELEFON'];
   $eposta=$satir['EPOSTA'];
   $dogumtarihi=$satir['DOGUMTARIHI'];
   $baslamatarihi=$satir['BASLAMATARIHI'];
   $maas=$satir['MAAS'];
   $kullaniciadi=$satir['KULLANICIADI'];
   $sifre=$satir['SIFRE'];



}
?>


<body>
<center>
<h3>PERSONEL GUNCELLEME</h3>
</center>
<hr>
<form action="guncelle3.php" method="POST">
<input type="hidden" name="ID" value="<?php echo $personelID?>">

<table border="1" cellspacing="4" align="center">
	<tr>
		<td>AD</td>
		<td><input type="text" name="ad"
			value="<?php echo $ad;?>"  ></td>
	</tr>
	<tr>
		<td>SOYAD</td>
		<td><input type="text" name="soyad"
			value="<?php echo $soyad;?>"
		></td>
	</tr>
	<tr>
		<td>TELEFON</td>
		<td><input type="text" name="telefon"
			value="<?php echo $tel;?>"></td>
	</tr>
  <tr>
		<td>E-POSTA</td>
		<td><input type="text" name="eposta"
			value="<?php echo $eposta;?>"></td>
	</tr>
  <tr>
		<td>DOGUM TARIHI</td>
		<td><input type="date" name="dogumtarihi"
			value="<?php echo $dogumtarihi;?>"></td>
	</tr>
  <tr>
		<td>BASLAMA TARIHI</td>
		<td><input type="date" name="baslamatarihi"
			value="<?php echo $baslamatarihi;?>"></td>
	</tr>
  <tr>
		<td>MAAS</td>
		<td><input type="number" name="maas"
			value="<?php echo $maas;?>"></td>
	</tr>
  <tr>
		<td>KULLANICI ADI</td>
		<td><input type="text" name="kullaniciadi"
			value="<?php echo $kullaniciadi;?>"></td>
	</tr>
  <tr>
		<td>SIFRE</td>
		<td><input type="password" name="sifre"
			value="<?php echo $sifre;?>"></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input class="box2" type="submit" value="Güncelle">
		</td>

	</tr>

</table>

<?php
echo "<a class= 'box2' href='guncelle1.php'>"."GERİ DÖN"."</a>";
 ?>
