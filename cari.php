<?php
$array = [12,44,56,87,96,33,13,67,94];
function cari($array, $cari):bool {
    $ketemu = false;
    for ($i=0; $i < sizeof($array); $i++) { 
        if ($array[$i] == $cari) {
            $ketemu = true;
            break;
        }
    }
    return $ketemu;
  }
if (isset($_POST['data'])) {
    $cari = $_POST['data'];
    $hasil = "Data tidak ditemukan!";
    if (cari($array,$cari) == true) {
        $hasil = "Data ditemukan!";
    }
} else {
    $cari = 0;
    $hasil = "Hasil pencarian data ditampilkan disini";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans' rel='stylesheet'>
    <title>Pencarian Data</title>
    <style>
    body {
        background-color: #40c4ff;
        font-family: 'Alegreya Sans';
    }
    #ui_sample{
        background-color: white;
        border-radius: 12px;
    }
    #tombol {
        color:white;
        background-color:#01579b;
        border-style: solid;
        font-family: 'Alegreya Sans';
        margin-top:24px;
        margin-bottom:24px;
        padding:12px;
        font-size:18px;
    }
    p {
        font-size: 20px;
    }
    </style>
</head>
<center>
<body>
<h1>MESIN PENCARI</h1>
    <form action="#" method="POST">
    <table id="ui_sample">
    <tr>
        <td><label style="margin-top:10px;margin-bottom:10px;" for="data">Masukkan data yang dicari :</label></td>
        <td><input style="margin-top:10px;margin-bottom:10px;" type="text" name="data" id="data" value="cari disini"></td>
    </tr>
    <tr>
        <td></td>
        <td><input id="tombol" type="submit" value="CARI"></td>
    </tr>
    </table>
    </form>
    <h2>HASIL PENCARIAN</h2>
    <p><?php echo $hasil;?></p>
</body>
</center>
</html>