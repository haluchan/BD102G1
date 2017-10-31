<?php
/**
 * 
 * @authors Your Name 
 * @date    2017-10-19 13:55:36
 * 
 */
$dsn = "mysql:host=localhost;dbname=bd102g1;port=3306;charset=utf8";


$user = "bd102g1";
$password = "bd102g1";
$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
$pdo = new PDO($dsn, $user, $password, $options);


?>