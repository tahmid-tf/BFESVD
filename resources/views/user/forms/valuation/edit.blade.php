<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}">
    <title>Valuation Information</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js"
            integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

{{-- --------------------------------- navbar ------------------------------------ --}}

<x-navbar></x-navbar>

{{-- --------------------------------- navbar ------------------------------------ --}}

<div id="app">
    <div>
        <section class="container">
            <h2 style="text-align: center; margin-bottom: 20px">Valuation</h2>
            <form v-on:submit.prevent="submitData">

                <!-- valuation Method start -->
                <label style="font-weight: 600">Valuation Method
                    <span class="popup" onclick="myFunction()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup">Select appropriate methods. Multiple selection possible.</span>
            </span>
                </label>
                <br>

                <span class="forest-zone"
                      style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="valuationMethod" value="Choice Modelling" v-model="valuation_method"> Choice Modelling </span>

                <span
                    style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="valuationMethod" value="Contingent Valuation" v-model="valuation_method"> Contingent Valuation </span>

                <span
                    style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="valuationMethod" value="Damage Cost Avoided" v-model="valuation_method"> Damage Cost Avoided </span>

                <span class="forest-zone"
                      style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="valuationMethod" value="Defensive Expenditure" v-model="valuation_method"> Defensive Expenditure </span>

                <span
                    style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="valuationMethod" value="Group Valuation" v-model="valuation_method"> Group Valuation </span>

                <span
                    style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="valuationMethod" value="Hedonic Pricing" v-model="valuation_method"> Hedonic Pricing </span>

                <span
                    style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="valuationMethod" value="Input-Output Modelling" v-model="valuation_method"> Input-Output Modelling </span>

                <span
                    style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="valuationMethod" value="Market Price" v-model="valuation_method"> Market Price </span>

                <span class="forest-zone"
                      style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="valuationMethod" value="Replacement Cost" v-model="valuation_method"> Replacement Cost  </span>

                <span class="forest-zone"
                      style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="valuationMethod" value="Restoration Cost" v-model="valuation_method"> Restoration Cost </span>

                <span class="forest-zone"
                      style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="valuationMethod" value="Travel Cost" v-model="valuation_method"> Travel Cost  </span>

                <span class="forest-zone"
                      style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="valuationMethod" value="Value Transfer" v-model="valuation_method"> Value Transfer  </span><br>

                <input type="text" placeholder="Others" name="valuationMethod" style="margin: 8px 0 0 0;"
                       v-model="valuation_other_1">
                <input type="text" placeholder="Others" name="valuationMethod" style="margin: 8px 0 0 0;"
                       v-model="valuation_other_2">
                <br> <br>
                <!-- valuation Method end -->

                <!-- Value Measured Text -->
                <label style="font-weight: 600">Value Measured Text
                    <span class="popup" onclick="myFunction2()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup2">Text description of the change in ecosystem service, extent of ecosystem,
                  or change in condition that is measured in the study, e.g., the total value of the recreational service,
                  value of timber extracted by local people of the Rangamati district, average annual willingness to pay for
                  storm protection, total monetary loss associated with the cyclone. You may directly copy and paste from the study.</span>
            </span>
                </label>
                <br>
                <input type="" name="" v-model="valuation_measured_text"> <br>

                <!-- Value Original Text -->
                <label style="font-weight: 600">Value Original
                    <span class="popup" onclick="myFunction14()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup14">The monetary value as reported in study (in the reported currency,
                  spatial unit, temporal unit, e.g., BDT 600 per ha per year; 20 USD/km2/month). You may directly copy and paste from the study. </span>
            </span>
                </label>
                <br>
                <input type="" name="" v-model="value_original"> <br>

                <!-- Value Total -->
                <label style="font-weight: 600">Value Total
                    <span class="popup" onclick="myFunction3()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup3">The total monetary value of the ES Class (e.g. provisioning services)
                  as reported in the study in numeric form. Sum up individual SubES Values (e.g. meat, fodder) to get the
                  total number if total ES Class value is not mentioned in the study. </span>
            </span>
                </label>
                <br>
                <input type="" name="" v-model="value_total"> <br>

                <!-- Value Currency -->
                <label style="font-weight: 600">Value Currency
                    <span class="popup" onclick="myFunction4()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup4">ISO currency code (in most cases, it will be BDT or USD).  <a
                      href="{{ route('visitor.currency') }}" target="_blank"> Value Currency</a></span>
            </span>
                </label>
                <br>
                <input type="" name="" v-model="value_currency"> <br>

                <!-- Value Year -->
                <label style="font-weight: 600">Value Year
                    <span class="popup" onclick="myFunction5()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup5">The year in which the value was estimated. This is generally earlier
                  than the year of publication and indicated by the year in which data underlying the valuation was collected.
                  If the year of data collection is not available, assume that it is two years before the year of publication.</span>
            </span>
                </label>
                <br>
                <input type="" name="" v-model="value_year"> <br>

                <!-- Spatial Unit -->
                <label style="font-weight: 600">Spatial Unit
                    <span class="popup" onclick="myFunction6()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup6">The spatial unit in which the value is reported (e.g. hectare, km2,
                  acre, total area, meter, kilometer, mile, total length). It is important to record whether the reported
                  value is per unit area (e.g. BDT/ha) or for the total area of the ecosystem.</span>
            </span>
                </label>
                <br>
                <input type="" name="" v-model="spatial_unit"> <br>

                <!-- Temporal Unit -->
                <label style="font-weight: 600">Temporal Unit
                    <span class="popup" onclick="myFunction7()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup7">The temporal unit for which the value observation is reported (e.g. visit, day, month, year).</span>
            </span>
                </label>
                <br>
                <input type="" name="" v-model="temporal_unit"> <br>

                <!-- Beneficiary Unit -->
                <label style="font-weight: 600">Beneficiary Unit
                    <span class="popup" onclick="myFunction10()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup10">The beneficiary unit name for which the value is reported (e.g. visitor, person, household, or total number of beneficiaries). </span>
            </span>
                </label>
                <br>
                <span class="forest-zone"
                      style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="beneficiaryUnit" value="Person" v-model="beneficial_unit"> Person </span>
                <span
                    style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="beneficiaryUnit" value="Household" v-model="beneficial_unit"> Household </span>
                <span
                    style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="beneficiaryUnit" value="Total_Number" v-model="beneficial_unit"> Total Number </span>
                <br>
                <input type="text" placeholder="Others" name="beneficiaryUnit" style="margin: 8px 0 0 0;"
                       v-model="beneficial_other_1">
                <input type="text" placeholder="Others" name="beneficiaryUnit" style="margin: 8px 0 0 0;"
                       v-model="beneficial_other_2">
                <br> <br>

                <!-- Beneficiary Number -->
                <label style="font-weight: 600">Beneficiary Number
                    <span class="popup" onclick="myFunction11()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup11">The number of beneficiaries that benefit from the ecosystem service.
                  This might be reported as the number of visitors, population, or number of households over which a value
                  estimate is extrapolated to obtain a total value of the service. This is NOT the sample size or number of
                  beneficiaries surveyed.</span>
            </span>
                </label>
                <br>
                <input type="" name="" v-model="beneficial_number"><br>

                <!-- Beneficiary Text -->
                <label style="font-weight: 600">Beneficiary Text
                    <span class="popup" onclick="myFunction12()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup12">Text description of the type of beneficiary of the service
                  (e.g. visitors, residents, non-users, tourists etc.). You may directly copy and paste from the study. </span>
            </span>
                </label>
                <br>
                <input type="" name="" v-model="beneficial_text"> <br>

                <label
                >Comment From Reviewer
                    <span class="popup" onclick="myFunction140()">
                            <i class="fas fa-info-circle"></i>
                            <span class="popuptext" id="myPopup140"
                            >Add instruction to edit the form accordingly.</span
                            >
                          </span>
                </label><br>


                <textarea v-model="comment" style="width: 50%"
                          @if(auth()->user()->role == "user") readonly @endif></textarea><br/><br/>


                <div class="nextButton" style="text-align: left">
                    <button class="btn btn-success" type="submit">Next</button>
                </div>

            </form>
        </section>

    </div>
