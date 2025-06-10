<!DOCTYPE html>
<html lang="en">
<head>
        <title>Sistem Informasi Pertanahan</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

    </style>
</head>
<body>
        </h1>Peta Bidang Tanah</h1>
    <div id="map" style="width:100%; height:600px;px;"></div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" 
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" 
        crossorigin=""></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "lib/L.Geoserver.js" ></script>
    <script type="text/javascript">
        var map = L.map('map').setView([-7.560448, 110.643046], 14);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(map);
        
        var wmsLayer = L.Geoserver.wms("http://localhost:8080/geoserver/Kelompok_B2/wms", {
            layers:"Kelompok_B2:PolaRuang Sudimoro"});
            wmsLayer.addTo(map);

        var layerLegend = L.Geoserver.legend("http://localhost:8080/geoserver/Kelompok_B2/wms", {
            layers:"Legenda"});
            layerLegend.addTo(map);

    </script> 
</body>

</html>