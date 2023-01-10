<?php
/*
Search class
*/
namespace classes;

class searchClass{
	
	private $configData;
	
	/*
	Class contrucutor
	*/
    function __construct() {
        $this->configData = parse_ini_file('properties/config.ini', true);
    }
	
	/*
	 Method to get Lat-long from Address input
	 @input String Address
	 @Output String Lat-long Json Response
	*/	
	function getLatLongfrmAdd($searchGeocode):string{
		if(!empty($searchGeocode)){			
			$opts = array(
				'http' => array(
				"header" => "User-Agent: Nominatim-API",
				'method' => 'GET'
				),
			); 
			// Stream context creation
			$stream_context = stream_context_create($opts);
			foreach($this->configData as $mapData) {
				//Factory Pattern
				$factory= new factoryMap();
				$mapObj = $factory->create($mapData['name']);// create multiple objects
				$searchGeocode = str_replace(" ", "+", $searchGeocode);				
				$jsonData = file_get_contents($mapData['url'].$searchGeocode, false, $stream_context);
				$result[$mapData['title']]=$mapObj->parseResponse($jsonData);              
			}			
		}		
		return  json_encode(array($result));
	}	
	
	
	function __destruct() {
		
	}
	
}


?>