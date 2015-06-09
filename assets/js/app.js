
var cleanify = cleanify || {

    initializeMap : function( latitude, longitude ) {
        var myLatlng   = new google.maps.LatLng( latitude, longitude ),
            mapOptions = {
                zoom: 14,
                center: myLatlng
            },
            map        = new google.maps.Map( document.getElementById( 'map-canvas' ), mapOptions ),
            marker     = new google.maps.Marker({
                position: myLatlng,
                map: map
            });
    },

    updateLocation : function() {
        var street      = $('#street').val(),
            city        = $('#city').val(),
            state       = $('#state').val(),
            zip         = $('#zip').val(),
            fullAddress = '';

        fullAddress = street + ' ' + city + ' ' + state + ' ' + zip;

        $.ajax( {
            url     : "http://maps.googleapis.com/maps/api/geocode/json?address=" + fullAddress + "&sensor=false",
            type    : "POST",
            success : function( response ){
                var lat = response.results[0].geometry.location.lat,
                    lng = response.results[0].geometry.location.lng;

                cleanify.initializeMap( lat, lng );
            }
        } );
    },

    // on submit of order form
    placeOrder : function() {
        alert('Thank you for your order. We\'ll see you soon.');
    }
}

$(document).ready( function() {

    // Hard code initial map location. future improvement: use geolocation
    google.maps.event.addDomListener( window, 'load', cleanify.initializeMap( '37.7957395', '-122.39331820000001' ) );

    // Make extras sortable
    $( "#sortable1, #sortable2" ).sortable( {
        connectWith: ".connectedSortable",
        stop: function( event, ui ) {
            var total = 100;
            
            // Calculate price of extras
            $.each( $( '#sortable1 li' ), function() {
                var price = parseInt( $(this).attr( 'data-price' ) );
                
                total = total + price;
            })
            // Update the price
            $( '#total' ).text('$' + total.toFixed(2) );
        }
    } ).disableSelection();

} );
