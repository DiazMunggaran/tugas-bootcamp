<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        fieldset{
            margin: auto;
            width: 500px;
        }
        label{
            margin: 100;
            
        }
    </style>
</head>
<body>
    <fieldset>
        <legend><h2>Toko Cat Guna Bangun Jaya</h2></legend>
        <form action="process_reg.php" method="post">
        <label>Nama Customer :</label>
        <input type="text" name="nama"><br><br>
        <label>Alamat &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</label>
        <input type="text" name="alamat"><br><br>
        <label>Jenis Cat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
        <select name="jenis">
            <option value="b">Bituminous Paint</option>
            <option value="c">Chlorinated Rubber</option>
            <option value="v">Vinyl</option>
        </select><br><br>
        <label>Warna Cat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :</label>
        <input type="radio" name="warna" value="merah">Merah <input type="radio" name="warna" value="biru">Biru <input type="radio" name="warna" value="kuning">Kuning <br><br>
        <label>Jumlah Beli&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
        <input type="text" name="jumlah"><br><br>
        <input type="submit" value="hitung">
        <input type="reset" value="batal">
        </form>
    </fieldset>
    
</body>
</html>