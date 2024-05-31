<?php

$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';

switch ($submodule) {
    case 'view':
        include('view.php');
        break;
    case 'add':
        include('siswa/add.php');
        break;
    case 'save':
        include('siswa/save.php');
        break;
    case 'edit':
        include('siswa/edit.php');
        break;
    case 'delete':
        include('siswa/delete.php');
        break;
    case 'update':
        include('siswa/update.php');
        break;

}
