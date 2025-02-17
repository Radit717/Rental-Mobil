<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
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

        input[type="text"], input[type="password"], button {
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

        .radio-group {
            margin-bottom: 15px;
        }

        .radio-group label {
            font-weight: normal;
            margin-right: 10px;
        }

        .radio-group input {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah User</h1>
        <center><button type="button" onclick="window.location.href = 'dashboard_admin.php'" style="width: fit-content;">Home</button></center>
        <form id="tambah-user-form">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>

            <label for="no-telepon">No Telepon</label>
            <input type="text" id="no-telepon" name="no-telepon" placeholder="Masukkan No Telepon" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan Password" required>

            <div class="radio-group">
                <label>Role:</label>
                <input type="radio" id="role-admin" name="role" value="admin" required>
                <label for="role-admin">Admin</label>
                <input type="radio" id="role-user" name="role" value="user">
                <label for="role-user">User</label>
            </div>

            <button type="submit">Tambah User</button>
        </form>
    </div>

    <script>
    document.getElementById("tambah-user-form").addEventListener("submit", function(event) {
        event.preventDefault(); 

        setTimeout(function() {
            alert("User berhasil ditambahkan!");
            window.location.href = "dashboard_admin.php"; 
        }, 1000);
    });
</script>

</body>
</html>
