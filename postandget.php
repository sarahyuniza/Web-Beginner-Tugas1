<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="form.css">
    <title>Form Sarah</title>
</head>
<body>
    <div class="container">
        <div class="content">
        <h1 class="judul">Hasil Form</h1>

        </div>
        </div>
    </div>
</body>
</html>

<?php

    if (isset($_GET["nama"])) {
        $nama = $_GET["nama"];
        echo "Nama kamu <b>" . $nama . "</b>.</p>";
    } else {
        $nama = " ";
    }
    echo "<br>";

    if (isset($_GET["alamat"])) {
        $alamat = $_GET["alamat"];
        echo "Alamat kamu di <b>"  . $alamat . "</b>.</p>";
    } else {
        $alamat = " ";
    }

    if (isset($_GET["umur"])) {
        $umur = $_GET["umur"];
        echo "Umur kamu <b>" . $umur . "</b>.</p>";
    } else {
        $umur = " ";
    }

    if (isset($_GET["ttl"])) {
        $ttl = $_GET["ttl"];
        echo "Tanggal lahir kamu <b>" . $ttl . "</b>.</p>";
    } else {
        $ttl = " ";
    } 
?>