</div>


{{-- -------------------------- ajax call ------------------------------ --}}

<script>
    var app = new Vue({
        el: '#app',
        data: {
            es_value_id: '{{ session('tracker') }}',
            valuation_method: [],
            valuation_other_1: '',
            valuation_other_2: '',
            valuation_measured_text: '',
            value_original: '',
            value_total: '',
            value_currency: '',
            value_year: '',
            spatial_unit: '',
            temporal_unit: '',
            beneficial_unit: [],
            beneficial_other_1: '',
            beneficial_other_2: '',
            beneficial_number: '',
            beneficial_text: '',
            comment: '',

        },
        methods: {
            submitData() {
                const formData = new FormData();
                formData.set("es_value_id", this.es_value_id);
                formData.set("valuation_method", JSON.stringify(this.valuation_method));
                formData.set("valuation_other_1", this.valuation_other_1);
                formData.set("valuation_other_2", this.valuation_other_2);
                formData.set("valuation_measured_text", this.valuation_measured_text);
                formData.set("value_original", this.value_original);
                formData.set("value_total", this.value_total);
                formData.set("value_currency", this.value_currency);
                formData.set("value_year", this.value_year);
                formData.set("spatial_unit", this.spatial_unit);
                formData.set("temporal_unit", this.temporal_unit);
                formData.set("beneficial_unit", JSON.stringify(this.beneficial_unit));
                formData.set("beneficial_other_1", this.beneficial_other_1);
                formData.set("beneficial_other_2", this.beneficial_other_2);
                formData.set("beneficial_number", this.beneficial_number);
                formData.set("beneficial_text", this.beneficial_text);
                formData.set("comment", this.comment);
                formData.append("_method", "PUT");


                axios.post('{{ route('valuation.update', session('tracker')) }}', formData).then(el => {
                    if (el.status == 200) {
                        if ('{{auth()->user()->role == 'user'}}') {
                            if("{{ \App\Bibilographic::where('es_value_id','=',session('tracker'))->orderBy('id', 'desc')->count() > 0 }}"){
                                window.location.href = "{{ route('bibilographic.edit',session('tracker')) }}";
                            }else{
                                window.location.href = "{{ route('bibilographic.index') }}";
                            }
                        }else {
                            window.location.href = "{{ route('bibilographic.edit',session('tracker')) }}";
                        }
                    }
                });
            }
        }, mounted() {
            axios.get("{{ route('get-user-data-json', session('tracker') ) }}").then(el => {
                console.log(el.data.valuation);

                this.valuation_method = JSON.parse(el.data.valuation.valuation_method);
                // this.beneficial_other_1 = el.data.valuation.beneficial_other_1;
                // this.beneficial_other_2 = el.data.valuation.beneficial_other_2;
                this.beneficial_unit = JSON.parse(el.data.valuation.beneficial_unit);
                // this.beneficial_text = el.data.valuation.beneficial_text;
                // this.spatial_unit = el.data.valuation.spatial_unit;
                // this.temporal_unit = el.data.valuation.temporal_unit;
                // this.valuation_measured_text = el.data.valuation.valuation_measured_text;
                // this.valuation_other_1 = el.data.valuation.valuation_other_1;
                // this.valuation_other_2 = el.data.valuation.valuation_other_2;
                // this.value_currency = el.data.valuation.value_currency;
                // this.value_original = el.data.valuation.value_original;
                // this.value_total = el.data.valuation.value_total;
                // this.value_year = el.data.valuation.value_year;
                // this.beneficial_number = el.data.valuation.beneficial_number;
                // this.comment = el.data.valuation.comment;

                this.beneficial_other_1 = el.data.valuation.beneficial_other_1  == null ? this.beneficial_other_1 = '' : this.beneficial_other_1 = el.data.valuation.beneficial_other_1;
                this.beneficial_other_2 = el.data.valuation.beneficial_other_2  == null ? this.beneficial_other_2 = '' : this.beneficial_other_2 = el.data.valuation.beneficial_other_2;
                this.beneficial_text = el.data.valuation.beneficial_text  == null ? this.beneficial_text = '' : this.beneficial_text = el.data.valuation.beneficial_text;
                this.spatial_unit = el.data.valuation.spatial_unit  == null ? this.spatial_unit = '' : this.spatial_unit = el.data.valuation.spatial_unit;
                this.temporal_unit = el.data.valuation.temporal_unit  == null ? this.temporal_unit = '' : this.temporal_unit = el.data.valuation.temporal_unit;
                this.valuation_measured_text = el.data.valuation.valuation_measured_text  == null ? this.valuation_measured_text = '' : this.valuation_measured_text = el.data.valuation.valuation_measured_text;
                this.valuation_other_1 = el.data.valuation.valuation_other_1  == null ? this.valuation_other_1 = '' : this.valuation_other_1 = el.data.valuation.valuation_other_1;
                this.valuation_other_2 = el.data.valuation.valuation_other_2  == null ? this.valuation_other_2 = '' : this.valuation_other_2 = el.data.valuation.valuation_other_2;
                this.value_currency = el.data.valuation.value_currency  == null ? this.value_currency = '' : this.value_currency = el.data.valuation.value_currency;
                this.value_original = el.data.valuation.value_original  == null ? this.value_original = '' : this.value_original = el.data.valuation.value_original;
                this.value_total = el.data.valuation.value_total  == null ? this.value_total = '' : this.value_total = el.data.valuation.value_total;
                this.value_year = el.data.valuation.value_year  == null ? this.value_year = '' : this.value_year = el.data.valuation.value_year;
                this.beneficial_number = el.data.valuation.beneficial_number  == null ? this.beneficial_number = '' : this.beneficial_number = el.data.valuation.beneficial_number;
                this.comment = el.data.valuation.comment  == null ? this.comment = '' : this.comment = el.data.valuation.comment;

            });
        }

    })
