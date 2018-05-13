<?php
if ( ! session_id() ) { session_start();}
$mysqli = new mysqli("localhost", "root", "root", 'blog');
$query = $mysqli->query('SELECT * FROM user WHERE `sessin_id` = "' . session_id() . '" and `login` = "anton"');
$res = $query->fetch_assoc();


?>