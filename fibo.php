<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'> 
    <title>Fibonacci</title> 
    <style>
    body {
        background-color: #1976d2;
        font-family: 'Allerta';
    }
    h1 { 
        color: white;
    }
    #form_sample { 
        background-color: white;
        border-radius: 10px;
    }
    #user_input { 
        background-color: #1976d2;
    }
    h2 { 
        color:white;
    }
    #tombol { 
        font-family: 'Allerta';
        color: black;
        background-color: #03a9f4;
        border-radius: 4px;
        font-size: 20px;
    }
    </style>
</head>
<body>
    <center>
    <h1>DERET FIBONACCI</h1>
    <table id="form_sample">
    <form action="#" method="POST">
        <tr>
        <td><label for="angka">Masukkan angka :</label></td>
        <td><input type="number" name="angka" id="angka" value="1"></td>
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
    echo "<style> #hasilfib{ color:white;}</style>";
    echo "<center id=\"hasilfib\">"; 
    if (isset($_POST['angka'])) {
        function Fibonacci($angka) { 
            if ($angka == 0 || $angka == 1)
                return $angka;
            else 
                return Fibonacci($angka - 1) + Fibonacci($angka - 2);
        }
        $angka = $_POST['angka'];
        for ($i=1; $i <= $angka; $i++) { 
            printf("%s ",Fibonacci($i)); 
        }
    } else {
        $angka = 0;
    }
    echo "</center>";
?>