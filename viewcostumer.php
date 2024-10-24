<?php require 'costumer.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA COSTUMER</title>
</head>
<body>
    
    <h1>DATA COSTUMER</h1>

    <form method="POST" action="">
        <label for="idCostumer">Id Costumer:</label>
        <input type="number" id="idCostumer" name="idCostumer" required><br><br>

        <label for="namaCostumer">Nama Costumer:</label>
        <input type="text" id="namaCostumer" name="namaCostumer" required><br><br>

        <label for="alamatCostumer">Alamat Costumer:</label>
        <input type="text" id="alamatCostumer" name="alamatCostumer" required><br><br>

        <label for="nomerHp">Nomer Handphone:</label>
        <input type="number" id="nomerHp" name="nomerHp" required><br><br>

        <label for="jenisKelamin">Jenis Kelamin:</label>
        <select id="kategoriBarang" name="jenisKelamin">
        <option value="Perempuan">Perempuan</option>
        <option value="Laki Laki">Laki Laki</option>
        </select> <br> <br>

        <label for="gmailCostumer">Gmail Costumer:</label>
        <input type="email" id="gmailCostumer" name="gmailCostumer" required><br><br>

        <label for="totalPesanan">Total Pesanan:</label>
        <input type="number" id="totalPesanan" name="totalPesanan" required><br><br>

        <input type="submit" value="kirim">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Id Costumer: <?php echo $idCostumer; ?></h2>
        <h2>Nama Costumer: <?php echo $namaCostumer; ?></h2>
        <h2>Alamat Costumer: <?php echo $alamatCostumer; ?></h2>
        <h2>Nomer Handphone: <?php echo $nomerHp; ?></h2>
        <h2>Jenis Kelamin: <?php echo $jenisKelamin; ?></h2>
        <h2>Gmail Costumer: <?php echo $gmailCostumer; ?></h2>
        <h2>Total Pesanan: <?php echo $totalPesanan; ?></h2>
    <?php endif;?>
</body>
</html>