<?php 
$folder = "page/siswa/";
@$act = $_GET['act'];

switch ($act) {
	case 'value':
		# code...
		break;
	
	default:
		include($folder.'index.php');
		break;
}