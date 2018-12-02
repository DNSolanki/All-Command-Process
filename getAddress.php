# get lat long by address
<input id="autocomplete" placeholder="Enter your address"
             onFocus="geolocate()" type="text"></input>

<script> 
    
     function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }
      
      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
        console.log(place.formatted_address);
        console.log(place.geometry.location.lat());
        console.log(place.geometry.location.lng());
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
      
   
    </script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnwZwVgjkb3spc9YbluPmfxQM8diUEclU&libraries=places&callback=initAutocomplete"></script>



# get Address by lat long 

if (!function_exists('getaddress')) {

    function getaddress($latitude, $longitude) {

        if (!empty($latitude) && !empty($longitude)) {
            //Send request and receive json data by address
            $geocodeFromLatLong = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyAo1TdJZL8HTLfRnosGH-C1e0VWEYs5g-8&latlng=' . trim($latitude) . ',' . trim($longitude) . '&sensor=false');
            $output = json_decode($geocodeFromLatLong);

            if (!empty($output->results[1])) {

                $status = $output->status;
                //Get address from json data
                $address = ($status == "OK") ? $output->results[1]->formatted_address : '';

                //Return address of the given latitude and longitude
                if (!empty($address)) {
                    return $address;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}