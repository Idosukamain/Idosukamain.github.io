<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lingkaran.css">
</head>

<body>
    <div class="judul">
        <a href="index.html">Back</a>

        <h1>Lingkaran</h1>
        <h2>Selamat datang di penghitung lingkaran</h2>

    </div>



    <div class="masuk">

        <form action="" method="post">
            <input type="text" name="a" id="" placeholder="Radius" style="text-align:center;">
            
            <button type="submit" class="yakin"><span>SUBMIT</span></button>
            <span>Luas Lingkaran</span>

            <?php

            error_reporting(0);
            $ruas = $_POST['a'];
            $phi = 3.14;
            $hasil1 = $ruas * $phi;
            $hasil2 = 2 * $ruas *  $phi;



    echo "<button disabled style='color: rgba(255, 255, 255, 0.65);
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-align: center;
    padding: 10px;'>$hasil1 cm</button>

    <span style=' color: rgba(255, 255, 255, 0.65);
    font-size: 22px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-align: start;
    padding: 10px;'>Keliling lingkaran</span>
    
    <button disabled style='color: rgba(255, 255, 255, 0.65);
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-align: center;
    padding: 10px;'>$hasil2 cm</button>
    "



            ?>

        </form>

    </div>
</body>

</html>