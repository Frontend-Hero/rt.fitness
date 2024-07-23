jQuery(document).ready(function() {

    /** 
     * Confetti
     */
     // placeholder....

    /** 
     * Testimonials
     */
    jQuery('.testimonials-wrapper').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        variableWidth: true,
        adaptiveHeight: true,
        initialSlide: 2,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false

        /* responsive: [
        {
            breakpoint: 768,
            settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
            }
        }
        ] */
    });

});


function initMap() 
{

	/** 
	* Create array of locations
	*/
	const markers = [
		{
			locationName: 'Ole & Steen',
			lat: 51.50635804760832, 
			lng: -0.017434353136203003,
			address: 'CR34 Crossrail Pl,<br> London,<br> E14 5AR'
		}
	];

	/** 
	* Create custom marker icon
	*/
	const fehMarker = 'https://www.frontendhero.dev/wp-content/uploads/2023/03/feh-marker.png';

	/** 
	* Initially center map on London, UK
	*/
	const centerMap = { lat: 51.5114675, lng: -0.1266686 }

	/** 
	* Create map options for our map
	*/
	const mapOptions = {
		center: centerMap,
		zoom: 12,
		disableDefaultUI: true,
		styles: [
			{
				"featureType": "administrative",
				"elementType": "all",
				"stylers": [
					{
						"visibility": "on"
					}
				]
			},
			{
				"featureType": "administrative",
				"elementType": "labels.text.fill",
				"stylers": [
					{
						"color": "#444444"
					}
				]
			},
			{
				"featureType": "landscape",
				"elementType": "all",
				"stylers": [
					{
						"color": "#f3f3f3"
					}
				]
			},
			{
				"featureType": "landscape.natural",
				"elementType": "all",
				"stylers": [
					{
						"color": "#cccccc"
					}
				]
			},
			{
				"featureType": "poi",
				"elementType": "all",
				"stylers": [
					{
						"visibility": "off"
					}
				]
			},
			{
				"featureType": "road",
				"elementType": "all",
				"stylers": [
					{
						"saturation": "0"
					},
					{
						"lightness": "0"
					},
					{
						"visibility": "simplified"
					}
				]
			},
			{
				"featureType": "road",
				"elementType": "geometry.stroke",
				"stylers": [
					{
						"weight": "0.49"
					},
					{
						"visibility": "on"
					},
					{
						"saturation": "0"
					},
					{
						"color": "#9a9a9a"
					},
					{
						"gamma": "1.55"
					},
					{
						"lightness": "0"
					}
				]
			},
			{
				"featureType": "road.highway",
				"elementType": "geometry.fill",
				"stylers": [
					{
						"color": "#c280a3"
					}
				]
			},
			{
				"featureType": "road.arterial",
				"elementType": "labels.icon",
				"stylers": [
					{
						"visibility": "off"
					}
				]
			},
			{
				"featureType": "transit",
				"elementType": "all",
				"stylers": [
					{
						"visibility": "off"
					},
					{
						"color": "#a73636"
					}
				]
			},
			{
				"featureType": "water",
				"elementType": "all",
				"stylers": [
					{
						"color": "#cfd0d0"
					},
					{
						"visibility": "on"
					}
				]
			}
		]

	}

	/** 
	* Add map to div, and include above map options
	*/
	const map = new google.maps.Map(document.getElementById("google-map"), mapOptions);

	/** 
	* Create InfoWindow object 
	*/
	const infoWindow = new google.maps.InfoWindow({
		minWidth: 200,
		maxWidth: 200
	});

	/** 
	* Create bounds object
	*/
	const bounds = new google.maps.LatLngBounds();

	/** 
	* Loop through all markers
	*/
	for (let i = 0; i < markers.length; i++) 
	{

		/** 
		* Create new markers
		*/
		const marker = new google.maps.Marker({
			position: { lat: markers[i]['lat'], lng: markers[i]['lng'] },
			map: map,
			icon: fehMarker,
			// animation: google.maps.Animation.DROP
		});

		/** 
		* Function that will create new info windows with info from markers array/objects
		* and click events to open them
		*/
		function createInfoWindows() 
		{
			const infoWindowContent = `
				<div class="feh-content">
					<h3>${markers[i]['locationName']}</h3>
					<address>
						<p>${markers[i]['address']}</p>
					</address>
				<div>
			`;

			google.maps.event.addListener(marker, "click", function ()
			{
				infoWindow.setContent(infoWindowContent);
				infoWindow.open(map, marker);
			}); 
		}
		createInfoWindows();

		/** 
		* Recenter map when an info window is closed
		*/
		infoWindow.addListener('closeclick', function() {
			map.fitBounds(bounds);
		});

		/** 
		* Fit all of our markers on the map, neatly
		*/
		// bounds.extend(new google.maps.LatLng(markers[i]['lat'], markers[i]['lng']));		
		// map.fitBounds(bounds); 
   }	

}