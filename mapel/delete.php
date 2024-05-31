<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM mapel WHERE id = '$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    header('location: index.php?m=mapel&s=view');
} else {
    include "index.php?m=mapel&s=view";
    echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
    echo '</script>';
}