</script>

{{-- -------------------------- ajax call ------------------------------ --}}


<script>
    // When the user clicks on div, open the popup
    function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }

    function myFunction2() {
        var popup = document.getElementById("myPopup2");
        popup.classList.toggle("show");
    }

    function myFunction3() {
        var popup = document.getElementById("myPopup3");
        popup.classList.toggle("show");
    }

    function myFunction4() {
        var popup = document.getElementById("myPopup4");
        popup.classList.toggle("show");
    }

    function myFunction5() {
        var popup = document.getElementById("myPopup5");
        popup.classList.toggle("show");
    }

    function myFunction6() {
        var popup = document.getElementById("myPopup6");
        popup.classList.toggle("show");
    }

    function myFunction7() {
        var popup = document.getElementById("myPopup7");
        popup.classList.toggle("show");
    }

    function myFunction8() {
        var popup = document.getElementById("myPopup8");
        popup.classList.toggle("show");
    }

    function myFunction9() {
        var popup = document.getElementById("myPopup9");
        popup.classList.toggle("show");
    }

    function myFunction10() {
        var popup = document.getElementById("myPopup10");
        popup.classList.toggle("show");
    }

    function myFunction11() {
        var popup = document.getElementById("myPopup11");
        popup.classList.toggle("show");
    }

    function myFunction12() {
        var popup = document.getElementById("myPopup12");
        popup.classList.toggle("show");
    }

    function myFunction13() {
        var popup = document.getElementById("myPopup13");
        popup.classList.toggle("show");
    }

    function myFunction14() {
        var popup = document.getElementById("myPopup14");
        popup.classList.toggle("show");
    }

    function myFunction140() {
        var popup = document.getElementById("myPopup140");
        popup.classList.toggle("show");
    }
</script>
