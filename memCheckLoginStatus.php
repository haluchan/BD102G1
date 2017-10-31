<?php
session_start();
if( isset($_SESSION["mem_no"]))
	echo "ok";
else
	echo "error";
?>