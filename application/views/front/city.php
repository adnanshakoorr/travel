<!DOCTYPE html>
<html>
  <head>
    <title>Place Autocomplete</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/city/city.css');?>" />
    <script src="<?= base_url('assets/city/city.js');?>"></script>
  </head>
  <body>
    <div class="pac-card" id="pac-card">
      <div>
        <div id="title">Autocomplete search</div>
        <div id="type-selector" class="pac-controls">
          <input
            type="radio"
            name="type"
            id="changetype-all"
            checked="checked"
          />
          <label for="changetype-all">All</label>

          <input type="radio" name="type" id="changetype-establishment" />
          <label for="changetype-establishment">establishment</label>

          <input type="radio" name="type" id="changetype-address" />
          <label for="changetype-address">address</label>

          <input type="radio" name="type" id="changetype-geocode" />
          <label for="changetype-geocode">geocode</label>

          <input type="radio" name="type" id="changetype-cities" />
          <label for="changetype-cities">(cities)</label>

          <input type="radio" name="type" id="changetype-regions" />
          <label for="changetype-regions">(regions)</label>
        </div>
        <br />
        <div id="strict-bounds-selector" class="pac-controls">
          <input type="checkbox" id="use-location-bias" value="" checked />
          <label for="use-location-bias">Bias to map viewport</label>

          <input type="checkbox" id="use-strict-bounds" value="" />
          <label for="use-strict-bounds">Strict bounds</label>
        </div>
      </div>
      <div id="pac-container">
        <input id="pac-input" type="text" placeholder="Enter a location" />
      </div>
    </div>
    <div id="map"></div>
    <div id="infowindow-content">
      <span id="place-name" class="title"></span><br />
      <span id="place-address"></span>
    </div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwKKza0T96mOX10KVkkNbajNVUiKe-VoA&callback=initMap&libraries=places&v=weekly"
      async
    ></script>
  </body>
</html>