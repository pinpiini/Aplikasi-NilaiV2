<?php

$module = (isset($_GET['m'])) ? $_GET['m'] : 'home';

switch ($module) {
    case 'home':
        include_once('home.php');
        break;
    case 'kelas':
        include_once('kelas/index.php');
        break;
    case 'siswa':
        include_once('siswa/index.php');
        break;
        break;
}
