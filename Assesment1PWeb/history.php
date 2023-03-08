<!DOCTYPE html>
<html>

<head>
    <title>Struk Transaksi Pembelian</title>
</head>
<!-- Link Boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <h1>Struk Transaksi Pembelian</h1>
    <!-- Memanggil Array variable -->
    <?php
    $kode_transaksi = $_POST["kode_transaksi"];
    $tanggal_transaksi = $_POST["tanggal_transaksi"];
    $customer = $_POST["customer"];
    $barang1 = $_POST["barang1"];
    $qty1 = $_POST["qty1"];
    $barang2 = $_POST["barang2"];
    $qty2 = $_POST["qty2"];
    $barang3 = $_POST["barang3"];
    $qty3 = $_POST["qty3"];
    $kartu_member = $_POST["kartu_member"];
    $uang_pembayaran = $_POST["uang_pembayaran"];

    // Array barang
    $barang = array(
        "Mie Instan" => 3000,
        "Sabun mandi" => 3500,
        "Shampoo" => 1000,
        "Sandal jepit" => 11000,
        "Roti" => 12000,
        "Buku tulis" => 5500,
        "Susu kotak" => 6000,
        "Minyak goreng" => 13000,
        "Ice cream" => 11000,
        "Baterai" => 16000
    );

    $total_harga = 0;
    echo '<p>Kode Transaksi: ' . $kode_transaksi . '</p>';
    echo '<p>Tanggal Transaksi: ' . $tanggal_transaksi . ' </p>';
    echo '<p>Customer: ' . $customer . '</p>';
    echo '<table class="table table-dark table-striped-columns">';
    echo '<tr class="table-primary"><th scope="col">Nama Barang</th><th>Jumlah</th><th>Harga Satuan</th><th scope="col">Jumlah Harga</th></tr>';
    // Mengitung jumlah barang
    if ($barang1) {
        $harga1 = $barang[$barang1];
        $jumlah_harga1 = $qty1 * $harga1;
        $total_harga += $jumlah_harga1;
        echo '<tr><td scope="col">' . $barang1 . '</td><td>' . $qty1 . '</td><td scope="col">Rp ' . number_format($harga1, 0, ',', '.') . '</td><td scope="col">Rp ' . number_format($jumlah_harga1, 0, ',', '.') . '</td></tr>';
    }
    if ($barang2) {
        $harga2 = $barang[$barang2];
        $jumlah_harga2 = $qty2 * $harga2;
        $total_harga += $jumlah_harga2;
        echo '<tr><td>' . $barang2 . '</td><td>' . $qty2 . '</td><td>Rp ' . number_format($harga2, 0, ',', '.') . '</td><td>Rp ' . number_format($jumlah_harga2, 0, ',', '.') . '</td></tr>';
    }
    if ($barang3) {
        $harga3 = $barang[$barang3];
        $jumlah_harga3 = $qty3 * $harga3;
        $total_harga += $jumlah_harga3;
        echo '<tr><td>' . $barang3 . '</td><td>' . $qty3 . '</td><td>Rp ' . number_format($harga3, 0, ',', '.') . '</td><td>Rp ' . number_format($jumlah_harga3, 0, ',', '.') . '</td> </tr>';
    }
    echo '<tr><td colspan="3">Sub Total</td><td>Rp ' . number_format($total_harga, 0, ',', '.') . '</td></tr>';
    if ($kartu_member == "Ya") {
        $diskon = 0.05 * $total_harga;
        $total_harga -= $diskon;
        echo '<tr><td colspan="3">Diskon 5%</td><td>Rp ' . number_format($diskon, 0, ',', '.') . '</td></tr>';
    }
    echo "<hr>";
    $kembalian = $uang_pembayaran - $total_harga;
    echo '<tr><td colspan="3">Total Bayar</td><td>Rp ' . number_format($total_harga, 0, ',', '.') . '</td></tr>';
    echo '<tr><td colspan="3">Uang Pembayaran</td><td>Rp ' . number_format($uang_pembayaran, 0, ',', '.') . '</td></tr>';
    echo '<tr><td colspan="3">Kembalian</td><td>Rp ' . number_format($kembalian, 0, ',', '.') . '</td></tr>';
    echo '</table>';
    ?>
    <!-- Link Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>