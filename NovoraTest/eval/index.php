<!doctype html>
<html>
   <head>
      <title>Geocode Address Finder</title>
      <script src="ui/js/jquery-3.6.0.min.js" ></script>
      <script src="ui/js/search.js" type="text/javascript" ></script>
      <link rel="stylesheet" href="ui/css/style.css" />
   </head>
   <body>
   <div class="container">Geocode API - Type Address to search</div>
      <div class="search_panel">
         <form action="#" id="searchForm">
			 <input type="text" id="address" name="address" placeholder="Search Address...">
			 <input type='submit' name="find" value="Find" class="find" />
		 </form>
      </div>
	  <div id="result_panel"></div>
   </body>
</html>