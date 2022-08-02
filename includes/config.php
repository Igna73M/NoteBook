<?php


$DB_HOST='localhost'; // host name
$DB_USER='root';   // database user name
$DB_PASS='';   // database password
$DB_NAME = 'notebook'; // database name

$conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}
?>
