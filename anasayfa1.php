<?php  include "login.php"   ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GIRIS EKRANI</title>
    <style>
      body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: #d9d9d9;
      }

      .box{
        width: 300px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #191919;
        text-align: center;
        border-radius: 40px;
      }
      .box h1{
        color: white;
        text-transform: uppercase;
        font-weight: 500;
      }

      .box input[type="text"],.box input[type= "password"]{
        border: 0;
        background: none;
        display: block;
        margin: 10px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 14px 10px;
        width: 200px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
      }

      .box input[type="submit"]{
        border: 0;
        background: none;
        display: block;
        margin: 10px auto;
        text-align: center;
        border: 2px solid #2ecc71;
        padding: 14px 40px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
      }

      .box input[type = "submit"]:hover{
        background: #2ecc71;
      }

      .box input[type="text"]:focus,.box input[type= "password"]:focus{
        width: 280px;
        border-color: #2ecc71;
      }

      .header {
            background-image:
                linear-gradient(to left bottom, rgba(50, 150, 217, 0.7), rgb(100, 79, 27, 0.7)),
                url(bg.jpg);
            height: 100vh;
            background-size: cover;
            background-position: top;
            position: relative;
        }
    </style>
  </head>
  <body>
  <div class="header">
      <form class="box" action="" method="post">
        <h1>Faruk Eczanesi</h1>
          <input type="text" name="kullanici" value=""
          placeholder="Kullanıcı Adı"><br>
          <input type="password" name="pass" value="" placeholder="Şifre"><br>
          <input type="submit" name="gonder" value="GİRİŞ"><br>

      </form>
    </div>
  </body>
</html>
