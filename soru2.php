<?php

$baglan= mysqli_connect("localhost","root","","eczanedb");

if (!$baglan) {
    echo "Hata: MySQL'e bağlanılamadı." . PHP_EOL;
    exit;
}

mysqli_set_charset($baglan,"utf8");

error_reporting(0);

?>

<!DOCTYPE html>
<html lang="tr">
<head>
		<title>ILAC EKLEME</title>
		 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		 <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
    <style>
      body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: #d9d9d9;
      }
      .box{
        border: 0;
        background: #191919;
        display: block;
        margin: 10px;
        margin-left: 490px;
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
      .box:hover{
        background: #2ecc71;
      }
      form{
        width: 1300px;
        padding: 10px;
        background: #191919;
        text-align: center;
        color: white;
        font-weight: 700;
        border-radius: 15px;
      }
      h3{
        font-size: 70px;
        color: green;
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
        color: white;
  		}

    </style>
</head>
<body>
	<div class="container">

				<!-- form -->
    <center>
		<h3>İlaç Kayıt</h3>
  </center>
		<form method="POST" action="soru21.php">

		  <div class="row mb-3">
    		<label for="ilacadi" class="col-sm-2 col-form-label">Ilac Adi</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" name="ilacadi"
      			value="<?php echo  $_COOKIE['COOK_ILAC'];?>">
    		</div>
  		</div>

  		<div class="row mb-3">
    		<label for="ilacKategori" class="col-sm-2 col-form-label">Kategori</label>
    		<div class="col-sm-10">
      			<select name="ilacKategori" class="form-control">

      				<?php
						$sql="SELECT * FROM ilacKategori";
						$sonuc= mysqli_query($baglan, $sql );
      					while($satir=mysqli_fetch_array($sonuc)){


					echo '<option value="'.$satir[kategoriID].'">'.$satir[KATEGORI].'</option>';


					}

      				?>



      			</select>
    		</div>
  		</div>

      <div class="row mb-3">
    		<label for="firmaBilgi" class="col-sm-2 col-form-label">Firma</label>
    		<div class="col-sm-10">
      			<select name="firmaBilgi" class="form-control">

      				<?php
						$sql="SELECT * FROM firmaBilgi";
						$sonuc= mysqli_query($baglan, $sql );
      					while($satir=mysqli_fetch_array($sonuc)){


					echo '<option value="'.$satir[firmaID].'">'.$satir[AD].'</option>';


					}

      				?>



      			</select>
    		</div>
  		</div>


  		<div class="row mb-3">
    		<label for="fiyat" class="col-sm-2 col-form-label">Fiyat</label>
    		<div class="col-sm-10">
      			<input type="number" class="form-control" name="fiyat">
    		</div>
  		</div>


  		<div class="row mb-3">
    		<label for="stok" class="col-sm-2 col-form-label">Stok</label>
    		<div class="col-sm-10">
      			<input type="number" class="form-control" name="stok">
    		</div>
  		</div>


  <button type="submit" class="box">Kaydet</button>
</form>
<a class= "box2" href="anasayfa2.php">GERİ DÖN</a>


				<!-- form bitiş -->
			</div>

		</div>




	</div><!-- container -->



</body>
</html>
