<?php
    $myFile = "guestbook.txt";
    $fh = fopen($myFile, 'a') or die("can't open file");
    if (isset($_POST['kirim'])) {
        $nama_user = $_POST['nama'] . ";\n";
        $komentar_user = $_POST['komentar'] . ";\n";
        fwrite($fh, $nama_user);
        fwrite($fh, $komentar_user);
        fclose($fh);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Buku Tamu</title>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <style>
        body {
            background-color: #0277bd;
            color: white;
            font-family:'Lato';
        }
        .btn {
            border-color: #bbdefb;
            background-color: #bbdefb;
            color: black;
        }
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
            background: #64b5f6;
        }
 
        .btn-primary:active, .btn-primary.active {
            background: #1e88e5;
            box-shadow: none;
        }
        .hasil_komentar {
            background-color:white;
            color:black;
            padding-left:4px;
            border-radius:4px;
            font-size:14pt;
        }
    </style>
<body>
    <form action="#" method="POST">
    <div class="container-fluid">
    <div class="d-flex flex-column">
    <div class="d-flex justify-content-center"><h1>BUKU TAMU</h1></div>
    <div class="d-flex justify-content-center"><p>Selamat datang di buku tamu !</p></div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Komentar</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="komentar"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="kirim">KIRIM</button>
</form>
    </div>
    <h3>Komentar</h3>
<div class="hasil_komentar">
        <?php 
            $theData = file_get_contents($myFile);
            $big_data = explode(';',$theData);
            for ($i=0; $i < sizeof($big_data); $i++) { 
                if ($i % 2 == 0 && $i < sizeof($big_data)) {
                    echo 'Nama : ' . $big_data[$i];
                } else if ($i % 2 != 0 && $i < sizeof($big_data)) {
                    echo 'Komentar : ' . $big_data[$i];
                    echo '<br>';
                }
                echo '<br>';
            }
        ?>
    </div>
</body>
</html>