<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
    <style>
        /* Reset */
        body, h1, h2, h3, p, ul, a {
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
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            text-align: center;
            padding: 12px;
            border: 1px solid gray;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: orange;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        button {
            color: white;
            background-color: darkorange;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #ffcc66;
            transform: translateY(-2px);
        }

        h1 {
            text-align: center;
            color: darkorange;
            margin-bottom: 20px;
        }

        img {
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">List Mobil</h1>
        <center><button type="button" onclick="window.location.href = 'home(utama).html'">Home</button></center>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Mobil</th>
                    <th>Foto</th>
                    <th>Tahun Kendaraan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data akan diisi dari database -->
                    <tr>
                    <td>Toyota Avanza</td>
                    <td><img src="aset/avanza.png" alt=""></td>
                    <td>2019 - 2021</td>
                    <td>Rp 500,000 / hari</td>
                        <td><button type="button" onclick="lanjut()">Pilih</button></td>
                    </tr>
            </tbody>
        </table>
    </div>
    <script>
        function lanjut() {
            alert('Mobil Dipilih');
            window.location.href = 'halaman_lengkapi_data.php';
        }
    </script>
</body>
</html>
