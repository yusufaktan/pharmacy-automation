<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <title>KONTROL PANELI</title>

    <style>
    body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background: #d9d9d9;
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
    a{
      color: green;
      text-decoration: none;

    }
    h1{
      color: green;
      font-size: 50px;
    }
    h3{
      font-size: 30px;
    }
    .baslik {
      background-color: #4CAF50;
      color: white;
    }

    .cikis{
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

    .cikis:hover{
      background: #2ecc71;
    }


    </style>
  </head>
  <body>
    <center>
    <?php echo "<h1>".$_SESSION["AD"]." ".$_SESSION["SOYAD"]."</h1>"."<h3>"."HOŞGELDİN"."</h3>"; ?>
    <hr>
    <table border=1 cellspace=2>
      <tr cl>
        <td colspan="2"><center>LISTELEME</center></td>
      </tr>
      <tr>
        <td>Stok ekranı</td>
        <td><a href="stok.php">GİRİŞ</a></td>
      </tr>
      <tr>
        <td>Fiyat ekranı</td>
        <td><a href="fiyat.php">GİRİŞ</a></td>
      </tr>
      <tr>
        <td>Personel ekranı</td>
        <td><a href="personel.php">GİRİŞ</a></td>
      </tr>
      <tr>
        <td>Hasta ekranı</td>
        <td><a href="hasta.php">GİRİŞ</a></td>
      </tr>
    </table>

    <hr>

    <table border=1 cellspace=2>
      <tr>
        <td colspan="2"><center>ARAMA</center></td>
      </tr>
      <tr>
        <td>Personel Arama</td>
        <td><a href="personelara.php">GİRİŞ</a></td>
      </tr>
      <tr>
        <td>İlaç Arama</td>
        <td><a href="ilacara.php">GİRİŞ</a></td>
      </tr>
      <tr>
        <td>Hasta Arama</td>
        <td><a href="hastaara.php">GİRİŞ</a></td>
      </tr>
    </table>

    <hr>

    <table border=1 cellspace=2>
      <tr>
        <td colspan="2"><center>SILME</center></td>
      </tr>
      <tr>
        <td>Hasta Silme</td>
        <td><a href="sil.php">GİRİŞ</a></td>
      </tr>
      <tr>
        <td>Ilac Silme</td>
        <td><a href="sil2.php">GİRİŞ</a></td>
      </tr>
    </table>

    <hr>

    <table border=1 cellspace=2>
      <tr>
        <td colspan="2"><center>EKLEME</center></td>
      </tr>
      <tr>
        <td>Personel Ekleme</td>
        <td><a href="personelekle1.php">GİRİŞ</a></td>
      </tr>
      <tr>
        <td>Firma Ekleme</td>
        <td><a href="firmaekle1.php">GİRİŞ</a></td>
      </tr>
      <tr>
        <td>İlaç Ekleme</td>
        <td><a href="soru2.php">GİRİŞ</a></td>
      </tr>
    </table>

        <hr>

        <table border=1 cellspace=2>
          <tr>
            <td colspan="2"><center>GUNCELLEME</center></td>
          </tr>
          <tr>
            <td>Personel Güncelle</td>
            <td><a href="guncelle1.php">GİRİŞ</a></td>
          </tr>
          <tr>
            <td>Firma Güncelle</td>
            <td><a href="firmaguncelle1.php">GİRİŞ</a></td>
          </tr>

        </table>



    <a class="cikis" href="cikis.php">ÇIKIŞ</a>
    </center>




  </body>
</html>
