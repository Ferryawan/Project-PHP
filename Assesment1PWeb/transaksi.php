<!DOCTYPE html>
<html>

<head>
	<title>Form Transaksi Pembelian</title>
</head>
<!-- Link Boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
	<h1 class="text-primary container">Form Transaksi Pembelian</h1>
	<form action="history.php" method="post" class="container">
		<label for="kode_transaksi">Kode Transaksi:</label>
		<input type="text" id="kode_transaksi" name="kode_transaksi" required><br><br>
		<label for="tanggal_transaksi">Tanggal Transaksi:</label>
		<input type="text" id="tanggal_transaksi" name="tanggal_transaksi" value="<?php echo date('d-m-Y'); ?>" readonly><br><br>
		<label for="customer">Customer:</label>
		<select id="customer" name="customer">
			<option value="">-- Pilih Customer --</option>
			<?php
			$customers = array("John", "Jane", "Doe", "Bob", "Alice");
			foreach ($customers as $customer) {
				echo '<option value="' . $customer . '">' . $customer . '</option>';
			}
			?>
		</select><br><br>
		<label for="barang1">Barang 1:</label>
		<select id="barang1" name="barang1">
			<option value="">-- Pilih Barang --</option>
			<?php
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
			foreach ($barang as $nama_barang => $harga) {
				echo '<option value="' . $nama_barang . '">' . $nama_barang . ' (Rp ' . number_format($harga, 0, ',', '.') . ')</option>';
			}
			?>
		</select>
		<input type="number" id="qty1" name="qty1" min="1" required> Qty<br><br>
		<label for="barang2">Barang 2:</label>
		<select id="barang2" name="barang2">
			<option value="">-- Pilih Barang --</option>
			<?php
			foreach ($barang as $nama_barang => $harga) {
				echo '<option value="' . $nama_barang . '">' . $nama_barang . ' (Rp ' . number_format($harga, 0, ',', '.') . ')</option>';
			}
			?>
		</select>
		<input type="number" id="qty2" name="qty2" min="1" required> Qty<br><br>
		<label for="barang3">Barang 3:</label>
		<select id="barang3" name="barang3">
			<option value="">-- Pilih Barang --</option>
			<?php
			foreach ($barang as $nama_barang => $harga) {
				echo '<option value="' . $nama_barang . '">' . $nama_barang . ' (Rp ' . number_format($harga, 0, ',', '.') . ')</option>';
			}
			?>
		</select>
		<input type="number" id="qty3" name="qty3" min="1" required> Qty<br><br>
		<label for="kartu_member">Kartu Member:</label>
		<input type="radio" id="kartu_member_ya" name="kartu_member" value="Ya">
		<label for="kartu_member_ya">Ya</label>
		<input type="radio" id="kartu_member_tidak" name="kartu_member" value="Tidak" checked>
		<label for="kartu_member_tidak">Tidak</label><br><br>
		<label for="uang_pembayaran">Uang Pembayaran:</label>
		<input type="number" id="uang_pembayaran" name="uang_pembayaran" min="1" required><br><br>
		<button type="submit" value="Submit" class="btn btn-primary">Submit</button>
	</form>
	<!-- Link Boostrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>