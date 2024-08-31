<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />

    <!-- Font awesome -->
    <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
    />

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}"/>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js"
            integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

{{-- ------------------------- navbar ------------------------ --}}

<x-navbar></x-navbar>

{{-- ------------------------- navbar ------------------------ --}}


<section class="container">
    <h2 style="text-align: center; margin-bottom: 20px">
        Ecosystem Information
    </h2>

    <!-- ---------------------- form ------------------------- -->

    <div id="app">
        <div>
            <form v-on:submit.prevent="submitData">
                <label
                >Ecosystem Value ID
                    <span class="popup" onclick="myFunction2()">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="popuptext" id="myPopup2"
                                            >It will be auto generated</span
                                            >
                                          </span>
                </label>
                <br/>
                <input type="" name="" v-model="formData.es_value_id" disabled/> <br/><br/>

                <label
                >FAO Biome
                    <span class="popup" onclick="myFunction3()">
            <i class="fas fa-info-circle"></i>
            <span class="popuptext" id="myPopup3"
            >Select either "Tropical moist forest" or "Tropical rainforest" from the district biome list.
                <a href="{{ route('visitor.fao') }}" target="_blank">District Biome List</a>
            </span
            >
          </span>
                </label>
                <br/>
                <select name="faoBiome" v-model:faoBiome="formData.faoBiome">
                    <option>--- Select ---</option>
                    <option value="Tropical Moist">Tropical Moist</option>
                    <option value="Tropical Rainforest">Tropical Rainforest</option>
                </select>
                <br/><br/>

                <label
                >Ecosystem
                    <span class="popup" onclick="myFunction5()">
            <i class="fas fa-info-circle"></i>
            <span class="popuptext" id="myPopup5"
            >Please select from the "Biomes & Ecosystems" list for appropriate ecosystem name, e.g, temperate rain forest,
                tropical rain forest . <a href="{{ route('visitor.teeb') }}" target="_blank">TEEB ES CODE LIST</a></span
            >
          </span>
                </label>
                <br/>
                <!-------------------------- input field start ------------------->
                <input type="" name="" v-model:ecoSystem="formData.ecoSystem"/><br/><br/>
                <!-------------------------- input field end -------------------> <br/><br/>

                <label
                >TEEB Ecosystem Code
                    <span class="popup" onclick="myFunction6()">
            <i class="fas fa-info-circle"></i>
            <span class="popuptext" id="myPopup6"
            >Please select from the "Biomes & Ecosystems" list for the appropriate code, e.g, 7.1, 6.1.
                <a href="{{ route('visitor.teeb') }}" target="_blank">TEEB ES CODE LIST</a>
            </span
            >
          </span>
                </label>
                <br/>
                <!-------------------------- input field start ------------------->
                <input type="" name="" v-model:teeb="formData.teeb"/><br/><br/>
                <!-------------------------- input field end ------------------->

                <!-- Forest zone list data -->
                <label
                >Forest Zone
                    <span class="popup" onclick="myFunction7()">
            <i class="fas fa-info-circle"></i>
            <span class="popuptext" id="myPopup7"
            >Insert the zone name under "Others" only if the study happened in places other than the already specified zones.
            </span>
          </span>
                </label>
                <br/>
                <span
                    class="forest-zone"
                    style="
            display: inline-block;
            background: #e5e5e5;
            border-radius: 12px;
            padding: 2px 10px;
            margin: 10px 10px 0 0;
          "
                >
          <input type="checkbox" name="name" value="Sunderbans" v-model="formData.zone"/> Sundarbans
        </span>
                <span
                    style="
            display: inline-block;
            background: #e5e5e5;
            border-radius: 12px;
            padding: 2px 10px;
            margin: 10px 10px 0 0;
          "
                >
          <input type="checkbox" name="name" value="CHT hill forest" v-model="formData.zone"/> CHT hill
          forest</span
                >
                <span
                    style="
            display: inline-block;
            background: #e5e5e5;
            border-radius: 12px;
            padding: 2px 10px;
            margin: 10px 10px 0 0;
          "
                >
          <input type="checkbox" name="name" value="Sylhet hill" v-model="formData.zone"/> Sylhet hill
          forest</span
                >
                <span
                    style="
            display: inline-block;
            background: #e5e5e5;
            border-radius: 12px;
            padding: 2px 10px;
            margin: 10px 10px 0 0;
          "
                >
          <input type="checkbox" name="name" value="Coastal forest" v-model="formData.zone"/> Coastal
          forest</span
                >
                <span
                    style="
            display: inline-block;
            background: #e5e5e5;
            border-radius: 12px;
            padding: 2px 10px;
            margin: 10px 10px 0 0;
          "
                >
          <input type="checkbox" name="name" value="Sal forest" v-model="formData.zone"/> Sal
          forest</span
                ><br/>
                <span style="display: inline-block; padding: 15px 0"
                >Others
          <input
              type="text"
              placeholder="Trees outside forest, Urban forest"
              name="name"
              v-model="formData.others"
          /> </span
                ><br/><br/>

                <label
                >Forest Zone Text
                    <span class="popup" onclick="myFunction8()">
            <i class="fas fa-info-circle"></i>
            <span class="popuptext" id="myPopup8"
            >Directly copy and paste text description of the ecosystem from the study.</span
            >
          </span>
                </label>
                <br/>
                <textarea v-model="formData.zone_text"
                ></textarea><br/><br/>

                <div class="nextButton" style="text-align: right">
                    <button class="btn btn-secondary" type="submit">Next</button>
                </div>


                {{--                <label--}}
                {{--                >Comment--}}
                {{--                    <span class="popup" onclick="myFunction8()">--}}
                {{--            <i class="fas fa-info-circle"></i>--}}
                {{--            <span class="popuptext" id="myPopup8"--}}
                {{--            >Directly copy and paste text description from study.</span--}}
                {{--            >--}}
                {{--          </span>--}}
                {{--                </label><br>--}}

                {{--                @if(auth()->user()->role == "user")--}}
                {{--                    <textarea v-model="formData.comment" style="width: 50%"--}}
                {{--                    readonly></textarea><br/><br/>--}}
                {{--                @endif--}}
            </form>
        </div>
    </div>


    <!-- ---------------------- form ------------------------- -->
