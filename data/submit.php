<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/data/style.css" rel="stylesheet">
</head>
<body>
<?php
$numbers = $_POST['number'];
$luggage = $_POST['numbers'];
$flyOut = $_POST['flyOut'];
$flyIn = $_POST['flyIn'];
$firstLastName = $_POST['firstLastName'];
$message = $_POST['message'];
$price = $_POST['price'];
$personNumber = $_POST['personNumber'];

if ($luggage>20) { $price+= 30;} // Jeigu bagazo svoris virsija 20 kg - prie kainos prisideda 30 euru.


echo "<table class='table'>
    <tr>
        <th style='background-color: lightgray' colspan='7'>Bilietas sekmingai rezervuotas</th>
    </tr>
    <tr>
        <td rowspan='3'>I kur skrendate : ".$flyIn."<br>Is kur skrendate : ".$flyOut."</td>
        <td rowspan='3'>Skrydzio numeris : ".$numbers."<br> Skrydzio laikas : Nenurodyta</td>
        <td rowspan='3'>Vardas, Pavarde : ".$firstLastName."<br>Asmens kodas : ".$personNumber."</td>
        <td rowspan='1'>Papildomi komentarai :<br> ".$message."</td>
        <td style='background-color: lightgray' rowspan='1'><br>Apskaiciuotos bilieto kainos : </td>
        <td style='background-color: lightgray' rowspan='1'><br>Bagazo svoris ".$luggage."kg<br> Galutine suma : ".$price."Eur</td>
    </tr>
</table>";


?>

</body>
</html>
