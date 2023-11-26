<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Mahasiswa</title>
    <link href="gambar/ironman.png" rel="icon">
    <style>
    html {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: url(gambar/back.jpg);
        background-size: cover;
        background-position: center;
        color: white;
    }

    .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, 0.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
        border-radius: 10px;
    }

    .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .login-box .user-box input:focus ~ label,
    .login-box .user-box input:valid ~ label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }

    .login-box form button {
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px;
        border: 1px solid #03e9f4;
        background: transparent;
        position: relative;
        cursor: pointer;
    }

    .login-box form button:hover {
        color: #fff;
        background: #03e9f4;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 100px #03e9f4;
    }

    .login-box form button::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #03e9f4;
        z-index: -1;
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.5s;
    }

    .login-box form button:hover::before {
        transform: scaleX(1);
        transform-origin: left;
    }
</style>

<body>
    <div class="login-box">
        <h2>Formulir Mahasiswa</h2>
         <form action="" method="post">
            <div class="user-box">
                <input type="text" name="Nama" required="">
                <label>Nama</label>
            </div>
            <div class="user-box">
                <input type="number" name="Nim" required="">
                <label>Nim</label>
            </div>
            <div class="user-box">
                <input type="number" name="Nilai" required="">
                <label>Nilai</label>
            </div>
            <div class="user-box">
                <input type="number" name="Absen" required="">
                <label>Absen</label>
            </div>
            <button type="submit" name="Submit">Submit</button>
        </form>
    </div>
    <?php
    if(isset($_POST['Submit'])) {
        $nama = $_POST['Nama'];
        $nim = $_POST['Nim'];
        $nilai = $_POST['Nilai'];
        $absen = $_POST['Absen'];

        $lulus = ($nilai >= 75 && $absen >= 75) ? true : false;

        echo "<h2>Report for $nama</h2>"; 
        echo "<p>NIM: $nim</p>"; 
        echo "<p>Nilai: $nilai%</p>";
        echo "<p>Absen: $absen%</p>";

        if($lulus) {
            echo "<p>Status: Lulus</p>";
        } else {
            echo "<p>Status: Tidak Lulus</p>";
        }
    }
    ?>

</body>
</head>