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
    case 'guru':
        include_once('guru/index.php');
        break;
        break;
    case 'mapel':
        include_once('mapel/index.php');
        break;
        break;
}
