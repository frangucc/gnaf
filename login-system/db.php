<?php
/* Database connection settings */
$host = 'mysql.itemlids.dreamhosters.com';
$user = 'user199';
$pass = 'mysql1234';
$db = 'accounts1';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
