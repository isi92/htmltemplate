<?php
@include('db_connect.php');

$connection = mysql_connect($host, $user, $pass, $webdb);
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}

$select_db = mysql_select_db($webdb);
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}