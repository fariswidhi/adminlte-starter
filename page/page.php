<?php
$page = $_GET['page'];

switch ($page) {
  case 'siswa':
    include('siswa/siswa.php');
    break;
  
  default:
    include('dashboard.php');
    break;
}