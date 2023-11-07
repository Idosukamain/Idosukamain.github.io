<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
    <link rel="stylesheet" href="segitiga.css">
</head>
<body>
<div class="judul">
        <a href="index.html">Back</a>

        <h1>Triangle</h1>
        <h2>Selamat datang di penghitung Segitiga</h2>

    </div>

    
    <div class="masuk">

        <form action="" method="post">

                <input type="text" name="alas" id="" placeholder="alas" style="text-align:center;">
                <input type="text" name="tinggi" id="" placeholder="tinggi" style="text-align:center;">
                <input type="text" name="sisi" id="" placeholder="sisi" style="text-align:center;">
            
            <button type="submit" class="yakin"><span>SUBMIT</span></button>

            <span>Luas Segitiga</span>

            <?php
            error_reporting(0);

            $alas = $_POST["alas"];
            $tinggi = $_POST["tinggi"];
            $sisi = $_POST["sisi"];
            $luas = 1/2 * $alas * $tinggi;
            $keliling = $sisi * $sisi * $sisi * $sisi;


            // eko

            echo "<button disabled style='color: rgba(255, 255, 255, 0.65);
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            text-align: center;
            padding: 10px;'>$luas cm</button>
        
            <span style=' color: rgba(255, 255, 255, 0.65);
            font-size: 22px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            text-align: start;
            padding: 10px;'>Keliling Segitiga</span>
            
            <button disabled style='color: rgba(255, 255, 255, 0.65);
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            text-align: center;
            padding: 10px;'>$keliling cm</button>
            "
            ?>

        </form>

    </div>


</body>
</html>