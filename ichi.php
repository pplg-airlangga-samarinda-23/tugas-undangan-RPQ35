<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{text-align: center;
            background-color: cadetblue;}
        
        div{border: 2px black solid ;
            border-radius: 5px;
            width: max-content;
            margin: auto;}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doa</title>
</head>
<body>
    <form action="" method="post">
        ucapan dan doa
        <div>
            <input type="text" name="nama" id="" placeholder="isi nama">
        </div>
        <div><input type="text" name="ucapan" id="" placeholder="ucapan & doa"></div>
        <div>
            <select name="kehadiran" id="">
                <option value="1">hadir</option>
                <option value="2">tidak hadir</option>
                <option value="3">tidak tau</option>
            </select>
            <button type="submit" id="jomblo" name="buton" value="one">kirim</button>
        </div>
    </form>
    <?php
   
        
    $host="localhost";
    $username="root";
    $password="";
    $database="undagan";
    $connection= new mysqli($host, $username, $password, $database);
    if($connection->connect_error){
        echo "gagal"; 
    } else {echo"y";}
    
    $name= @$_POST['nama'];
    $doa= @$_POST['ucapan'];
    $keterangan= @$_POST['kehadiran'];
    if (isset($_POST['buton'])) {
    if($name!=''){if($doa!= ''){

        $sql="INSERT INTO bukutamu (nama,ucapan,keterangan) VALUES ('$name','$doa','$keterangan')";

        echo'<script>alert("berhasil megirim pesan");
            setTimeout(function() {
                window.close(alertBox);
                    }, 300);</script>';
        
                    $connection->query($sql);}}

    else if (is_null($_POST['nama'])){if(is_null($_POST['ucapan'])) {echo'<script>alert("mohon diisi sebelum dikirim")</script>';}}
    }
    ?>
    <script>
       

    </script>
</body>
</html>