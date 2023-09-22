<?php
    $harga = 0;
    $diskon = 0;
    $jenis = $_POST["jenis"];
    $jumlah = $_POST["jumlah"];

    if($jenis == 'Bituminous Paint'){
        $harga = 20000;
    }elseif($jenis == 'Chlorinated Rubber'){
        $harga = 30000;
    }elseif($jenis == 'Vinyl'){
        $harga = 40000;
    }
    
    $totalH = 0;
    $totalH = $jumlah*$harga;

    $hargad;
    if($jumlah >= 5 && $jumlah <= 9){
        $diskon = 5;
        $hargad = $totalH*5/100;
    }elseif($jumlah >= 10){
        $hargad = $totalH*10/100;
    }


    $totalB = 0;
    if($jumlah >= 5 && $jumlah <= 9){
       $totalB = $totalH-$totalH*5/100;
    }elseif($jumlah >= 10){
        $totalB = $totalH-$totalH*10/100;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>process_reg</title>
</head>
<body>
    --------------------------------------------------------------<br>
    <h2>Toko Cat Guna Bangun Jaya</h2><br>
    --------------------------------------------------------------
    <table>
  <tr>
    <td>Nama Customer</td><td>:</td>
    <td> <?php echo $_POST["nama"]?></td>
  </tr>
  <tr>
    <td>Alamat</td><td>:</td>
    <td> <?php echo $_POST["alamat"]?></td>
  </tr>
  <tr>
    <td>Jenis Cat</td><td>:</td>
    <td> <?php echo $_POST["jenis"]?></td>
  </tr>
  <tr>
    <td>Warna</td><td>:</td>
    <td> <?php echo $_POST["warna"]?></td>
  </tr>
  <tr>
    <td>Harga</td><td>:</td>
    <td> <?php echo "Rp. " . $harga?>
    </td>
  </tr>
  <tr>
    <td>Jumlah Beli</td><td>:</td>
    <td> <?php echo $_POST["jumlah"]?></td>
  </tr>
  <tr>  <td>-------------------------------</td><td>-</td>
        <td>----------------------------(*)</td>
</tr>
  <tr>
    <td>Total Harga</td><td>:</td>
    <td>
    <?php echo "Rp. " . $totalH;?>
    </td>
  </tr>
  <tr>
    <td>Diskon</td><td>:</td>
    <td> <?php echo  "Rp. " . $hargad;?></td>
  </tr>
  <tr>  <td>-------------------------------</td><td>-</td>
        <td>----------------------------(-)</td>
</tr>
  <tr>
    <td>Total Bayar</td><td>:</td>
    <td> <?php echo "Rp. " .  $totalB?></td>
  </tr>
</table>
<tr>  <td>-------------------------------</td><td>-</td>
        <td>-------------------------------</td>
</tr>
</body>
</html>