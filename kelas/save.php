<?php
if (isset($_POST['simpan'])) {
    include_once('config.php');
    $kelas = $_POST['kelas'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];
    
    $sql = "INSERT INTO kelas SET kelas='$kelas', kapasitas='$kapasitas', terisi='$terisi'";
    $result = mysqli_query($con, $sql) ;
    if ($result) {
        header('location: ?m=kelas&s=view');
    } else{
       var_dump($result);
       include "index.php";
       echo"<script>";
       echo"alert('Data Gagal Disimpan')";
       echo"</script>";
    }
}