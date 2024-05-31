<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM guru WHERE id='$id'";
$result = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($result);
if(!empty($r['foto'])) {
    unlink("guru/foto/" . $r['foto']);
}

$sql1 = "DELETE from guru WHERE id='$id'";
$result1 =  mysqli_query($con, $sql1);
if ($result1) {
    header('location: index.php?m=guru&s=view');
} else {
    include "index.php?m=guru&s=view";
    echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
    echo '</script>';
}