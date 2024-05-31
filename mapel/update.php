<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $mapel = $_POST['mapel'];
    $sks = $_POST['sks'];

    $sql = "UPDATE mapel SET mapel='$mapel', sks='$sks' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=mapel&s=view');
    } else {
        include "index.php?m=mapel&s=view";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}