<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>div.show{
                    overflow: outo;
                    inshow{overflow-y: hidden;overflow-x: hidden;}}</style>
</head>
<body>
    
<?php

    $host="localhost";
    $username="root";
    $password="";
    $database="undagan";
    $conection= new mysqli($host, $username, $password, $database);

$SQL="SELECT*FROM bukutamu ORDER BY id DESC";
$hasil=$conection->query($SQL);




while ($baris=$hasil->fetch_row()){
    $out=$baris[1].'<br>'.'  '.$baris[2].'<br>';
    echo"<div class='show'><div class='inshow'>$out</div>";
}

$hasil->free_result();
?>
</body>
</html>