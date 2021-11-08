window.map = {
    mapType: 'ROADMAP',
    mapZoom: 17,
    mapStyle: 'flat',
    mapScroll: false,
    marker: 'show',
    lat: '-2.217359',
    lng: '113.932811',
    markerURL: 'assets/images/marker.png'
};
/* ========================================================================
 * Angle: map.js
 * Map Shortcode Javascript file
 * ========================================================================
 * Copyright 2014 Oxygenna LTD
 * ======================================================================== */

// ignore camel case because it breaks jshint for vars from php localisation
/* jshint camelcase: false */

/* global jQuery: false, google: false, alert: false */

jQuery(document).ready(function( $ ) {
    'use strict';

    $('.google-map').each( function() {
        var mapDiv = $(this);
        var mapData = window[mapDiv.attr('id')];

         // Our custom marker label overlay
        var MarkerLabel = function(options) {

            var self = this;
            this.setValues(options);

            // Create the label container
            this.div = document.createElement('div');
            this.div.className = 'map-marker-label fadeIn animated';

            // Trigger the marker click handler if clicking on the label
            // google.maps.event.addDomListener(this.div, 'click', function(e){
            //     (e.stopPropagation) && e.stopPropagation();
            //     google.maps.event.trigger(self.marker, 'click');
            // });
        };

        MarkerLabel.prototype = $.extend(new google.maps.OverlayView(), {
            onAdd: function() {
                this.getPanes().overlayImage.appendChild(this.div);

                // Ensures the label is redrawn if the text or position is changed.
                var self = this;
                this.listeners = [
                    google.maps.event.addListener(this, 'position_changed', function() { self.draw(); }),
                    google.maps.event.addListener(this, 'text_changed', function() { self.draw(); }),
                    google.maps.event.addListener(this, 'zindex_changed', function() { self.draw(); })
                ];
            },
            onRemove: function() {
                this.div.parentNode.removeChild(this.div);
                // Label is removed from the map, stop updating its position/text
                for (var i = 0, l = this.listeners.length; i < l; ++i) {
                    google.maps.event.removeListener(this.listeners[i]);
                }
            },
            draw: function() {
                var
                    text = String(this.get('text')),
                    markerSize = this.marker.icon.anchor,
                    position = this.getProjection().fromLatLngToDivPixel(this.get('position')),
                    labelHeight,
                    labelWidth;

                this.div.innerHTML = text;
                this.div.style.position = 'relative';
                // dynamically grab the label height/width in order to properly position it vertically/horizontally.
                labelHeight = $('div.map-marker-label').outerHeight();
                labelWidth = $('div.map-marker-label').outerWidth();
                this.div.style.left = (position.x - (labelWidth / 2))  + 'px';
                this.div.style.top = (position.y - markerSize.y - labelHeight -10) + 'px';

            }
        });

        var Marker = function(options){

            google.maps.Marker.apply(this, arguments);
            if (options.label) {
                this.MarkerLabel = new MarkerLabel({
                    map: this.map,
                    marker: this,
                    text: options.label
                });
                this.MarkerLabel.bindTo('position', this, 'position');
            }
        };

        Marker.prototype = $.extend(new google.maps.Marker(), {
            // If we're adding/removing the marker from the map, we need to do the same for the marker label overlay
            setMap: function(){
                google.maps.Marker.prototype.setMap.apply(this, arguments);
                if (this.MarkerLabel) {
                    this.MarkerLabel.setMap.apply(this.MarkerLabel, arguments);
                }
            }
        });


        function createMap( position ) {
            var map;

            var style = [
   				 {
							"featureType": "administrative",
							"elementType": "all",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"lightness": 33
								}
							]
						},
						{
							"featureType": "landscape",
							"elementType": "all",
							"stylers": [
								{
									"color": "#f2e5d4"
								}
							]
						},
						{
							"featureType": "poi.park",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#c5dac6"
								}
							]
						},
						{
							"featureType": "poi.park",
							"elementType": "labels",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"lightness": 20
								}
							]
						},
						{
							"featureType": "road",
							"elementType": "all",
							"stylers": [
								{
									"lightness": 20
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#c5c6c6"
								}
							]
						},
						{
							"featureType": "road.arterial",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#e4d7c6"
								}
							]
						},
						{
							"featureType": "road.local",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#fbfaf7"
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "all",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"color": "#acbcc9"
								}
							]
						}
					];

            var options = {
                zoom: parseInt( mapData.mapZoom, 10 ),
                center: position,
                scrollwheel: mapData.mapScroll,
                draggable: mapData.mapDraggable,
                mapTypeId: google.maps.MapTypeId[mapData.mapType]
            };

            map = new google.maps.Map(mapDiv[0], options);
            var marker;

            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

            if( mapData.mapStyle === 'flat' ) {
                map.setOptions({
                    styles: style
                });
            }

            if( mapData.marker === 'show' ) {
                var image = {
                    url: mapData.markerURL,
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(12, 50)
                };

                marker = new Marker({
                    label: mapData.label,
                    position: position,
                    icon:image,
                    map: map
                });

                google.maps.event.addListener(marker, 'click', toggleBounce);
            }
        }

        if( undefined !== mapData.address ) {
            // lookup address
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode( { 'address': mapData.address}, function(results, status) {
                if(status === google.maps.GeocoderStatus.OK) {
                    createMap( results[0].geometry.location );
                }
                else {
                    alert( 'Geocode was not successful for the following reason: ' + status );
                }
            });
        }
        else if( undefined !== mapData.lat && undefined !== mapData.lng ) {
            createMap( new google.maps.LatLng(mapData.lat, mapData.lng) );
        }
    });
});