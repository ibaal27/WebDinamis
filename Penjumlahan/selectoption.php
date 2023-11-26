<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Kalkulator</title>
    <link rel="icon" href="gambar/ironman.png">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-image: url(gambar/back.jpg);
        background-position: center;
        background-size: cover;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: pink;
    }

    .calculator {
        background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 20px;
    }

    input,
    select,
    button {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    select {
        width: 100%;
        text-align: center;
    }

    button {
        background-color: red;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    .output {
        font-weight: bold;
        color: #333;
    }

    
</style>

</head>
<body>
    <div class="calculator">
        <form action="" method="post">
            <input type="number" name="input1" placeholder="Angka 1" required>
            <input type="number" name="input2" placeholder="Angka 2" required>
            <select name="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <button type="submit">Hitung</button>
        </form>
        <div class="output">
            Hasil: 
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['input1']) && isset($_POST['input2'])) {
                    $input1 = $_POST['input1'];
                    $input2 = $_POST['input2'];
                    $operator = $_POST['operator'];

                    switch ($operator) {
                        case 'add':
                            $result = $input1 + $input2;
                            break;
                        case 'subtract':
                            $result = $input1 - $input2;
                            break;
                        case 'multiply':
                            $result = $input1 * $input2;
                            break;
                        case 'divide':
                            $result = $input1 / $input2;
                            break;
                        default:
                            $result = "Invalid operator";
                            break;
                    }

                    echo $result;
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
