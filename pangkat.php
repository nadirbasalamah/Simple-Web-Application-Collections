<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'> 
    <title>Pangkat</title> 
    <style>
    body {
        background-color: #18ffff;
        font-family: 'Allerta';
    }
    h1 { 
        color: black;
    }
    #form_sample { 
        background-color: white;
        border-radius: 10px;
    }
    #user_input { 
        background-color: #1976d2;
    }
    h2 { 
        color:black;
    }
    #tombol { 
        font-family: 'Allerta';
        color: black;
        background-color: #18ffff;
        border-radius: 4px;
        font-size: 20px;
    }
    </style>
</head>
<body>
    <center>
    <h1>PERHITUNGAN BILANGAN BERPANGKAT</h1>
    <table id="form_sample">
    <form action="#" method="POST">
        <tr>
        <td><label for="angka">Masukkan angka :</label></td>
        <td><input type="number" name="angka" id="angka" value="1"></td>
        </tr>
        <tr>
        <td><label for="pangkat">Masukkan pangkat :</label></td>
        <td><input type="number" name="pangkat" id="pangkat" value="1"></td>
        </tr>
        <tr>
        <td></td>
        <td><input id="tombol" type="submit" value="HITUNG" style="margin-top:24px;margin-bottom:24px;"></td>
        </tr>
    </table>
        <h2>HASIL</h2>
    </center>
    </form>
</body>
</html>
<?php
    echo "<style> #hasilfib{ color:black;}</style>";
    echo "<center id=\"hasilfib\">"; 
    function Pangkat($angka, $pangkat){ 
        if ($pangkat == 0)
            return 1;
        else 
            return $angka * Pangkat($angka,$pangkat - 1); 
    }
    if (isset($_POST['angka']) && isset($_POST['pangkat'])) {
        $angka = $_POST['angka'];
        $pangkat = $_POST['pangkat'];
        printf("%s ","Hasil dari " . $angka . " pangkat " . $pangkat . " : ");
        $hasil = Pangkat($angka,$pangkat);
        echo $hasil;
    }
    echo "</center>";
?>