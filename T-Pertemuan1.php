<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode GET - Form Penilaian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 80px auto;
            background-color: pink;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(246, 134, 222, 0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            color: #555;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            resize: none;
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 20px;
            background-color: #333;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 30px;
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 6px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Penilaian</h2>
        <form method="get">
            <label for="fullname">Nama Lengkap</label>
            <input type="text" name="fullname" id="fullname" required>

            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" required>

            <label for="univ">Nama Universitas</label>
            <input type="text" name="univ" id="univ" required>

            <label for="email">Email</label>
            <textarea name="email" id="email" required></textarea>

            <label for="nilai">Nilai</label>
            <textarea name="nilai" id="nilai" required></textarea>

            <input type="submit" name="proses" value="Kirim">
        </form>

        <?php
        if (isset($_GET['proses'])) {
            $fname = htmlspecialchars($_GET['fullname']);
            $nim = htmlspecialchars($_GET['nim']);
            $unv = htmlspecialchars($_GET['univ']);
            $eml = htmlspecialchars($_GET['email']);
            $nli = (int) $_GET['nilai'];

            echo "<div class='result'>";
            echo "<strong>Nama Lengkap:</strong> $fname<br>";
            echo "<strong>NIM:</strong> $nim<br>";
            echo "<strong>Nama Universitas:</strong> $unv<br>";
            echo "<strong>Email:</strong> $eml<br>";
            echo "<strong>Nilai:</strong> $nli<br>";

            if ($nli > 70) {
                echo "<strong>Status:</strong> Lulus";
            } else {
                echo "<strong>Status:</strong> Tidak Lulus";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>