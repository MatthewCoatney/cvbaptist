@extends ('layouts.master')

@section('title')
  Catheys Valley Baptist | Contact
@stop

@section('headscript')
<style>
  #map {
    height: 450px;
    width: 100%;
  }
  #content {

  z-index: 5000;
  padding: 5px;
  color: black;

}

</style>
@stop
@section('showcase')

  <div class="hero" class="row">
    <div class="large-12 medium-12 columns">

      <div id="map"></div>

      <script>
        function CenterControl(controlDiv, map) {

          // Set CSS for the control border.
          var controlUI = document.createElement('div');
          controlUI.classList = 'callout';

          controlUI.style.cursor = 'pointer';
          controlUI.style.marginBottom = '22px';
          controlUI.style.textAlign = 'center';
          controlUI.title = 'Click to recenter the map';
          //controlUI.innerHTML = document.getElementById('floating-panel').innerHTML;
          controlDiv.appendChild(controlUI);

          // Set CSS for the control interior.
          var controlText = document.createElement('div');
          controlText.style.color = 'rgb(25,25,25)';
          controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
          controlText.style.fontSize = '16px';
          controlText.style.lineHeight = '38px';
          controlText.style.paddingLeft = '5px';
          controlText.style.paddingRight = '5px';
          controlText.innerHTML = '<p>Get Directions Below</p>';
          controlUI.appendChild(controlText);

          // Setup the click event listeners: simply set the map to Chicago.
          controlUI.addEventListener('click', function() {
            map.setCenter(chicago);
          });

        }

        function initMap() {

          var directionsService = new google.maps.DirectionsService;
          var directionsDisplay = new google.maps.DirectionsRenderer;
          directionsDisplay.setPanel(document.getElementById('directionsPanel'));

          var cvalley = {
            lat: 37.405347,
            lng: -120.086485
          };
          var info = {
            lat: 42.1012343947164,
            lng: -141.66646077822702
          };
          dest = new google.maps.LatLng(37.405347, -120.086485);
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: cvalley
          });
          var marker = new google.maps.Marker({
            position: cvalley,
            map: map,
            title: 'Catheys Valley Baptist Church'
          });

          // Create the DIV to hold the control and call the CenterControl()
          // constructor passing in this DIV.
          //  var centerControlDiv = document.createElement('div');
          //  var centerControl = new CenterControl(centerControlDiv, map);

          //centerControlDiv.index = 1;
          //map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);

          var contentString = '<div id="content"><p>Catheys Valley Baptist Church<br />4565 Cornetts Ent Rd, Catheys Valley, CA 95306<br /><br />CTRL + Scroll to ZOOM &nbsp;&nbsp;<a href="#directions">Get Directions Below</a></p></div>';

          var infowindow = new google.maps.InfoWindow({
            content: contentString
          });

          infowindow.open(map, marker);
          marker.addListener('click', function() {
            infowindow.open(map, marker);
          });

          directionsDisplay.setMap(map);
          var onChangeHandler = function() {
            calculateAndDisplayRoute(directionsService, directionsDisplay);
          };
          document.getElementById('start').addEventListener('change', onChangeHandler);
          document.getElementById('end').addEventListener('change', onChangeHandler);
        }

        function calculateAndDisplayRoute(directionsService, directionsDisplay) {
          directionsService.route({
            origin: document.getElementById('start').value,
            destination: dest,
            travelMode: 'DRIVING'
          }, function(response, status) {
            if (status === 'OK') {
              directionsDisplay.setDirections(response);
            } else {
              window.alert('Directions request failed due to ' + status);
            }
          });



        }
      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTZ_3OslXcRCgJu7Qj2tCIj9BU5ZG9ZGs&callback=initMap">
      </script>

    </div>
  </div>
@stop

