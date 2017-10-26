<?php
/**
 * 
 * @authors Your Name 
 * @date    2017-10-19 13:55:36
 * 
 */

$dsn = "mysql:host=localhost;dbname=growing_hope;port:3306;charset=utf8";
<<<<<<< HEAD

$dsn = "mysql:host=localhost;dbname=growing_hope;port=3306;charset=utf8";

=======
>>>>>>> af1a63768ae1132f46ed276913dc312f51d93da1
$user = "root";
$password = "root";
$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
$pdo = new PDO($dsn, $user, $password, $options);

<<<<<<< HEAD





=======
>>>>>>> af1a63768ae1132f46ed276913dc312f51d93da1
?>