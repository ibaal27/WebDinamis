<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENJUMLAHAN PHP</title>
    <link rel="icon" href="gambar/ironman.png">
</head>
<style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url(gambar/back.jpg);
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: rgba(255, 255, 255, 0.8);
            color: black;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: yellowgreen;
        }
    </style>
<body>
    <form action="" method="post">
        <h2>PENJUMLAHAN</h2>
        <label for="angka1">Angka Pertama</label>
        <input type="number" name="angka1" placeholder="Masukkan Angka 1" required>
        <br><br>
        <label for="angka2">Angka Kedua</label>
        <input type="number" name="angka2" placeholder="Masukkan Angka 2" required>
        <br><br>
        <input type="submit" value="jumlah">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka1 = $_POST['angka1']; 
            $angka2 = $_POST['angka2'];

            $hasil = $angka1 + $angka2;

            echo "<h3>Hasil dari penjumlahan adalah $hasil</h3>";
        }
        ?>
    </form>
</body>
</html>