@section('section-a')
<section class="row about">

  <div class="medium-4 large-4 columns">
    <h2 class="text-center">Contact Us</h2>

    <form role="form" action={{route('send')}} method="post" class="callout">
        {{ csrf_field() }}
      <div class="columns large-6 medium-6">

        <label> Name
            <input name="name" type="text" placeholder="Name" required>
          </label>
        <label> Company
            <input name="company" type="text" placeholder="Company">
          </label>

      </div>
      <div class="columns large-6 medium-6">
        <label> Email
            <input name="email" type="text" placeholder="Email" required>
          </label>
        <label> Phone
            <input name="phone" type="text" placeholder="Phone" required>
          </label>

      </div>
      <div class="columns large-12 medium-12">
        <label> Message
            <textarea name="content" placeholder="Message" rows="3" required></textarea>
          </label>

        <button class="float-right button secondary" type="submit">Send</button>

      </div>
    </form>
  </div>
  <div class="medium-4 large-4 columns text-center">
    <br /><br />
    <h4>Catheys Valley Baptist Church</h4>
    <h6>4565 Cornetts Ent Rd, Catheys Valley, CA 95306<h6>
<div class="row">
<div class="medium-4 large-4 columns"><strong>209-742-7770</strong>
</div>
<div class="medium-4 large-4 columns"><strong>cvbc@sti.net</strong>
</div>
</div>



<hr>
<p class="lead">Have a concern or prayer request? Do you desire a visitation?
  Whatever your needs we'd love to hear from you! Fill out our form, give us a call or drop in for a visit. Office hours are 9am-5pm M-F</p>
  <hr>

</div>



    <div class="medium-4 large-4 columns">
      <h2 class="text-center"><a name="directions">Directions</a></h2>
      <div id="floating-panel" class="callout">
   <b>Start: </b>
   <select id="start">
     <option value="" disabled selected="selected">Select Starting City</option>
     <option value="bakersfield, ca">Bakersfield</option>
     <option value="fresno, ca">Fresno</option>
     <option value="sacramento, ca">Sacramento</option>
     <option value="san diego, ca">San Diego</option>
     <option value="san francisco, ca">San Francisco</option>
     <option value="san jose, ca">San Jose</option>
     <option value="santa cruz, ca">Santa Cruz</option>
     <option value="west point, ca">West Point</option>
     <option value="mariposa, ca">Mariposa</option>
     <option value="merced, ca">Merced</option>
     <option value="los angeles, ca">Los Angeles</option>
   </select>
   <b>End: </b>
   <select id="end">
     <option value="catheys valley, ca">Catheys Valley Baptist Church</option>

   </select>
   <div id="directionsPanel" style="width:100%;height 100%"></div>
   </div>

    </div>
  </section>

@stop

@section('section-b')
<h1>Building Families On The Word</h1>
<i class="fa fa-quote-left fa-3x" aria-hidden="true"></i> &nbsp;&nbsp;
<i>Except the Lord build the house, they labour in vain that build it: <br />except the Lord keep the city, the watchman waketh but in vain. &mdash;Psalm 127:1</i>

@stop

@section('section-c')
<div class="row">
  <div class="columns large-3">
    <i class="fa fa-3x fa-book" aria-hidden="true"></i>
    <h4>Worship</h4>
    <p>Join us Sundays at @10:00 am. <br /> Worship with us!</p>
  </div>
  <div class="columns large-3">
    <i class="fa fa-3x fa-seedling" aria-hidden="true"></i>
    <h4>Discipleship</h4>
    <p>Its our mission to build up the church. <br /> Get involved now!</p>
  </div>
  <div class="columns large-3">
    <i class="fa fa-3x fa-dove" aria-hidden="true"></i>
    <h4>Prayer</h4>
    <p>Join us Wednesdays @7:00 pm. <br /> Pray with us!</p>
  </div>
  <div class="columns large-3">
    <i class="fa fa-3x fa-user" aria-hidden="true"></i>
    <h4>Outreach</h4>
    <p>Request a call or visitation. <br /> Contact us now!</p>
  </div>
</div>
@stop
