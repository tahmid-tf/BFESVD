<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bangladesh Forest Ecosystem Services Valuation</title>
    <link rel="stylesheet" href="{{ asset('assets_landing_page_v2/css/landing.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js"
        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- chart js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" />


    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- chart js end -->
</head>

<body>
    <!-- ------------------------------------------------------------ first section ------------------------------------------------------------------  -->

    <x-public_navbar></x-public_navbar>

    <!-- ----------------------------------------------------------------------------------------------------------------------------- end - first section -->

    <!-- -------------------------------------------------------------------- second section ------------------------------------------------------------- -->

    <section id="second_section" class="img-fluid">


        <x-navbar_before_title></x-navbar_before_title>

        <!-- ---------------------------- welcome ------------------------------ -->

        <div class="welcome_part">
            <h1 class="welcome_part_h1">
                Connecting People for a Better Forest Management
            </h1>
        </div>

        <div class="welcome_before_end">
            <!-- <img src="images/welcome_before_end.png" alt="" class="img-fluid" /> -->
            <div class="counter">
                <div class="right-counter">
                    <div class="counter-content">
                        <h3>Total Visitors</h3>
                        <h2>{{ \App\Visitor::countViewer()->visitor ?? 0 }}</h2>
                        {{-- <h2>152</h2> --}}
                    </div>
                </div>
                <div class="left-counter">
                    <div class="counter-content">
                        <h3>Total Downloads</h3>
                        <h2>{{ \App\Visitor::countViewer()->download ?? 0 }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- ----------------------------------------------------- end - welcome -->


        <!-- ---------------------------------------------------------------------------------------------------------------------------- end -  second section -->
    </section>

    <!-- ------------------------------------------------------------------- third section ---------------------------------------------------------------- -->

    <section id="third_section">
        <div>
            <div>
                <h3 class="statistic-title">Data Dashboard</h3>
                <div class="statistic-data">
                    <div class="statistic-content" id="app">
                        <div class="es-class">
                            <h4 v-on:click="analytics('provisioning')" style="cursor: pointer">Provisioning</h4>
                            <h4 style="cursor: pointer" v-on:click="analytics('regulating')">Regulating</h4>
                            <h4 style="cursor: pointer" v-on:click="analytics('supporting')">Supporting</h4>
                            <h4 style="cursor: pointer" v-on:click="analytics('cultural')">Cultural</h4>
                        </div>
                        <div class="es-class-content">
                            <div class="upper-class">
                                <h5>
                                    No of Reference <br /><br />
                                    <span id="reference">@{{ full_reference_array.length }}</span>
                                </h5>
                                <h5>
                                    No of District <br /><br />
                                    <span id="district">@{{ single_no_of_district.size }}</span>
                                </h5>
                            </div>
                            <div class="lower-class">
                                <h5>
                                    Forest Zone <br /><br />
                                    <span id="forest_zone">@{{ single_no_of_forest_zone.size }}</span>
                                </h5>
                                <h5>
                                    No of Division <br /><br />
                                    <span id="total_text">@{{ single_no_of_division.size }}</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="statistic-graph">
                        <!----------------------- graph start ------------->
                        <div>
                            <div class="bar-chart">
                                <p style="text-align: center" class="favourite-author">
                                    Forest Zone Statistics ( <span id="info"></span> )
                                </p>
                                <canvas id="myChart" style="height: 300px" class="bar-chart"></canvas>
                            </div>
                        </div>
                        <!----------------------- graph end  -------------->


                    </div>
                </div>
            </div>

        </div>
    </section>


    {{-- ------------------------------------------------------ analytics ----------------------------------------------------------------------------- --}}

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!',
                full_reference_array: [],
                no_of_district: [],
                no_of_forest_zone: [],
                single_no_of_forest_zone: [],
                total_site_area: 0,
                no_of_division: [],
                single_no_of_district: [],
                single_no_of_division: [],
                zone_analytics: []
            },
            methods: {

                analytics(result) {

                    let result_string = result;
                    document.querySelector("#info").innerText = result_string.charAt(0).toUpperCase() +
                        result_string.slice(1);

                    axios(window.location.href + "visitor/analytics/" + result + "/json").then(el => {

                        this.full_reference_array = [];
                        this.no_of_district = [];
                        this.no_of_forest_zone = [];
                        this.total_site_area = 0;
                        this.no_of_division = [];
                        this.single_no_of_district = [];
                        this.single_no_of_division = [];
                        this.single_no_of_forest_zone = [];
                        this.zone_analytics = [];

                        let initial_data = el.data.data;

                        if (initial_data.length > 0) {
                            initial_data.forEach(el => {

                                // --------------------- zone analytics ---------------------

                                let zone_data_array = JSON.parse(el.zone);
                                zone_data_array.forEach(el => {
                                    this.zone_analytics.push(el);
                                });

                                // --------------------- zone analytics ---------------------

                                // --------------- no of district --------------------------

                                let district = JSON.parse(el.district);
                                this.full_reference_array.push(el.full_reference);


                                district.forEach(el => {
                                    this.no_of_district.push(el);
                                });


                                // --------------- no of district --------------------------

                                // --------------- no of forest zone --------------------------

                                let zone = JSON.parse(el.zone);
                                zone.forEach(el => {
                                    this.no_of_forest_zone.push(zone);
                                });

                                // --------------- no of forest zone --------------------------

                                // --------------- total site area --------------------------

                                this.total_site_area += el.site_area;

                                // --------------- total site area --------------------------

                                // --------------- no of division ---------------------------

                                let division_json = JSON.parse(el.division);
                                // console.log(division_json);

                                division_json.forEach(el => {
                                    this.no_of_division.push(el);
                                });

                                // console.log(this.no_of_division);


                                // --------------- no of division ---------------------------

                            });
                        }


                        if (this.zone_analytics.length > 0) {

                            var ctx = document.getElementById("myChart").getContext("2d");
                            var chart = new Chart(ctx, {
                                // The type of chart we want to create
                                type: "bar",

                                // The data for our dataset
                                data: {
                                    labels: [
                                        "Sundarbans",
                                        "CHT hill forest",
                                        "Sylhet hill forest",
                                        "Coastal forest",
                                        "Sal forest",
                                    ],
                                    datasets: [{
                                        label: "",
                                        backgroundColor: "#243413",
                                        borderColor: "243413",
                                        data: [this.zone_analytics.filter(el => el ==
                                                'Sunderbans').length, this
                                            .zone_analytics.filter(el => el ==
                                                'CHT hill forest').length, this
                                            .zone_analytics.filter(el => el ==
                                                'Sylhet hill').length, this
                                            .zone_analytics.filter(el => el ==
                                                'Coastal forest').length, this
                                            .zone_analytics.filter(el => el ==
                                                'Sal forest').length
                                        ]
                                    }, ],
                                },

                                // Configuration options go here
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    events: [],
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                // Include a dollar sign in the ticks
                                                callback: function(value, index, values) {
                                                    return value;
                                                },
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                },
                            });

                        } else {
                            var ctx = document.getElementById("myChart").getContext("2d");
                            var chart = new Chart(ctx, {
                                // The type of chart we want to create
                                type: "bar",

                                // The data for our dataset
                                data: {
                                    labels: [
                                        "Sundarbans",
                                        "CHT hill forest",
                                        "Sylhet hill forest",
                                        "Coastal forest",
                                        "Sal forest",
                                    ],
                                    datasets: [{
                                        label: "",
                                        backgroundColor: "#243413",
                                        borderColor: "243413",
                                        data: [0, 0, 0, 0, 0],
                                    }, ],
                                },

                                // Configuration options go here
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    events: [],
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                // Include a dollar sign in the ticks
                                                callback: function(value, index, values) {
                                                    return value;
                                                },
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                },
                            });
                        }


                        // ------------------- district and division and forest zone calculate ---------------------

                        this.single_no_of_division = new Set(this.no_of_division);

                        let single_dis = [];

                        this.no_of_district.forEach(el => {

                            single_dis.push(el.district_name);
                        });

                        this.single_no_of_district = new Set(single_dis);


                        // -------------------------- forest zone length -----------------------------

                        let zone_single = [];

                        this.no_of_forest_zone.forEach(el => {
                            el.forEach(elem => {
                                zone_single.push(elem);
                            });
                        });

                        let zone_single_set = new Set(zone_single);

                        // ------------------------------------------------------------------------------------------------- test from here -----------------------------------------------------------------------------------


                        this.single_no_of_forest_zone = zone_single_set;


                        // -------------------------- forest zone length -----------------------------


                        // ------------------- district and division and forest zone calculate ---------------------


                    });

                }
            },
            mounted() {
                this.analytics("provisioning");
            }
        })
    </script>


    {{-- ------------------------------------------------------ analytics ----------------------------------------------------------------------------- --}}




    <!-- ----------------------------------------------------------------------------------------------------------------------------- end - third section  -->

    <!-- ------------------------------------------------------------------- forth section ---------------------------------------------------------------- -->

    <section id="forth_section">
        {{-- <h4 class="forth_section_header"></h4> --}}
        <div class="forth-section-first">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col-md-6">
                    <div class="forth-section-first__div">


                        @if (\App\Background::leftContent() != null)
                            <h4 class="forth-section-first__title">
                                {!! \App\Background::leftContent()->title ?? 'What is ESV?' !!}</h4>
                            <p class="forth-section-first__content" style="text-align: justify">
                                {!! \App\Background::leftContent()->content ??
                                    "The Compass program is assisting the Bangladesh Forest
                                                                                                                                                                                                                                                                                                                                                                                                                            Department (BFD) to formulate a forest ecosystem valuation (ESV)
                                                                                                                                                                                                                                                                                                                                                                                                                            framework. This framework development exercise is expected to
                                                                                                                                                                                                                                                                                                                                                                                                                            foster national capacity development and knowledge transfer
                                                                                                                                                                                                                                                                                                                                                                                                                            through learning by doing, workshops, and training to BFD and
                                                                                                                                                                                                                                                                                                                                                                                                                            relevant government officials, academicians, and other
                                                                                                                                                                                                                                                                                                                                                                                                                            stakeholders." !!}
                            </p>
                        @else
                            <h4 class="forth-section-first__title">About The Forest ESV Database</h4>
                            <p class="forth-section-first__content" style="text-align: justify">The Forest ESV
                                Database is
                                an open-access living document of the Bangladesh Forest Department to support
                                decision-making regarding sustainable forest governance, which consists of
                                information on
                                forest ecosystem services quantities and monetary values gathered from peer-reviewed
                                journal
                                articles, government publications, and various published project reports. This
                                module has
                                been developed with technical and financial support from USAID and US Forest
                                Serviceâ€™s
                                Community Partnerships to Strengthen Sustainable Development <a
                                    href="https://www.usfsbd.org/" target="_blank">(Compass)</a> Program.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ----------------------------------------------------------------------------------------------------------------------------- end -  forth section -->

    <!-- ------------------------------------------------------------------- fifth section ---------------------------------------------------------------- -->
    <br />
    <section id="forth_section">
        <div class="fifth-section-first">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col"></div>
                <div class="col-md-6">
                    <div class="forth-section-first__div">
                        <h4 class="forth-section-first__title">
                            {!! \App\Background::rightContent()->title ?? 'Database Use' !!}</h4>
                        <p class="forth-section-first__content" style="text-align: justify">
                            {!! \App\Background::rightContent()->content ??
                                'The Forest ESV Database is designed as a living document where new valuation information will be added through a rigorous review process. Voluntary contributions are welcome to enrich it. The summary statistics on the dashboard will change depending on new updates. The database should be used for non-commercial, research, and educational purposes to support sustainable forest governance and policymaking. Reports using information from the Forest ESV Database should acknowledge with a correct reference: Bangladesh Forest Department (2022). Forest Ecosystem Services Valuation Database technically implemented by US Forest Service' !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------------------------------------------------------------------------------------ end - fifth section -->

    <br>
    <!-- ------------------------------------------------------------------- forth section ---------------------------------------------------------------- -->

    <section id="forth_section">
        <div class="sixth-section-first">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col-md-6">
                    <div class="forth-section-first__div">
                        <h4 class="forth-section-first__title">Database Structure</h4>
                        <p class="forth-section-first__content" style="text-align: justify">
                            This database is structured following the internationally recognized. <a
                                href="http://teebweb.org/publications/other/teeb-valuation-database/"
                                target="_blank">The
                                Economics of Ecosystems and Biodiversity (TEEB) valuation database</a>, a.k.a.
                            <a href="https://www.esvd.info/" target="_blank">Ecosystem Services Valuation Database
                                (ESVD)</a>. The forest ecosystems are placed under different forest zones of
                            Bangladesh and
                            the services are categorized into four classes: provisioning, regulating, supporting,
                            and
                            cultural ecosystem services.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ----------------------------------------------------------------------------------------------------------------------------- end -  forth section -->


    <!-- ------------------------------------------------------------------- sixth section ---------------------------------------------------------------- -->

    <br />

    <x-public_footer></x-public_footer>

    <!-- ------------------------------------------------------------------------------------------------------------------------------ end - sixth section -->

    {{-- ---------------------------------------------- ajax code part -------------------------------------------------- --}}

    <script>
        {{-- ---------------- total visit ------------------ --}}

        axios.post('{{ route('visitor-counter') }}');

        {{-- ---------------- total visit ------------------ --}}
    </script>

    {{-- ---------------------------------------------- ajax code part -------------------------------------------------- --}}


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
