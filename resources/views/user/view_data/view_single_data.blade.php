<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>View Data</title>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <link rel="stylesheet" href="{{ asset('css/user_home.css') }}"/>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js"
            integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
<!-- ------------------------------------------------------------ first section ------------------------------------------------------------------  -->

{{--<section id="first_section">--}}
{{--    <!-- ------------------------------------------ first content ---------------------------------------------------- -->--}}
{{--    <div class="content">--}}
{{--        <div class="row" style="margin: 0; padding: 0">--}}
{{--            <!-- -------------------------------------- icon --------------------------------------- -->--}}
{{--            <div class="col-3">--}}
{{--                <div class="logo" style="display: flex">--}}
{{--                    <a href="#">--}}
{{--                        <img--}}
{{--                            src="{{ asset('user_dashboard/images/govt_1.png') }}"--}}
{{--                            alt=""--}}
{{--                            class="icon-img-1"--}}
{{--                        />--}}
{{--                        <img--}}
{{--                            src="{{ asset('user_dashboard/images/govt_2.png') }}"--}}
{{--                            alt=""--}}
{{--                            class="icon-img-2"--}}
{{--                        />--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- ------------------------------------------------------------------------- end - icon -->--}}

{{--            <!-- --------------------------------------- title -------------------------------------- -->--}}

{{--            <div class="col-6">--}}
{{--                <p class="title">--}}
{{--                    <a href="#">Bangladesh Forest Ecosystem Services Valuation (ESV) Database</a>--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <!-- ------------------------------------------------------------------------- end - title -->--}}

{{--            <!-- --------------------------------------- logout -------------------------------------- -->--}}

{{--            <div class="col-3 logout">--}}
{{--                <div class="login_btn_div">--}}
{{--                    <button--}}
{{--                        class="login_btn"--}}
{{--                        data-toggle="modal"--}}
{{--                        data-target="#modalLogOut"--}}
{{--                    >--}}
{{--                        Logout--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--                <div class="login_btn_div">--}}
{{--                    <button--}}
{{--                        class="login_btn"--}}
{{--                        data-toggle="modal"--}}
{{--                        data-target="#modalLogOut"--}}
{{--                    >--}}
{{--                        Home--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <!-- logout Modal -->--}}
{{--            <div--}}
{{--                class="modal fade"--}}
{{--                id="modalLogOut"--}}
{{--                tabindex="-1"--}}
{{--                role="dialog"--}}
{{--                aria-labelledby="modalLogOut"--}}
{{--                aria-hidden="true"--}}
{{--            >--}}
{{--                <div class="modal-dialog" role="document">--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="modal-header">--}}
{{--                            <h5 class="modal-title" id="modalLogOut">Logout</h5>--}}
{{--                            <button--}}
{{--                                type="button"--}}
{{--                                class="close"--}}
{{--                                data-dismiss="modal"--}}
{{--                                aria-label="Close"--}}
{{--                            >--}}
{{--                                <span aria-hidden="true">&times;</span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <div class="modal-body">Are you sure want to Log Out?</div>--}}
{{--                        <div class="modal-footer">--}}
{{--                            <!-- <button--}}
{{--                              type="button"--}}
{{--                              class="btn btn-secondary"--}}
{{--                              data-dismiss="modal"--}}
{{--                            >--}}
{{--                              Close--}}
{{--                            </button> -->--}}

{{--                            <button type="button" class="btn btn-success">Yes</button>--}}
{{--                            <button--}}
{{--                                type="button"--}}
{{--                                class="btn btn-danger"--}}
{{--                                data-dismiss="modal"--}}
{{--                            >--}}
{{--                                No--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- end - logout modal -->--}}
{{--            </div>--}}

{{--            <!-- ------------------------------------------------------------------------ end - logout -->--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- ------------------------------------------------------------------------------------------ end - first content -->--}}
{{--</section>--}}

<!-- ----------------------------------------------------------------------------------------------------------------------------- end - first section -->

<!-- -------------------------------------------------------- second section -------------------------------------------------------------------------- -->

