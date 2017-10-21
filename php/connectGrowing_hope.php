<?php
/**
 * 
 * @authors Your Name 
 * @date    2017-10-19 13:55:36
 * 
 */
$dsn = "mysql:host=localhost;dbname=growing_hope;port=3306;charset=utf8";
$user = "root";
$password = "root";
$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
$pdo = new PDO($dsn, $user, $password, $options);



?>