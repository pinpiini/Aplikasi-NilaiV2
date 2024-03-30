<?php

$submodule = (isset($_GET['m'])) ? $_GET['m'] : 'home';

switch ($submodule) {
    case 'view':
        include_once('view.php') default;
        break;
    case 'add':
        include_once('kelas/add.php');
        break;
    case 'save':
        include_once('kelas/save.php');
        break;
    case 'edit':
        include_once('kelas/edit.php');
        break;
    case 'delete':
        include_once('kelas/delete.php');
        break;

}
