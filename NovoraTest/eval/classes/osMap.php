<?php
/*
OS Map class to parse OS Map response
*/
namespace classes;

class osMap extends mapClass{
	
	/*
	 To parse Open Street map api response 
	 @input Json object
	 @Output lat long Array for Open Street
	*/
	function parseResponse($jsonResponse) : array {
			$results = json_decode($jsonResponse);
			$parseResponse = array();
			foreach($results as $data) {
				$map['lat'] = $data->lat;
				$map['lon'] = $data->lon;
				$parseResponse[] = $map;
			}
			return $parseResponse;
	}
}
?>