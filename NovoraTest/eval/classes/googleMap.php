<?php
/*
Google Map class to parse Google Map response
*/
namespace classes;

class googleMap extends mapClass{
	
	/*
	 To parse google map api response 
	 @input Json object
	 @Output lat long Array for Google map
	*/
	function parseResponse($jsonResponse) : array {
			$response = json_decode($jsonResponse);			
			$parseReponse = array();			
			if ($response->status == 'OK') {
				foreach($response->results as $data) {
					$map['lat'] = $data->geometry->location->lat;
					$map['lon'] = $data->geometry->location->lng;
					$parseReponse[] = $map;
				}
			}
			return $parseReponse;
	}
}
?>