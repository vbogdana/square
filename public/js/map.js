/* ================================================== */
/* =============== START GOOGLE MAP PLUGIN ================ */
/* ================================================== */

window.google = window.google || {};

google.maps = google.maps || {};

(function() {

	function getScript(src) {

		document.write('<' + 'script src="' + src + '"' + ' type="text/javascript"><' + '/script>');

	}
		
	var modules = google.maps.modules = {};

	google.maps.__gjsload__ = function(name, text) {
		modules[name] = text;
	};
	
	google.maps.Load = function(apiLoad) {
		delete google.maps.Load;
		getScript("http://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyBL40bSI-QPBMiOk7H08EeBsshJO10kN8E");
	};

	var loadScriptTime = (new Date).getTime();

	getScript("https://maps.gstatic.com/maps-api-v3/api/js/18/15a/main.js");

})();

/* ================================================== */
/* =============== END GOOGLE MAP PLUGIN ================ */
/* ================================================== */

/* ================================================== */
/* =============== START GOOGLE MAP SETTINGS ================ */
/* ================================================== */

jQuery(document).ready(function(){

	var map;
	
	var title = jQuery('#map-canvas').data('title');
	var description = jQuery('#map-canvas').data('description');
	
	var lat = jQuery('#map-canvas').data('lat');
	var long = jQuery('#map-canvas').data('long');
	var myLatLng = new google.maps.LatLng(lat,long);

	function initialize() {

		var roadAtlasStyles = [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#212121"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#212121"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#181818"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1b1b1b"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#2c2c2c"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8a8a8a"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#373737"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#3c3c3c"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#4e4e4e"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#000000"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#3d3d3d"
      }
    ]
  }
];

		var mapOptions = {
			zoom: 13,
                        zoomControl: true,
                        zoomControlOptions: {
                            position: google.maps.ControlPosition.LEFT_CENTER
                        },
			center: myLatLng,
			disableDefaultUI: true,
			scrollwheel: false,
			navigationControl: false,
			mapTypeControl: false,
			scaleControl: false,
			draggable: true,
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'usroadatlas']
			}
		};

		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		var img = jQuery('#map-canvas').data('img');

		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			icon: img,
			title: ''
		});
	
		var contentString = '<div style="max-width: 300px" id="content">'+
								'<div id="bodyContent">'+
								'<h5 class="color-primary">'+
									'<strong>'+
									title +
									'</strong>'+
									'</h5>' +
								'<p style="font-size: 12px">' +
									description +
								'</p>'+
								'</div>'+
							'</div>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
	
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});

		var styledMapOptions = {
			name: 'US Road Atlas'
		};

		var usRoadMapType = new google.maps.StyledMapType(
			roadAtlasStyles, styledMapOptions);

		map.mapTypes.set('usroadatlas', usRoadMapType);
		map.setMapTypeId('usroadatlas');

	}

	google.maps.event.addDomListener(window, 'load', initialize);

});

/* ================================================== */
/* =============== END GOOGLE MAP SETTINGS ================ */
/* ================================================== */