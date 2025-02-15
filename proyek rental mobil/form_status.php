<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pembayaran</title>
    <style>
        body, h1, label, input, button, p {
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

        input, button {
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

        .status-box {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }

        .status-checked {
            background-color: #ffeb3b;
            color: #8a6d3b;
        }

        .status-success {
            background-color: #d4edda;
            color: #155724;
        }

        .status-failed {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Status Pembayaran</h1>
        <center><button type="button" onclick="window.location.href = 'home(utama).html'" style="width: fit-content;">Home</button></center>
        <form id="form-status-pembayaran">
            <label for="id-pemesanan">Masukkan ID Pemesanan</label>
            <input type="text" id="id-pemesanan" name="id-pemesanan" placeholder="Masukkan ID Pemesanan Anda" required>
            <button type="button" onclick="cekStatus()">Cek Status</button>
        </form>
        <div id="status-container" style="display: none;">
            <p class="status-box" id="status-text"></p>
        </div>
    </div>

    <script>
        function cekStatus() {
            var idPemesanan = document.getElementById("id-pemesanan").value.trim();
            var statusContainer = document.getElementById("status-container");
            var statusText = document.getElementById("status-text");

            if (!idPemesanan) {
                alert("Harap masukkan ID Pemesanan");
                return;
            }

            var statuses = {
                "12345": "Sedang Dicek",
                "67890": "Berhasil",
                "54321": "Gagal"
            };

            var status = statuses[idPemesanan] || "ID Pemesanan tidak ditemukan";

            statusContainer.style.display = "block";

            if (status === "Sedang Dicek") {
                statusText.textContent = "Pembayaran Anda sedang dicek.";
                statusText.className = "status-box status-checked";
            } else if (status === "Berhasil") {
                statusText.textContent = "Pembayaran berhasil! Mobil akan dikirimkan ke alamat Anda.";
                statusText.className = "status-box status-success";
            } else if (status === "Gagal") {
                statusText.textContent = "Pembayaran gagal. Silakan lakukan pembayaran ulang.";
                statusText.className = "status-box status-failed";
            } else {
                statusText.textContent = status;
                statusText.className = "status-box status-failed";
            }
        }
    </script>
</body>
</html>