</section>

<!-- ------------------------------ ajax call --------------------------------------- -->


<script>
    var app = new Vue({
        el: '#app',
        data: {
            formData: {
                es_value_id: '{{ session('tracker') }}',
                faoBiome: '--- Select ---',
                ecoSystem: '',
                teeb: '',
                zone: [],
                others: '',
                zone_text: '',
                comment: ''
            },
        },
        methods: {
            submitData() {

                const formData = new FormData();
                formData.set("es_value_id", this.formData.es_value_id);
                formData.set("faoBiome", this.formData.faoBiome);
                formData.set("ecoSystem", this.formData.ecoSystem);
                formData.set("teeb", this.formData.teeb);
                formData.set("zone", JSON.stringify(this.formData.zone));
                formData.set("others", this.formData.others);
                formData.set("zone_text", this.formData.zone_text);
                formData.set("comment", this.formData.comment);


                axios.post('{{ route('ecosystem.store') }}', formData).then(el => {
                    if (el.status == 200) {
                        window.location.href = "{{ route('es.index') }}";
                    }
                });
            }
        }

    })
</script>

<!-- ------------------------------ ajax call --------------------------------------- -->

<script>
    // When the user clicks on div, open the popup
    function myFunction2() {
        var popup = document.getElementById("myPopup2");
        popup.classList.toggle("show");
    }

    function myFunction3() {
        var popup = document.getElementById("myPopup3");
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
</script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>
</body>
</html>
