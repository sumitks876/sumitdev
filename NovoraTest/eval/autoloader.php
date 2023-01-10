<?php
/*
Auto Loads class files
*/

 function autoload ($class) {
	$filePath = str_replace('\\', '/',  $class);	
    require_once($filePath . ".php");
 }
 
 spl_autoload_register("autoload");
?>