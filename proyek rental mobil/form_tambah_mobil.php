<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 500px;
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

        input[type="text"], input[type="number"], button, input[type="file"] {
            width: 95%;
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

        .file-input {
            border: 1px dashed #ddd;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            margin-bottom: 15px;
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
        <h1>Tambah Mobil</h1>
        <center><button type="button" onclick="window.location.href = 'dashboard_admin.php'" style="width: fit-content;">Home</button></center>
        <form id="tambah-mobil-form">
        <label for="nama-mobil">Nama Mobil</label>
            <input type="text" id="nama-mobil" name="nama-mobil" placeholder="Masukkan Nama Mobil" required>

            <label for="harga">Harga</label>
            <input type="number" id="harga" name="harga" placeholder="Masukkan Harga Mobil" required>

            <label for="foto-mobil">Foto Mobil</label>
                <input type="file" id="foto-mobil" name="foto-mobil" accept="image/*" required>
                
            <label for="tahun">Tahun Kendaraan</label>
            <input type="text" id="tahun" name="tahun" placeholder="Masukkan tahun Mobil" required>

            <label for="plat_nomor">Plat Nomor</label>
            <input type="text" id="plat_nomor" name="plat_nomor" placeholder="Masukkan plat nomor Mobil" required>

            <label for="nama_pemilik">Nama Pemilik</label>
            <input type="text" id="nama_pemilik" name="nama_pemilik" placeholder="Masukkan nama pemilik Mobil" required>

            <label for="jenis_mobil">Jenis Mobil</label>
            <input type="text" id="jenis_mobil" name="jenis_mobil" placeholder="Masukkan jenis mobil Mobil" required>

            <button type="submit">Tambah Mobil</button>
        </form>
    </div>

    <script>
    document.getElementById("tambah-mobil-form").addEventListener("submit", function(event) {
        event.preventDefault(); 
        
        setTimeout(function() {
            alert("Data mobil berhasil ditambahkan!");
            window.location.href = "dashboard_admin.php";
        }, 1000); 
    });
</script>

</body>
</html>
