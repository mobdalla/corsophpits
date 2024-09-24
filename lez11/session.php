<?php 


session_start();
$_SESSION['last_update']  = date(('d-m-Y H:i:s'));

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';