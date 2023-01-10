$(function() {
	$("#searchForm").on("submit", function(event) {
		event.preventDefault();
		var address = $('input[name=address]').val() 
		if(address.length > 0) {
			$('#result_panel').html('Searching...');
			$.post("searchGeocode.php", {
				searchGeocode: address
			}, function(response) {
				console.log(response);
				var responseContent = '';
				$.each(response, function(key, val) {
					$.each(val, function(name, response) {
						responseContent += "<div class='flexPanel'><div class='col addressText'>" + address + " (" + name + ")</div>";
						$.each(response, function(ofSet, res) {
							responseContent += "<div class='col'>Latitude:" + res.lat + "  <br/>Longitude:" + res.lon + "</div>";
						});
						responseContent += "</div>";
					});
				});
				$("#result_panel").html(responseContent);
			}, 'json');
		}
	});
})