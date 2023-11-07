<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegi panjang </title>
    <link rel="stylesheet" href="panjang.css">
</head>
<body>
<div class="judul">
        <a href="home.php">Back</a>

        <h1>Rectangle</h1>
        <h2>Selamat datang di penghitung Persegi panjang</h2>

    </div>

    
    <div class="masuk">

        <form action="" method="post">

                <input type="text" name="panjang" id="" placeholder="panjang" style="text-align:center;">
                <input type="text" name="lebar" id="" placeholder="lebar" style="text-align:center;">
            
            <button type="submit" class="yakin"><span>SUBMIT</span></button>

            <span>Luas Persegi panjang</span>

            <?php 
            error_reporting(0);

            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $luas = $panjang * $lebar;
            $keliling = 2 * ($panjang + $lebar);

            // echooa
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
            padding: 10px;'>Keliling Persegi Panjang</span>
            
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