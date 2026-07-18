<?php
require_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps con PHP</title>

    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }

        #map {
            width: 100%;
            height: 500px;
            border: 1px solid #CCC;
        }

        input {

            width: 300px;
            padding: 8px;
            margin: 5px;

        }
    </style>

</head>

<body>
    <h2>Google Maps + PHP</h2>
    <p>Haz click sobre cualquier punto del Mapa</p>
    <label>Latitud</label>
    <input type="text" id="latitud" readonly><br>

    <label>Longitud</label>
    <input type="text" id="longitud" readonly><br>
    <div id="map"></div>
    <div id="map"></div>

    <script>

        let mapa;
        let marcador;

        function iniciarMapa() {

            const peru = {
                lat: -12.046374,
                lng: -77.042793
            };

            mapa = new google.maps.Map(document.getElementById("map"), {
                zoom: 13,
                center: peru
            });

            marcador = new google.maps.Marker({
                position: peru,
                map: mapa
            });

            mapa.addListener("click", function (event) {

                document.getElementById("latitud").value = event.latLng.lat();
                document.getElementById("longitud").value = event.latLng.lng();

                marcador.setPosition(event.latLng);

            });

        }

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAPS_API_KEY; ?>&callback=iniciarMapa"
        async defer>
        </script>
</body>

</html>