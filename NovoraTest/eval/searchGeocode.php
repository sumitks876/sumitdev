<?php
/*
Get Latitude and Longitude from Address
*/

require "autoloader.php";

if(!empty($_POST['searchGeocode'])){
	$obj= new classes\searchClass();
	echo $obj->getLatLongfrmAdd($_POST['searchGeocode']);
}

?>