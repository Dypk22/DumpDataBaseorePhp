<?php
include_once('Mysqldump/Mysqldump.php');
$dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=DATABASE_HOST;dbname=DATABASE_NAME', 'DATABASE_USER', 'DATABASE_PASSWORD');
$f=date('d-m-Y');
$dump->start("sql_dump/$f.sql");
?>