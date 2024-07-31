jQuery(document).ready(function() {

	/*********************************************************
	* Hamburger 
	**********************************************************/

    const ham = document.getElementById('hamburger');
    const menu = document.getElementById('nav-primary');
	const body = document.body;

    if (ham && menu) {
        ham.addEventListener('click', function() {
            console.log('Hamburger menu clicked');
            menu.classList.toggle('active');
			ham.classList.toggle('is-active');
			body.classList.toggle("nav-is-open");
        });
    } else {
        console.error('Hamburger or menu element not found');
    }

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
        arrows: false,

        responsive: [
        {
            breakpoint: 800,
            settings: {
				autoplay: false,
				slidesToShow: 1,
				adaptiveHeight: true
            }
        }
		]
    });

});


function initMap() 
{

	/** 
	* Create array of locations
	*/
	const markers = [
		{
			locationName: 'Fit4 The Future',
			lat: 52.76206685096235, 
			lng: -2.3629314076679035,
			address: 'Unit 3 Nova Workshops, <br>Newport, <br>Shropshire, <br>TF10 7BX'
		}
	];

	/** 
	* Create custom marker icon
	*/
	const fehMarker = 'http://rt-fitness.local/wp-content/uploads/2024/07/rt-location-1.png';

	/** 
	* Initially center map on London, UK
	*/
	const centerMap = { lat: 52.762042, lng: -2.3671157 }

	/** 
	* Create map options for our map
	*/
	const mapOptions = {
		center: centerMap,
		zoom: 17,
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
		minWidth: 250,
		maxWidth: 250
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
			animation: google.maps.Animation.DROP
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

			// Automatically open the InfoWindow after 2 seconds
            setTimeout(function() {
                infoWindow.setContent(infoWindowContent);
                infoWindow.open(map, marker);
            }, 2000);
		}
		createInfoWindows();

		/** 
		* Recenter map when an info window is closed
		*/
		infoWindow.addListener('closeclick', function() {
			// map.fitBounds(bounds);
		});

		/** 
		* Fit all of our markers on the map, neatly
		*/
		// bounds.extend(new google.maps.LatLng(markers[i]['lat'], markers[i]['lng']));		
		// map.fitBounds(bounds); 

	// Function to center the map on a specific marker at a given breakpoint
    /* function centerMapOnMarker(marker, breakpoint) {
        if (window.innerWidth < breakpoint) {
            map.setCenter(marker.getPosition());
        }
    }

    // Initial check
    centerMapOnMarker(marker, 500);

    // Listen for window resize events
    window.addEventListener('resize', function() {
        centerMapOnMarker(marker, 500);
    }); */

   }	

}