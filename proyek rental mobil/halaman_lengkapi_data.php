<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Mobil</title>
    <style>
        body,
        h1,
        label,
        input,
        textarea,
        button,
        select {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f5f5f5;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: darkorange;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: darkorange;
        }

        input,
        textarea,
        button,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: darkorange;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ffcc66;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .file-input {
            border: 1px dashed #ddd;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            color: #666;
        }

        .file-input input {
            display: none;
        }

        .file-input:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Form Pemesanan Mobil</h1>
        <center><button type="button" onclick="window.location.href = 'home(utama).html'"
                style="width: fit-content;">Home</button></center>
        <form id="form-pemesanan" onsubmit="submitForm(event)">
            <div class="form-group">
                <label for="id_pesanan">ID Pesanan</label>
                <input type="text" id="id_pesanan" name="id_pesanan" readonly>
            </div>

            <div class="form-group">
                <label for="nama-mobil">Nama Mobil</label>
                <input type="text" id="nama-mobil" name="nama-mobil" readonly>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal Pemesanan</label>
                <input type="date" id="tanggal_pemesanan" name="tanggal_pemesanan" required>
            </div>

            <div class="form-group">
                <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" required>
            </div>

            <div class="form-group">
                <label for="jumlah_hari">Jumlah Hari</label>
                <input type="number" id="jumlah_hari" name="jumlah_hari" placeholder="Masukkan Jumlah Hari" required>
            </div>


            <div class="form-group">
                <label for="metode_pembayaran">Metode Pembayaran</label>
                <select id="metode_pembayaran" name="metode_pembayaran" required>
                    <option value="" disabled selected>Pilih Metode Pembayaran</option>
                    <option value="transfer">Transfer</option>
                    <option value="cash">Cash</option>
                </select>
            </div>

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
<script>
    function submitForm(event) {
        event.preventDefault();
        alert("Data berhasil dikirim!");
        window.location.href = 'form_pembayaran.php';
    }

    function submitForm(event) {
        event.preventDefault();

        var metodePembayaran = document.getElementById("metode_pembayaran").value;

        if (metodePembayaran === "cash") {
            window.location.href = 'form_status.php';
        } else if (metodePembayaran === "transfer") {
            window.location.href = 'form_pembayaran.php';
        } else {
            alert("Silakan pilih metode pembayaran!");
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        var tanggalPemesanan = document.getElementById("tanggal_pemesanan");
        var tanggalPengembalian = document.getElementById("tanggal_pengembalian");
        var jumlahHari = document.getElementById("jumlah_hari");

        function hitungJumlahHari() {
            if (tanggalPemesanan.value && tanggalPengembalian.value) {
                var tglAwal = new Date(tanggalPemesanan.value);
                var tglAkhir = new Date(tanggalPengembalian.value);

                var selisihWaktu = tglAkhir - tglAwal;
                var selisihHari = selisihWaktu / (1000 * 60 * 60 * 24);

                if (selisihHari > 0) {
                    jumlahHari.value = selisihHari;
                } else {
                    jumlahHari.value = "";
                    alert("Tanggal pengembalian harus setelah tanggal pemesanan!");
                }
            }
        }

        function hitungTanggalPengembalian() {
            if (tanggalPemesanan.value && jumlahHari.value) {
                var tglAwal = new Date(tanggalPemesanan.value);
                var jumlah = parseInt(jumlahHari.value);

                if (jumlah > 0) {
                    tglAwal.setDate(tglAwal.getDate() + jumlah);
                    var tglFormat = tglAwal.toISOString().split("T")[0];
                    tanggalPengembalian.value = tglFormat;
                } else {
                    tanggalPengembalian.value = "";
                    alert("Jumlah hari harus lebih dari 0!");
                }
            }
        }

        tanggalPemesanan.addEventListener("change", hitungJumlahHari);
        tanggalPengembalian.addEventListener("change", hitungJumlahHari);
        jumlahHari.addEventListener("input", hitungTanggalPengembalian);
    });

</script>

</html>