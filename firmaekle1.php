<!DOCTYPE html>
<html>
<head>
	<title>FIRMA EKLEME</title>
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
			padding: 14px 100px;
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
		.box{
			padding: 14px 100px;
		}

	</style>
</head>
<body>
	<center>
<h3>Firma Kayıt Formu</h3>
</center>
<hr>
<form action="firmaekle2.php" method="POST">
<table border="1" cellspacing="4" align="center">
	<tr>
		<td>Ad</td>
		<td><input type="text" name="adi" ></td>
	</tr>
	<tr>
		<td>Adres</td>
		<td><input type="text" name="adres" ></td>
	</tr>
	<tr>
		<td>Sehir</td>
		<td><input type="text" name="sehir" ></td>
	</tr>
  <tr>
		<td>Posta Kodu</td>
		<td><input type="number" name="postakodu" ></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input class="box2" type="submit" value="Kaydet">
		</td>

	</tr>

</table>

<a class= "box2" href="anasayfa2.php">GERİ DÖN</a>


</form>


</body>
</html>
