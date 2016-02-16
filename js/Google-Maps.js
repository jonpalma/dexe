var map, draggable;
$(document).ready(function () {
	google.maps.event.addDomListener(window, 'load', initialize);
});

function initialize() {	
	if( $('#googleMap').attr('fracc') == 'alcantara' ) {
		var $lat = 28.648836,
			$long = -106.149957,
			$title = 'Puente de Piedra';
	} else if( $('#googleMap').attr('fracc') == 'victoria' ) {
		var $lat = 28.593816,
			$long = -106.157444,
			$title = 'Hacienda Victoria';
	}
	
	var map_canvas = document.getElementById('googleMap');

	var map_options = {
		center: new google.maps.LatLng($lat, $long),
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	};

	map = new google.maps.Map(map_canvas, map_options);

	var marker = new google.maps.Marker({
		position: new google.maps.LatLng($lat, $long),
		map: map,
		title: $title
	});
}