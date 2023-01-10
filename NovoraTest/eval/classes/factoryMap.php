<?php
/*
Factory  class to create mutiple type of maps object
*/
namespace classes;

class factoryMap{
	
	/*
	 Factory class  To Create Object
	 @input Map API Name
	 @Output Object of Class 
	*/
	public static function create($maptype):object{
		$maptype = 'classes\\'.$maptype;
        return new $maptype();
    }
	
}

?>