<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view': default:
        include('view.php');
        break;
    case 'add':
        include('mapel/add.php');
        break;
    case 'save':
        include('mapel/save.php');
        break;
    case 'edit':
        include('mapel/edit.php');
        break;
    case 'update':
        include('mapel/update.php');
        break;
    case 'delete':
        include('mapel/delete.php');
        break;
}