<div class="container container-padding">

    <div id="app">
        <div>
            <div class="data-list" style="margin: 0; padding: 0">
                <!-- ------------------------------------ View Data Start -------------------------------- -->
                <div class="table-title mt-4">
                    <div class="table-title-left">
                        <h3 class="ml-3">ESV ID - {{ $data }}</h3>
                    </div>
                    <div class="table-title-right mr-3 export_pdf_div">
                        <a class="p-2" href="#" v-on:click="exportPdf">Export to PDF</a>
                    </div>
                </div>
                <!-- start of Ecosystem Info section -->
                <div class="wrap-data">
                    <h4 class="title"> Ecosystem Info </h4>
                    <hr>
                    <div class="all-data">
                        <div class="left-data">
                            <div class="wrap">
                                <div class="field-name">
                                    Es Value Id :
                                </div>
                                <div class="field-value">
                                    {{ $data }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    FAO Biome :
                                </div>
                                <div class="field-value">
                                    @{{ ecoSystem.fao_biome }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Ecosystem :
                                </div>
                                <div class="field-value">
                                    @{{ ecoSystem.ecosystem ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Forest Zone :
                                </div>
                                <div class="field-value">
                                    @{{ ecoSystem.zone.join(" , ") }}
                                </div>
                            </div>
                        </div>
                        <div class="right-data">
                            {{--                            <div class="wrap">--}}
                            {{--                                <div class="field-name">--}}
                            {{--                                    Study Id :--}}
                            {{--                                </div>--}}
                            {{--                                <div class="field-value">--}}
                            {{--                                    10--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            <div class="wrap">
                                {{--                                <div class="field-name">--}}
                                {{--                                    TEEB Biome Code :--}}
                                {{--                                </div>--}}
                                {{--                                <div class="field-value">--}}
                                {{--                                    N/A--}}
                                {{--                                </div>--}}
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    TEEB ES Code :
                                </div>
                                <div class="field-value">
                                    @{{ ecoSystem.teeb }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Forest Zone Text :
                                </div>
                                <div class="field-value">
                                    @{{ ecoSystem.zone_text }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of Ecosystem Info section -->

                <!-- start of Es and Sub ES section -->
                <div class="wrap-data">
                    <h4 class="title"> ES and SubES Info </h4>
                    <hr>
                    <!-- table start here -->
                    <table style="width:100%">
                        <tr>
                            <th>ES Class</th>
                            <th>ES Name</th>
                            <th>Sub ES Name</th>
                            <th>Sub ES Quantity</th>
                            <th>Sub ES Quantity Unit</th>
                            <th>Sub ES Value</th>
                            <th>Sub ES Value Unit</th>
                            <th>Sub ES Valuation Method</th>
                        </tr>
                        <!-- loop start here -->
                        <tr v-for="(item,index) in Es.es_bundle" :key="item.subes_item">
                            <td>@{{ Es.es_class }}</td>
                            <td>@{{ item.subes_item }}</td>
                            <td>@{{ item.subes_name }}</td>
                            <td>@{{ item.subes_quantity }}</td>
                            <td>
                                @{{ item.subes_quantity_unit }}
                            </td>
                            <td>@{{ item.subes_value }}</td>
                            <td>@{{ item.subes_value_unit }}</td>
                            <td>@{{ item.subes_validation }}</td>
                        </tr>
                        <!-- loop end here -->
                    </table>
                    <!-- table end here -->
                    <!-- data start here -->
                    <div class="all-data">
                        <div class="left-data">

                            <div class="wrap">
                                <div class="field-name">
                                    ES All Text :
                                </div>
                                <div class="field-value">
                                    @{{ Es.es_text ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Teeb Sub ES Code :
                                </div>
                                <div class="field-value">
                                    @{{ Es.teeb ?? 'N/A' }}
                                </div>
                            </div>
                        </div>

                        <div class="right-data">
                            <div class="wrap">
                                <div class="field-name">
                                    Sub ES All Text :
                                </div>
                                <div class="field-value">
                                    @{{ Es.sub_es_text ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    IUCN Function :
                                </div>
                                <div class="field-value">
                                    @{{ Es.iucn ?? 'N/A' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of Es and Sub ES section -->

                <!-- start of Location Info section -->
                <div class="wrap-data">
                    <h4 class="title"> Location Info </h4>
                    <hr>
                    <div class="all-data">
                        <div class="left-data">
                            <div class="wrap">
                                <div class="field-name">
                                    Div Name :
                                </div>
                                <div class="field-value">
                                    @{{ Study.division.length == 0 ? 'N/A' : Study.division.join(" , ") }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    District Name :
                                </div>
                                <div class="field-value">
                                    @{{ Study.district_name.join(" , ") }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    District Code :
                                </div>
                                <div class="field-value">
                                    @{{ Study.district_code.join(" , ") }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Site Scale :
                                </div>
                                <div class="field-value">
                                    @{{ Study.site_scale.split('_').join(' ') ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    TEEB Scale Code :
                                </div>
                                <div class="field-value">
                                    @{{ Study.teeb  ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Location Name :
                                </div>
                                <div class="field-value">
                                    @{{ Study.location_name ?? 'N/A'}}

                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Legal Status :
                                </div>
                                <div class="field-value">
                                    @{{ Study.legal_status.split('_').join(' ') ?? 'N/A' }}
                                </div>
                            </div>

                        </div>
                        <div class="right-data">
                            <div class="wrap">
                                <div class="field-name">
                                    Site Area :
                                </div>
                                <div class="field-value">
                                    @{{ Study.site_area ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Site Area HA :
                                </div>
                                <div class="field-value">
                                    @{{ Study.site_ha  ?? 'N/A' }}

                                </div>
                            </div>

                            {{--                            <div class="wrap">--}}
                            {{--                                <div class="field-name">--}}
                            {{--                                    Site Length KM :--}}
                            {{--                                </div>--}}
                            {{--                                <div class="field-value">--}}
                            {{--                                    3.4--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            <div class="wrap">
                                <div class="field-name">
                                    Site Condition Text :
                                </div>
                                <div class="field-value">
                                    @{{ Study.site_condition_text ?? 'N/A' }}

                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Site Condition :
                                </div>
                                <div class="field-value">
                                    @{{ Study.site_condition.split('_').join(' ') ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Latitude :
                                </div>
                                <div class="field-value">
                                    @{{ Study.latitude ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Longitude :
                                </div>
                                <div class="field-value">
                                    @{{ Study.longitude ?? 'N/A' }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of Location Info section -->

                <!-- start of Valuation Info section -->
                <div class="wrap-data">
                    <h4 class="title"> Valuation Info </h4>
                    <hr>
                    <div class="all-data">
                        <div class="left-data">
                            <div class="wrap">
                                <div class="field-name">
                                    Valuation Method :
                                </div>
                                <div class="field-value">
                                    @{{ Valuation.valuation_method.join(" , ") }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Valuation Measured Text :
                                </div>
                                <div class="field-value">
                                    @{{ Valuation.valuation_measured_text ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Value Original :
                                </div>
                                <div class="field-value">
                                    @{{ Valuation.value_original ?? 'N/A' }}

                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Value Total :
                                </div>
                                <div class="field-value">
                                    @{{ Valuation.value_total ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Value Currency :
                                </div>
                                <div class="field-value">
                                    @{{ Valuation.value_currency ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Value Year :
                                </div>
                                <div class="field-value">
                                    @{{ Valuation.value_year ?? 'N/A' }}
                                </div>
                            </div>

                        </div>
                        <div class="right-data">
                            <div class="wrap">
                                <div class="field-name">
                                    Temporal Unit :
                                </div>
                                <div class="field-value">
                                    @{{ Valuation.temporal_unit ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Beneficiary Unit :
                                </div>
                                <div class="field-value">
                                    @{{ Valuation.beneficial_unit.join(" , ") }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Beneficiary Number :
                                </div>
                                <div class="field-value">
                                    @{{ Valuation.beneficial_number ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Beneficiary Text :
                                </div>
                                <div class="field-value">
                                    @{{ Valuation.beneficial_text ?? 'N/A' }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of Valuation Info section -->

                <!-- start of Reference Info section -->
                <div class="wrap-data">
                    <h4 class="title"> Reference Info </h4>
                    <hr>
                    <div class="all-data">
                        <div class="left-data">
                            <div class="wrap">
                                <div class="field-name">
                                    Title :
                                </div>
                                <div class="field-value">
                                    @{{ Reference.title ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Authors :
                                </div>
                                <div class="field-value">
                                    @{{ Reference.author ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Year Publication :
                                </div>
                                <div class="field-value">
                                    @{{ Reference.year_publication ?? 'N/A' }}
                                </div>
                            </div>
                        </div>
                        <div class="right-data">
                            <div class="wrap">
                                <div class="field-name">
                                    Full Reference :
                                </div>
                                <div class="field-value">
                                    @{{ Reference.full_reference ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Study Link :
                                </div>
                                <div class="field-value">
                                    <a :href="Reference.study_link" target="_blank">@{{ Reference.study_link ?? 'N/A' }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of Reference Info section -->

                <!-- start of Data Entry and QC Info section -->
                <div class="wrap-data">
                    <h4 class="title"> Data Entry and QC Info </h4>
                    <hr>
                    <div class="all-data">
                        <div class="left-data">
                            <div class="wrap">
                                <div class="field-name">
                                    Data Entered By :
                                </div>
                                <div class="field-value">
                                    @{{ Data.data_entered_by ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Data Entered Date :
                                </div>
                                <div class="field-value">
                                    @{{ Data.data_entered_date ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Reviewed By :
                                </div>
                                <div class="field-value">
                                    @{{ Data.reviewer_name ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="wrap">
                                <div class="field-name">
                                    Reviewed Date :
                                </div>
                                <div class="field-value">
                                    @{{ Data.reviewer_date ?? 'N/A' }}
                                </div>
                            </div>
                        </div>
                        <div class="right-data">
                            <div class="wrap">
                                <div class="field-name">
                                    Notes :
                                </div>
                                <div class="field-value">
                                    @{{ Data.notes ?? 'N/A' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of Data Entry and QC Info section -->

                <div class="buttons">
                    <div class="back-button">
                        @if(auth()->user() != null)
                        <a href="{{  route('back-track') }}">
                            <button class="btn btn-success">Back</button>
                        </a>

                        @else

                            <a href="{{  route('visitor-list-view') }}">
                                <button class="btn btn-success">Back</button>
                            </a>
                        @endif
                    </div>
                    <!-- <div class="delete-button">
                      <button class="btn btn-danger">Delete</button>
                    </div> -->
                </div>

                <!-- View Data end here -->
            </div>

        </div>
    </div>


</body>


<script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
></script>
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
></script>

<!-- ------------------------------ ajax call --------------------------------------- -->



<script>
    var app = new Vue({
        el: '#app',
        data: {
            ecoSystem: {
                fao_biome: "N/A",
                ecosystem: "N/A",
                zone: [],
                teeb: 'N/A',
                zone_text: 'N/A',
            },
            Es: {
                es_bundle: [],
                es_class: 'N/A',
                es_text: 'N/A',
                sub_es_text: 'N/A',
                teeb: 'N/A',
                iucn: 'N/A',
            },
            Study: {
                division: [],
                district_name: [],
                district_code: [],
                site_scale: '',
                teeb: '',
                location_name: '',
                legal_status: '',
                site_area: '',
                site_ha: '',
                site_condition: '',
                site_condition_text: '',
                latitude: '',
                longitude: ''
            },
            Valuation: {
                valuation_method: [],
                valuation_measured_text: '',
                value_original : '',
                value_total : '',
                value_currency: '',
                value_year: '',
                temporal_unit : '',
                beneficial_unit : [],
                beneficial_number: '',
                beneficial_text: ''
            },
            Reference : {
                title : '',
                author : '',
                year_publication : '',
                full_reference : '',
                study_link : ''
            },
            Data : {
                data_entered_by: '',
                data_entered_date: '',
                reviewer_name : '',
                reviewer_date : '',
                notes: ''
            }
        },
        methods: {
            exportPdf(){

                {{-- ---------------- total download ------------------ --}}

                axios.post('{{route('download-counter')}}');

                {{-- ---------------- total download ------------------ --}}

                document.querySelector('.export_pdf_div').style.display = "none";
                window.print();
            }
        },
        mounted() {


            axios.get("{{ route('get-user-data-json', $data ) }}").then(el => {


                // console.log(el.data.data_format);

                // ------------------- ecosystem -------------------------

                el.data.ecosystem.fao_biome == null ? this.ecoSystem.fao_biome = "N/A" : this.ecoSystem.fao_biome = el.data.ecosystem.fao_biome;
                el.data.ecosystem.ecosystem == null ? this.ecoSystem.ecosystem = "N/A" : this.ecoSystem.ecosystem = el.data.ecosystem.ecosystem;
                // el.data.ecosystem.zone == null ? this.ecoSystem.zone = "N/A" : this.ecoSystem.zone = JSON.parse(el.data.ecosystem.zone);

                if(el.data.ecosystem.zone == null){
                    this.ecoSystem.zone = "N/A"
                }else {
                    let zone_text_data = JSON.parse(el.data.ecosystem.zone);
                    zone_text_data.forEach(el => {
                        if (el == "Sunderbans"){
                            this.ecoSystem.zone.push("Sundarbans");
                        }else {
                            this.ecoSystem.zone.push(el);
                        }
                    });
                }

                // console.log(el.data.ecosystem.others);

                if (el.data.ecosystem.others != null){
                    this.ecoSystem.zone.push(el.data.ecosystem.others);
                }

                el.data.ecosystem.teeb == null ? this.ecoSystem.teeb = "N/A" : this.ecoSystem.teeb = el.data.ecosystem.teeb;
                el.data.ecosystem.zone_text == null ? this.ecoSystem.zone_text = "N/A" : this.ecoSystem.zone_text = el.data.ecosystem.zone_text;

                // ------------------- ecosystem -------------------------

                // ------------------- es -------------------------

                el.data.es.es_bundle == null ? this.Es.es_bundle = [] : this.Es.es_bundle = JSON.parse(el.data.es.es_bundle);
                this.Es.es_class = el.data.es.es_class;
                this.Es.es_text = el.data.es.es_text;
                this.Es.sub_es_text = el.data.es.sub_es_text;
                this.Es.teeb = el.data.es.teeb;
                this.Es.iucn = el.data.es.iucn;

                // ------------------- es -------------------------

                // ------------------- study -------------------------

                this.Study.division = JSON.parse(el.data.study.division);
                let dis = JSON.parse(el.data.study.district)
                for (let i = 0; i < dis.length; i++) {
                    this.Study.district_name.push(dis[i].district_name);
                    this.Study.district_code.push(dis[i].district_code);
                }

                this.Study.site_scale = el.data.study.site_scale+'_';
                this.Study.teeb = el.data.study.teeb;
                this.Study.location_name = el.data.study.location_name;
                this.Study.legal_status = el.data.study.legal_status+'_';
                this.Study.site_area = el.data.study.site_area;
                this.Study.site_ha = el.data.study.site_ha;
                this.Study.site_condition = el.data.study.site_condition+'_';
                this.Study.site_condition_text = el.data.study.site_condition_text;
                this.Study.latitude = el.data.study.latitude;
                this.Study.longitude = el.data.study.longitude;



                // ------------------- study -------------------------

                // ------------------- valuation -------------------------

                this.Valuation.valuation_method = JSON.parse(el.data.valuation.valuation_method);
                this.Valuation.valuation_measured_text = el.data.valuation.valuation_measured_text;
                this.Valuation.value_original = el.data.valuation.value_original;
                this.Valuation.value_total = el.data.valuation.value_total;
                this.Valuation.value_currency = el.data.valuation.value_currency;
                this.Valuation.value_year = el.data.valuation.value_year;
                this.Valuation.temporal_unit = el.data.valuation.temporal_unit;
                this.Valuation.beneficial_unit = JSON.parse(el.data.valuation.beneficial_unit);
                this.Valuation.beneficial_number = el.data.valuation.beneficial_number;
                this.Valuation.beneficial_text = el.data.valuation.beneficial_text;

                if (el.data.valuation.valuation_other_1 != null){
                    this.Valuation.valuation_method.push(el.data.valuation.valuation_other_1);
                }

                if(el.data.valuation.valuation_other_2 != null){
                    this.Valuation.valuation_method.push(el.data.valuation.valuation_other_2);
                }



                // ------------------- valuation -------------------------

                // ------------------- reference -------------------------

                this.Reference.title = el.data.bibliographic.title;
                this.Reference.author = el.data.bibliographic.author;
                this.Reference.year_publication = el.data.bibliographic.year_publication;
                this.Reference.full_reference = el.data.bibliographic.full_reference;
                this.Reference.study_link = el.data.bibliographic.study_link;

                // ------------------- reference -------------------------

                // ------------------- data ------------------------------

                this.Data.data_entered_by = el.data.data_format.data_entered_by;
                this.Data.data_entered_date = new Date(el.data.data_format.created_at).toISOString().slice(0, 10);
                this.Data.reviewer_name = el.data.data_format.reviewer_name;
                this.Data.reviewer_date = new Date(el.data.data_format.reviewer_date).toISOString().slice(0, 10);
                this.Data.notes = el.data.data_format.notes;

                // console.log(new Date(el.data.data_format.created_at));

                // ------------------- data ------------------------------


            });
        }
    })
</script>

<!-- ------------------------------ ajax call --------------------------------------- -->

</html>
