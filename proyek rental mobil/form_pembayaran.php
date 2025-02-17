<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
        body, h1, label, input, textarea, button {
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

        input, textarea, button {
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

        .rekening-info {
            background: #fffbf2;
            padding: 15px;
            border: 1px solid #ffd966;
            border-radius: 5px;
            margin-bottom: 20px;
            color: #8a6d3b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pembayaran Transfer</h1>
        <center><button type="button" onclick="window.location.href = 'home(utama).html'" style="width: fit-content;">Home</button></center>
        <div class="rekening-info">
            <p>Silakan transfer ke rekening berikut:</p>
            <p><strong>Bank BCA</strong></p>
            <p><strong>No. Rekening: 1234567890</strong></p>
            <p><strong>Atas Nama: PT. Rental Mobil</strong></p>
        </div>
        <form id="form-pembayaran" onsubmit="kirim()">
            <div class="form-group">
                <label for="id_pesanan">ID Pesanan</label>
                <input type="text" id="id_pesanan" name="id_pesanan" readonly>
            </div>

            <div class="form-group">
                <label for="tanggal-pemesanan">Tanggal Pemesanan</label>
                <input type="date" id="tanggal-pemesanan" name="tanggal-pemesanan" readonly>
            </div>

            <div class="form-group">
                <label for="tanggal-pengembalian">Tanggal Pengembalian</label>
                <input type="date" id="tanggal-pengembalian" name="tanggal-pengembalian" readonly>
            </div>

            <div class="form-group">
                <label for="jumlah-hari">Jumlah Hari</label>
                <input type="number" id="jumlah-hari" name="jumlah-hari" readonly>
            </div>

            <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input type="number" id="total_harga" name="total_harga" readonly>
            </div>

            <div class="form-group">
                <label for="bukti-transfer">Upload Bukti Transfer</label>
                    <span>Pilih File</span>
                    <input type="file" id="bukti-transfer" name="bukti-transfer" accept="image/*" required>
            </div>

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
<script>
    function kirim(){
        event.preventDefault();
        window.location.href = "form_status.php";
    }
</script>
</html>
