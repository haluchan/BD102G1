<?php 
ob_start();
session_start();
?>

<?php
/**
 * 
 * @authors halu Name (you@example.org)
 * @date    2017-10-30 19:50:49
 * @version $Id$
 */
session_destroy();
header("location:../index.php");
?>