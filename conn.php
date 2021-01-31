<?php
$host = 'localhost';
$user = 'epicxcom@localhost';
$pas = '';
$database = 'epicxcom_id15860293_datadb';

$konek = mysqli_connect($host, $user, $pas, $database);

if (!$konek) {
	echo "Connection fail";
}
