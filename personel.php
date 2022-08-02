<?php
error_reporting(0);
$baglan= mysqli_connect("localhost","root","","eczanedb");

if (!$baglan) {
    echo "Hata: MySQL'e bağlanılamadı." . PHP_EOL;
    exit;
}

mysqli_set_charset($baglan,"utf8");

$sonuc= mysqli_query($baglan, "select * from personelBilgi");

if(!$sonuc){
	 echo ("Hata:".$baglan->error);
	 exit;
}

$kayitSayisi=$sonuc->num_rows;
echo "<center>";
echo "<h3> PERSONEL BILGILERI </h3>";
echo "<hr>";
echo "</center>";

if($kayitSayisi==0)
	echo "Kayıt bulunamadı";
else {
  echo "<center>";
		echo "<table border=1 cellspace=2 >";
    echo "<tr>";
    echo "<td>"."AD"."</td>";
    echo "<td>"."SOYAD"."</td>";
    echo "<td>"."EPOSTA"."</td>";
    echo "<td>"."DOGUMTARIHI"."</td>";
    echo "<td>"."BASLAMATARIHI"."</td>";
    echo "<td>"."MAAS"."</td>";
    echo "</tr>";
		while($satir=mysqli_fetch_array($sonuc)){
			echo "<tr>";
			//echo $satir[0]." ".$satir[1]." ".$satir[2]."<br>";
			echo "<td>".$satir['AD']."</td>";
			echo "<td>".$satir['SOYAD']."</td>";
      echo "<td>".$satir['EPOSTA']."</td>";
      echo "<td>".$satir['DOGUMTARIHI']."</td>";
      echo "<td>".$satir['BASLAMATARIHI']."</td>";
      echo "<td>".$satir['MAAS']."</td>";
			echo "</tr>";
		}
		echo "</table>";
    echo "</center>";
}



echo "<a class= 'box' href='anasayfa2.php'>"."GERİ DÖN"."</a>";
?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <title>PERSONEL BILGILERI</title>
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
      .box:hover{
        background: #2ecc71;
      }
      table{
        width: 1000px;
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
        padding: 10px;
      }

    </style>
  </head>
  <body>

  </body>
</html>
