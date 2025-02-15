<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            text-align: center;
            color: darkorange;
            margin: 20px 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background-color: darkorange;
            color: white;
        }

        a {
            padding: 5px 10px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .table-container {
            overflow-x: auto;
            max-width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: auto;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            white-space: nowrap;
        }

        th {
            background-color: darkorange;
            color: white;
        }

        img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .btn-edit {
            background-color: #007bff;
        }

        .btn-edit:hover {
            background-color: #0056b3;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #a71d2a;
        }

        .btn-accept {
            background-color: #28a745;
        }

        .btn-accept:hover {
            background-color: #1e7e34;
        }

        .btn-reject {
            background-color: #ffc107;
        }

        .btn-reject:hover {
            background-color: #e0a800;
        }

        img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
        }

        a {
            background-color: #ffc107;
        }

        .btn {
            width: 100px;
            padding: 10px;
            margin: 5px;
            font-size: 15px;
            border: none;
            background-color: #ffc107;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-logout {
            align-self: center;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>

<body><br><br><br><br>
    <h1>Dashboard Admin</h1>
    <a class="btn btn-logout" href="form_login_register.html">Logout</a>
    <div class="container">
        <h2>Tabel User</h2>
        <a class="btn btn-edit" href="form_tambah_user.php">Tambah User</a><br><br>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>08123456789</td>
                    <td>password123</td>
                    <td>admin</td>
                    <td>
                        <a class="btn-edit" href="form_edit_user.php">Edit</a>
                        <a class="btn-delete" href="#">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <h2>Tabel Mobil</h2>
        <a class="btn btn-edit" href="form_tambah_mobil.php">Tambah Mobil</a><br><br>
        <table>
            <thead>
                <tr>
                    <th>Nama Mobil</th>
                    <th>Foto</th>
                    <th>Tahun Kendaraan</th>
                    <th>Harga</th>
                    <th>Plat Nomor</th>
                    <th>Nama Pemilik</th>
                    <th>Jenis Mobil</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Toyota Avanza</td>
                    <td><img src="aset/avanza.png" alt=""></td>
                    <td>2019 - 2021</td>
                    <td>Rp 500,000 / hari</td>
                    <td>B 1010 ABC</td>
                    <td>Dwiki</td>
                    <td>Minimbus</td>
                    <td>
                        <a class="btn-edit" href="form_edit_mobil.php">Edit</a>
                        <a class="btn-delete" href="#">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <h2>Tabel Transaksi</h2>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID Pesanan</th>
                        <th>Nama Pemesan</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>Foto KTP</th>
                        <th>Mobil</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Jumlah Hari</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Metode Pembayaran</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jane Smith</td>
                        <td>08123456789</td>
                        <td>jane@example.com</td>
                        <td>1234567890123456</td>
                        <td>Jl. Contoh No. 123</td>
                        <td><img src="aset/ktp_jane.png" alt="Foto KTP"></td>
                        <td>Toyota Avanza</td>
                        <td>2024-01-01</td>
                        <td>5</td>
                        <td>2024-01-06</td>
                        <td>Transfer</td>
                        <td>Belum Dicek</td>
                        <td><img src="aset/bukti_transfer.png" alt="Bukti Pembayaran"></td>
                        <td>
                            <a class="btn-accept" href="#">ACC</a><br><br>
                            <a class="btn-reject" href="#">Tolak</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".btn-delete").forEach(button => {
                button.addEventListener("click", function (event) {
                    event.preventDefault();
                    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                        alert("Data berhasil dihapus.");
                    }
                });
            });

            document.querySelectorAll(".btn-accept").forEach(button => {
                button.addEventListener("click", function (event) {
                    event.preventDefault();
                    if (confirm("Apakah Anda yakin ingin menyetujui transaksi ini?")) {
                        alert("Transaksi telah disetujui.");
                    }
                });
            });

            document.querySelectorAll(".btn-reject").forEach(button => {
                button.addEventListener("click", function (event) {
                    event.preventDefault();
                    if (confirm("Apakah Anda yakin ingin menolak transaksi ini?")) {
                        alert("Transaksi telah ditolak.");
                    }
                });
            });

            var logoutButton = document.querySelector(".btn-logout");
            if (logoutButton) {
                logoutButton.addEventListener("click", function (event) {
                    if (!confirm("Apakah Anda yakin ingin logout?")) {
                        event.preventDefault();
                    }
                });
            }
        });

    </script>
</body>

</html>