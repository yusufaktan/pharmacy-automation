<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOSGELDINIZ</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Bebas Neue', cursive;
        }

        .header {
            background-image:
                linear-gradient(to left bottom, rgba(50, 150, 217, 0.7), rgb(100, 79, 27, 0.7)),
                url(arkaplan.jpg);
            height: 100vh;
            background-size: cover;
            background-position: top;
            position: relative;
        }

        .heading {
            text-transform: uppercase;
            color: white;
            position: absolute;
            top: 40%;
            left: 50%;
            text-align: center;
            transform: translate(-50%, -50%);
        }

        .heading-main {
            display: block;
            font-size: 90px;
            letter-spacing: 10px;
        }

        .heading-sub {
            display: block;
            font-size: 60px;
            letter-spacing: 5px;
        }

        .logo-box{
            position: absolute;
            top: 30px;
            left: 40px;
        }
        .logo{
            height: 170px;
        }

        a{
          text-decoration: none;
          color: #990000;
        }      

    </style>
</head>

<body>

    <header class="header">

        <div class="logo-box">
            <img class="logo" src="logo.png" alt="">
        </div>
        <h1 class="heading">
            <span class="heading-main">FARUK ECZANESI</span>
            <span class="heading-sub"><a href="anasayfa1.php">GIRIS ICIN TIKLAYINIZ</a></span>
        </h1>

    </header>


</body></html>
