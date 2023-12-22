<?php
define('DB_HOST', 'protct');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'saitphp');
$mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($mysql->connect_errno) exit('ошибка 404');
$mysql->set_charset('utf8');
$mysql->close();
?>