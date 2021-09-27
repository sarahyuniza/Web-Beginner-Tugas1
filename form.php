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
        <h1 class="judul">Form</h1>

            <form action="postandget.php" method="GET">
                Nama <br>
                <input type="text" name="nama" class="form-control bg-light text-dark border-light mb-3" placeholder="Nama kamu"> <br>
                Alamat <br>
                <input type="text" name="alamat" class="form-control bg-light text-dark border-light mb-3" placeholder="Alamat kamu"> <br>
                Umur <br>
                <input type="text" name="umur" class="form-control bg-light text-dark border-light mb-3" placeholder="Umur kamu"> <br>
                Tanggal lahir <br>
                <input type="date" name="ttl" class="form-control bg-light text-dark border-light mb-3"> <br>
                <a href="hasilform.php">
                <input type="submit" class="button">
                </a>
            </form>
        </div>
    </div>
</body>
</html>