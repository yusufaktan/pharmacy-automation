<?php

error_reporting(0);
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="eczanedb";

$conn= new mysqli($servername, $username, $password, $dbname);
$new = mysqli_set_charset($conn,"utf8");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_POST) {
  $kullanici=$_POST["kullanici"];
  $pass=$_POST["pass"];

  $giris= "select * from personelBilgi where KULLANICIADI='$kullanici' AND SIFRE='$pass'  ";
  $getir= $conn->query($giris);
  if ($getir->num_rows>0) {
    while ($row = $getir->fetch_assoc()) {
      $_SESSION["AD"]= $row["AD"];
      $_SESSION["SOYAD"]= $row["SOYAD"];

      header("location:anasayfa2.php");
    }
  }
  else
    header("location:yanlis.php");
}

?>
