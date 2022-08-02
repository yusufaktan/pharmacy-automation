<!DOCTYPE html>
<html>
<head>
	<title>FIRMA GUNCELLEME</title>
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

$sonuc= mysqli_query($baglan, "select * from firmaBilgi where firmaID=$gID");

if(!$sonuc){
	 echo ("Hata:".$baglan->error);
	 exit;
} else{

	$satir=mysqli_fetch_array($sonuc);
   $firmaID=$satir['firmaID'];
	 $ad=$satir['AD'];
	 $adres=$satir['ADRES'];
	 $sehir=$satir['SEHIR'];
   $postakodu=$satir['POSTAKODU'];
}
?>


<body>
<center>
<h3>FIRMA GUNCELLEME</h3>
</center>
<hr>
<form action="firmaguncelle3.php" method="POST">
<input type="hidden" name="ID" value="<?php echo $firmaID?>">

<table border="1" cellspacing="4" align="center">
	<tr>
		<td>AD</td>
		<td><input type="text" name="ad"
			value="<?php echo $ad;?>"  ></td>
	</tr>
	<tr>
		<td>ADRES</td>
		<td><input type="text" name="adres"
			value="<?php echo $adres;?>"
		></td>
	</tr>
	<tr>
		<td>SEHIR</td>
		<td><input type="text" name="sehir"
			value="<?php echo $sehir;?>"></td>
	</tr>
  <tr>
		<td>POSTA KODU</td>
		<td><input type="number" name="postakodu"
			value="<?php echo $postakodu;?>"></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input class="box2" type="submit" value="Güncelle">
		</td>

	</tr>

</table>

<?php
echo "<a class= 'box2' href='firmaguncelle1.php'>"."GERİ DÖN"."</a>";
 ?>
