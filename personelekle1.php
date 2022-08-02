<!DOCTYPE html>
<html>
<head>
	<title>PERSONEL EKLEME</title>
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
</head>
<body>
<center>
<h3>Personel Kayıt Formu</h3>
</center>
<hr>
<form action="personelekle2.php" method="POST">
<table border="1" cellspacing="4" align="center">
	<tr>
		<td>Adı</td>
		<td><input type="text" name="adi" ></td>
	</tr>
	<tr>
		<td>Soyadı</td>
		<td><input type="text" name="soyadi" ></td>
	</tr>
	<tr>
		<td>Telefon</td>
		<td><input type="number" name="telefon" ></td>
	</tr>
  <tr>
		<td>E-Posta</td>
		<td><input type="email" name="mail" ></td>
	</tr>
  <tr>
		<td>Dogum Tarihi</td>
		<td><input type="date" name="dogum" ></td>
	</tr>
  <tr>
		<td>Baslama Tarihi</td>
		<td><input type="date" name="baslama" ></td>
	</tr>
  <tr>
		<td>Maas</td>
		<td><input type="number" name="maas" ></td>
	</tr>
  <tr>
		<td>Kullanıcı adı</td>
		<td><input type="text" name="kullanici" ></td>
	</tr>
  <tr>
		<td>Sifre</td>
		<td><input type="text" name="sifre" ></td>
	</tr>
	<tr>
		<td class="box" colspan="2" align="center">
			<input class="box2" type="submit" value="Kaydet">
		</td>

	</tr>

</table>
<a class= "box2" href="anasayfa2.php">GERİ DÖN</a>

</form>


</body>
</html>
