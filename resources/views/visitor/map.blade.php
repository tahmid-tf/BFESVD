<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Map View</title>
    <link rel="stylesheet" href="{{ asset('map_and_list_view/css/user_home.css') }}"/>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
            integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Map links -->
    {{--    <link rel="stylesheet" href="./Leaflet-1.0.3/leaflet.css"/>--}}
    {{--    <link rel="stylesheet" href="./Leaflet.markercluster-1.0.5/MarkerCluster.css"/>--}}
    {{--    <script src="./Leaflet-1.0.3/leaflet.js"></script>--}}
    {{--    <script src="./Leaflet.markercluster-1.0.5/leaflet.markercluster.js"></script>--}}
    {{--    <script src="jquery-2.1.1.min.js"></script>--}}
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""
    />
    {{--    <link rel="stylesheet" href="style.css"/>--}}

</head>
<body>
<!-- ------------------------------------------------------------ first section ------------------------------------------------------------------  -->

{{-- -------------------- navbar -------------------- --}}

<x-public_navbar></x-public_navbar>

{{-- -------------------- navbar -------------------- --}}


<!-- ----------------------------------------------------------------------------------------------------------------------------- end - first section -->

<!-- -------------------------------------------------------- second section -------------------------------------------------------------------------- -->

<div class="container container-padding">
    <div class="view-nav">
        <div class="view-option">
            <a href="{{ route('visitor-list-view') }}">List View</a>
            <a href="{{ route('visitor-map-view') }}">Map View</a>
        </div>

        <a href="{{ route('excel.page') }}">
            <button style="border: none">Export</button>
        </a>

    </div>


    <div>
        <!-- ------------------------------------ Map Here -------------------------------- -->
        <div id="map"></div>
    </div>


    <!-- Map view scripts -->

    <script
        src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""
    ></script>

    {{--    <script src="{{ asset('map_and_list_view/app.js') }}"></script>--}}


    {{--  -------------------------------------------------------------------------------- map js file here -------------------------------------------------------------------------------------- --}}

    <script>

        let district_array_data = [];

        // --------------------- main frame ---------------------------

        var map = L.map("map").setView([23.7806207, 90.3492859], 7);

        const tileUrl = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";

        const attribution =
            "© OpenStreetMap contributors ♥ Make a Donation. Website and API terms";

        const tiles = L.tileLayer(tileUrl, {
            attribution,
        });

        tiles.addTo(map);

        // --------------------- main frame ---------------------------

        // ------------------- Leaf Icon  --------------------------------
        // var greenIcon = L.icon({
        //     iconUrl: "./map_and_list_view/images/leaf-red.png",
        //     // shadowUrl: "leaf-shadow.png",
        //
        //     iconSize: [35, 95], // size of the icon
        //     //shadowSize:   [50, 64], // size of the shadow
        //     iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        //     shadowAnchor: [4, 62], // the same for the shadow
        //     popupAnchor: [-3, -76], // point from which the popup should open relative to the iconAnchor
        // });


        // -------------------------------------------------------------------------- district array data ----------------------------------------------------

        axios.get('{{ route('map-json-file') }}').then(el => {

            let g2 = [];
            let all_district = [];


            let v = el.data;
            v.forEach(e => {
                let districts_in_json = JSON.parse(e.district);
                districts_in_json.forEach(dis_loop => {
                    g2.push(dis_loop);
                });
            })

            g2.forEach(aa => {
                all_district.push(aa.district_name);

            })


            axios.get('https://bdapis.herokuapp.com/api/v1.1/districts').then(el => {
                el.data.data.forEach(el => {

                    all_district.forEach(qq => {
                        if (el.district == qq) {

                            let filter = all_district.filter(x => x == qq).length;

                            let split_coordinates = el.coordinates.split(',');

                            // L.marker([split_coordinates[0], split_coordinates[1]], {icon: greenIcon})
                            //     .addTo(map)
                            //     .bindPopup(
                            //         `<h4>District: ${qq}</h4>No. of studies : ${filter}<br> <a>Refine for this search</a>`
                            //     );

                            L.marker([split_coordinates[0], split_coordinates[1]]).bindPopup(`<h4>District: ${qq}</h4>No. of studies : ${filter}`).addTo(map);

                        }
                    });


                });


            });


        });


        // -------------------------------------------------------------------------- district array data ----------------------------------------------------

    </script>


    {{--  ----------------------------------------------------------------------------------- map js file here ---------------------------------------------------------------------------------- --}}


</div>
</body>
</html>
