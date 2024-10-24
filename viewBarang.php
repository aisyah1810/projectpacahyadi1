<?php require 'barang.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Akhir Barang</title>
</head>
<body>
    
    <h1>Stok Akhir Barang</h1>

    <form method="POST" action="">
    
        <label for="idBarang">Id Barang:</label>
        <input type="number" id="idBarang" name="idBarang" required><br><br>
    
        <label for="namaBarang">Nama Barang:</label>
        <input type="text" id="namaBarang" name="NamaBarang" required><br><br>

        <label for="jenisBarang">Jenis Barang:</label>
        <select id="kategoriBarang" name="JenisBarang">
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
        <option value="Pakaian">Pakaian</option>
        <option value="Lainnya">Lainnya</option>
        </select> <br> <br>

        <label for="tanggalPemesanan">Tanggal Pemesanan:</label>
        <input type="date" id="tanggalpemesanan" name="tanggalpemesanan" required><br><br>

        <label for="hargaBarang">Harga Barang:</label>
        <input type="number" id="hargaBarang" name="hargaBarang" required><br><br>

        <label for="stok">Stok Awal:</label>
        <input type="number" id="stok" name="stok" required><br><br>

        <label for="pembelian">Jumlah Pembelian:</label>
        <input type="number" id="pembelian" name="pembelian" required><br><br>

        <input type="submit" value="kirim">
    </form>

    <?php if ($Stokakhir !== null):?>
        <h2>Id Barang: <?php echo $idBarang; ?></h2>
        <h2>Nama Barang: <?php echo $namaBarang; ?></h2>
        <h2>Jenis Barang: <?php echo $jenisBarang; ?></h2>
        <h2>Tanggal Pemesanan: <?php echo $tanggalPemesanan; ?></h2>
        <h2>Harga Barang: <?php echo $hargaBarang; ?></h2>
        <h2>Stok Akhir: <?php echo $Stokakhir; ?></h2>
    <?php endif;?>
</body>
</html>

