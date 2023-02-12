
<!DOCTYPE html>
<html lang="en">
<head>
	<base target="_top">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>GeoJSON tutorial - Leaflet</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

    <!-- <link rel="stylesheet" href="./leaflet.css"> -->
    <script src="<?=base_url()?>assets/map/leaflet.js"></script>

	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-container {
			height: 400px;
			width: 1200px;
			max-width: 100%;
			max-height: 100%;
		}
	</style>

	
</head>
<body>

<div id='map'></div>


<script>
  const map = L.map('map').setView([13.145058, 121.438080], 15);
  var marker = L.marker([13.145058, 121.438080]).addTo(map);
  var popup = marker.bindPopup('Municipal Agriculture Office');
  //popup.openPopup();
	// const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	// 	maxZoom: 18,
    
	// 	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	
	// }).addTo(map);

	// 	googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
	// 	maxZoom: 20,
	// 	subdomains:['mt0','mt1','mt2','mt3']
	// }).addTo(map);

	// 	googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
	//     maxZoom: 20,
	//     subdomains:['mt0','mt1','mt2','mt3']
	// }).addTo(map);

	marker.bindPopup("<b>Municipal Agriculture Office</b>").openPopup();
	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	var osm = L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"),
		st = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});
		sv = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});

	var baseMaps = {
		"OpenStreetMap": osm,
		"Satellite View": sv,
		"Street View": st
	};

	L.control.layers(baseMaps,null, {position: 'bottomleft'}).addTo(map);
</script>
</body>
</html>
