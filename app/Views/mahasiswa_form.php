<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: left;
        }

        h2 {
            color: #4caf50;
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <form action="/mahasiswa/processForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>

        <label for="prodi">Program Studi:</label>
        <select name="prodi" required>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Manajemen Informatika">Manajemen Informatika</option>
        </select>

        <button type="submit">Submit</button>
    </form>

    <?php
    // Ambil data dari sesi
    $data_mahasiswa = session()->getFlashdata('data_mahasiswa');

    // Tampilkan data jika ada
    if ($data_mahasiswa) {
        echo "<div class='result'>";
        echo "<h2>Data Mahasiswa yang Disimpan:</h2>";
        echo "<p><strong>Nama:</strong> " . $data_mahasiswa['nama'] . "</p>";
        echo "<p><strong>NIM:</strong> " . $data_mahasiswa['nim'] . "</p>";
        echo "<p><strong>Program Studi:</strong> " . $data_mahasiswa['prodi'] . "</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
