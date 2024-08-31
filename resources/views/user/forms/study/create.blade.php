<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}">
    <title>Study Site</title>
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

<div id="app" class="container">
    <h2 style="text-align: center; margin-bottom: 20px">Study Site</h2>
    <div>
        <form v-on:submit.prevent="add_district">

            <!-- division start -->
            <label style="font-weight: 600">Division Name
                <span class="popup" onclick="myFunction()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup">Select appropriate division name(s). Multiple selection possible.
                  For national scale study sites, leave blank. </span>
            </span>
            </label>
            <br>
            <span class="forest-zone"
                  style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="div" value="Dhaka" v-model="division"> Dhaka </span>
            <span style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="div" value="Chattogram" v-model="division"> Chattogram</span>
            <span style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="div" value="Barishal" v-model="division"> Barishal</span>
            <span class="forest-zone"
                  style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="div" value="Khulna" v-model="division"> Khulna </span>
            <span style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="div" value="Rajshahi" v-model="division"> Rajshahi</span>
            <span style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="div" value="Rangpur" v-model="division"> Rangpur</span>
            <span class="forest-zone"
                  style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="div" value="Mymensingh " v-model="division"> Mymensingh  </span>
            <span class="forest-zone"
                  style="display: inline-block; background: #E5E5E5; border-radius: 12px; padding: 2px 10px; margin: 10px 10px 0 0">
            <input type="checkbox" name="div" value="Sylhet" v-model="division"> Sylhet </span>
            <br> <br>
            <!-- division end -->

            <!-- district start -->
            <label style="font-weight: 600">Dist Name and Code
                <span class="popup" onclick="myFunction3()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup3">Select district name and submit. Multiple selection possible. For national scale study sites, leave blank.</span>
            </span>
            </label>
            <br>
            <select
                name=""
                id="district_name"
                v-on:click="district_name_function"
            >
                <option value="Bagerhat">Bagerhat</option>
                <option value="Bandarban">Bandarban</option>
                <option value="Barguna">Barguna</option>
                <option value="Barishal">Barishal</option>
                <option value="Bhola">Bhola</option>
                <option value="Brahmanbaria">Brahmanbaria</option>
                <option value="Chandpur">Chandpur</option>
                <option value="Chattogram">Chattogram</option>
                <option value="Chuadanga">Chuadanga</option>
                <option value="Cumilla">Cumilla</option>
                <option value="Cox's Bazar">Cox's Bazar</option>
                <option value="Dhaka">Dhaka</option>

                <option value="Dinajpur">Dinajpur</option>
                <option value="Faridpur">Faridpur</option>
                <option value="Feni">Feni</option>
                <option value="Gaibandha">Gaibandha</option>
                <option value="Gazipur">Gazipur</option>
                <option value="Gopalganj">Gopalganj</option>
                <option value="Habiganj">Habiganj</option>
                <option value="Jamalpur">Jamalpur</option>
                <option value="Jashore">Jashore</option>
                <option value="Jhalokati">Jhalokati</option>
                <option value="Jhenaidah">Jhenaidah</option>
                <option value="Joypurhat">Joypurhat</option>
                <option value="Khagrachari">Khagrachari</option>
                <option value="Khulna">Khulna</option>
                <option value="Kishoreganj">Kishoreganj</option>
                <option value="Kurigram">Kurigram</option>
                <option value="Kushtia">Kushtia</option>

                <option value="Lakshmipur">Lakshmipur</option>
                <option value="Lalmonirhat">Lalmonirhat</option>
                <option value="Madaripur">Madaripur</option>
                <option value="Magura">Magura</option>
                <option value="Manikganj">Manikganj</option>
                <option value="Moulvibazar">Moulvibazar</option>
                <option value="Meherpur">Meherpur</option>
                <option value="Munshiganj">Munshiganj</option>
                <option value="Mymensingh">Mymensingh</option>
                <option value="Naogaon">Naogaon</option>

                <option value="Narail">Narail</option>
                <option value="Narayanganj">Narayanganj</option>
                <option value="Narsingdi">Narsingdi</option>
                <option value="Netrokona">Netrokona</option>
                <option value="Nilphamari">Nilphamari</option>
                <option value="Noakhali">Noakhali</option>
                <option value="Pabna">Pabna</option>

                <option value="Panchagarh">Panchagarh</option>
                <option value="Patuakhali">Patuakhali</option>
                <option value="Pirojpur">Pirojpur</option>
                <option value="Rajbari">Rajbari</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Rangamati">Rangamati</option>
                <option value="Rangpur">Rangpur</option>
                <option value="Satkhira">Satkhira</option>
                <option value="Shariatpur">Shariatpur</option>
                <option value="Sherpur">Sherpur</option>
                <option value="Sirajganj">Sirajganj</option>
                <option value="Sunamganj">Sunamganj</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Tangail">Tangail</option>
                <option value="Thakurgaon">Thakurgaon</option>
            </select>
            <input type="text" id="district_code" />
            <button>Submit</button>
            <!-- district selction start -->
            <!-- -------------------------------- view district ------------------------- -->
            <br /><br>
            <table style="width: 100%">
                <tr>
                    <th style="border: 1px solid red">District Name</th>
                    <th style="border: 1px solid red">District Code</th>
                    <th style="border: 1px solid red">Remove Item</th>
                </tr>

                <tr v-for="(item,index) in district" :key="item">
                    <td style="border: 1px solid red; text-align: center">
                        @{{ item.district_name }}
                    </td>
                    <td style="border: 1px solid red; text-align: center">
                        @{{ item.district_code }}
                    </td>

                    <td style="border: 1px solid red; text-align: center">
                        <button v-on:click="removeItem(index)">Remove Item</button>
                    </td>
                </tr>
            </table>

            <!-- -------------------------------- view district ------------------------- -->

            <br>
            <!-- site scale start -->
            <label style="font-weight: 600">Site Scale
                <span class="popup" onclick="myFunction4()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup4">Select the scale of the study site, e.g., local, sub-national (2 or more districts),
                  national. Insert text from the study  under the "Others" option if necessary to specify beyond the
                  selection categories (e.g. multi-country).</span>
            </span>
            </label>
            <br>
            <select name="siteScale" id="" v-model="site_scale">
                <option value="N/A">--- Select ---</option>
                <option value="Local">Local</option>
                <option value="Sub_National">Sub National</option>
                <option value="National">National</option>
            </select> <br>
            <span><input type="text" name="siteScaleOther" placeholder="Other" style="margin: 5px 0 8px 0;" v-model="other_1"></span> <br>
            <!-- site scale end -->

            <!-- TEEB Scale Code start -->
            <label style="font-weight: 600">TEEB Scale Code
                <span class="popup" onclick="myFunction17()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup17">Select appropriate code: 1 if Local; 2 if Sub-national;
                  3 if National; 4 if Multi-country. For national scale study sites, leave blank.</span>
            </span>
            </label>
            <br>
            <input type="" name="" v-model="teeb">
            <br>
            <!-- TEEB Scale Code end -->

            <!-- Location name -->
            <label style="font-weight: 600">Location Name
                <span class="popup" onclick="myFunction5()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup5">Name of the study site location (e.g. names of village, union, upazila).
                  You may directly copy and paste description from the study.</span>
            </span>
            </label>
            <br>
            <input type="" name="" v-model="location_name"> <br>

            <!-- Legal Status start -->
            <label style="font-weight: 600">Legal Status
                <span class="popup" onclick="myFunction6()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup6">Select appropriate legal status. If you are unsure, leave blank.</span>
            </span>
            </label>
            <br>
            <select name="legalStatus" v-model="legal_status">
                <option value="N/A">--- Select ---</option>
                <option value="Unclassified_state_forest_(USF)">Unclassified state forest (USF)</option>
                <option value="Reserve">Reserve</option>
                <option value="Protected">Protected</option>
                <option value="Vested">Vested</option>
            </select> <br>
            <span><input type="text" name="legalStatusOther" placeholder="Other" style="margin: 5px 0 8px 0;" v-model="other_2"></span>
            <br>
            <!-- Legal Status start -->

            <!-- Site Area -->
            <label style="font-weight: 600">Site Area
                <span class="popup" onclick="myFunction7()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup7">Extent of the study area in numeric value. </span>
            </span>
            </label>
            <br>
            <input type="number" name="" v-model="site_area"> <br>

            <!-- site Area Spatial Unit -->
            <label style="font-weight: 600">Site Area Spatial Unit
                <span class="popup" onclick="myFunction8()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup8">The units of study area (e.g., hectare, km2, acre).</span>
            </span>
            </label>
            <br>
            <input type="" name="" v-model="site_unit"> <br>

            <!-- Site Area Ha -->
            <label style="font-weight: 600">Site Area Ha
                <span class="popup" onclick="myFunction9()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup9">The areal extent of the study area in hectares. Convert to Ha if necessary.</span>
            </span>
            </label>
            <br>
            <input type="" name="" v-model="site_ha"> <br>

            <!-- Site Condition Text -->
            <label style="font-weight: 600">Site Condition Text
                <span class="popup" onclick="myFunction13()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup13">Text description of the condition of the ecosystem from the study.</span>
            </span>
            </label>
            <br>
            <input type="" name="" v-model="site_condition_text"> <br>

            <!-- Site Condition -->
            <label style="font-weight: 600">Site Condition
                <span class="popup" onclick="myFunction14()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup14">Select from 3-category indicators of the ecosystem condition: Highly degraded,
                  Intermediate, Well-functioning. If you can not determine, select "Undetermined".  </span>
            </span>
            </label>
            <br>
            <select name="siteCondition" v-model="site_condition">
                <option value="N/A">--- Select ---</option>
                <option value="Highly_degraded">Highly degraded</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Well_functioning">Well-functioning</option>
                <option value="Undetermined/NA">Undetermined/NA</option>
            </select> <br>

            <!-- Latitude -->
            <label style="font-weight: 600">Latitude
                <span class="popup" onclick="myFunction15()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup15">Latitude of the study site in decimal degrees (NOT degree, minute, second).</span>
            </span>
            </label>
            <br>
            <input type="text" name="" v-model="latitude"> <br>

            <!-- Longitude -->
            <label style="font-weight: 600">Longitude
                <span class="popup" onclick="myFunction16()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup16">Longitude of the study site in decimal degrees (NOT degree, minute, second).</span>
            </span>
            </label>
            <br>
            <input type="text" name="" v-model="longitude"> <br>

            <button type="" class="btn btn-success mt-2" v-on:click="submit">Next</button>
        </form>


    </div>
</div>
</body>
</html>


{{-- -------------------------- ajax call --------------------------- --}}

<script>
    var app = new Vue({
        el: "#app",
        data: {
            es_value_id: '{{ session('tracker') }}',
            district: [],
            division: [],
            site_scale : '',
            other_1 : '',
            teeb : '',
            location_name : '',
            legal_status : '',
            other_2 : '',
            site_area : '',
            site_unit : '',
            site_ha : '',
            site_condition_text : '',
            site_condition : '',
            latitude : '',
            longitude : '',
        },
        methods: {

            submit(){
                const formData = new FormData();
                formData.set("es_value_id", this.es_value_id);
                formData.set("district", JSON.stringify(this.district));
                formData.set("division", JSON.stringify(this.division));
                formData.set("site_scale", this.site_scale);
                formData.set("other_1", this.other_1);
                formData.set("teeb", this.teeb);
                formData.set("location_name", this.location_name);
                formData.set("legal_status", this.legal_status);
                formData.set("other_2", this.other_2);
                formData.set("site_area", this.site_area);
                formData.set("site_unit", this.site_unit);
                formData.set("site_ha", this.site_ha);
                formData.set("site_condition_text", this.site_condition_text);
                formData.set("site_condition", this.site_condition);
                formData.set("latitude", this.latitude);
                formData.set("longitude", this.longitude);

                axios.post('{{ route('study.store') }}', formData).then(el => {
                    if(el.status == 200){
                        window.location.href = "{{ route('valuation.index') }}";
                    }
                });
            },
            district_name_function(e) {
                e.target.value == "Bagerhat" ? (district_code.value = "BD4001") : "";
                e.target.value == "Bandarban" ? (district_code.value = "BD2003") : "";
                e.target.value == "Barguna" ? (district_code.value = "BD1004") : "";
                e.target.value == "Barishal" ? (district_code.value = "BD1006") : "";
                e.target.value == "Bhola" ? (district_code.value = "BD1009") : "";
                e.target.value == "Bogura" ? (district_code.value = "BD5010") : "";
                e.target.value == "Brahmanbaria"
                    ? (district_code.value = "BD2012")
                    : "";
                e.target.value == "Chandpur" ? (district_code.value = "BD2013") : "";
                e.target.value == "Chattogram" ? (district_code.value = "BD2015") : "";
                e.target.value == "Chuadanga" ? (district_code.value = "BD4018") : "";
                e.target.value == "Cumilla" ? (district_code.value = "BD2019") : "";
                e.target.value == "Cox's Bazar" ? (district_code.value = "BD2022") : "";

                e.target.value == "Dhaka" ? (district_code.value = "BD3026") : "";
                e.target.value == "Dinajpur" ? (district_code.value = "BD5527") : "";
                e.target.value == "Faridpur" ? (district_code.value = "BD3029") : "";
                e.target.value == "Feni" ? (district_code.value = "BD2030") : "";
                e.target.value == "Gaibandha" ? (district_code.value = "BD5532") : "";
                e.target.value == "Gazipur" ? (district_code.value = "BD3033") : "";
                e.target.value == "Gopalganj" ? (district_code.value = "BD3035") : "";
                e.target.value == "Habiganj" ? (district_code.value = "BD6036") : "";

                e.target.value == "Jamalpur" ? (district_code.value = "BD4539") : "";
                e.target.value == "Jashore" ? (district_code.value = "BD4041") : "";
                e.target.value == "Jhalokati" ? (district_code.value = "BD1042") : "";
                e.target.value == "Jhenaidah" ? (district_code.value = "BD4044") : "";
                e.target.value == "Joypurhat" ? (district_code.value = "BD5038") : "";
                e.target.value == "Khagrachari"
                    ? (district_code.value = "BD2046")
                    : "";
                e.target.value == "Khulna" ? (district_code.value = "BD4047") : "";
                e.target.value == "Kishoreganj" ? (district_code.value = "BD3048") : "";
                e.target.value == "Kurigram" ? (district_code.value = "BD5549") : "";
                e.target.value == "Kushtia" ? (district_code.value = "BD4050") : "";

                e.target.value == "Lakshmipur" ? (district_code.value = "BD2051") : "";
                e.target.value == "Lalmonirhat" ? (district_code.value = "BD5552") : "";
                e.target.value == "Madaripur" ? (district_code.value = "BD3054") : "";
                e.target.value == "Magura" ? (district_code.value = "BD4055") : "";
                e.target.value == "Manikganj" ? (district_code.value = "BD3056") : "";
                e.target.value == "Moulvibazar" ? (district_code.value = "BD6058") : "";
                e.target.value == "Meherpur" ? (district_code.value = "BD4057") : "";
                e.target.value == "Munshiganj" ? (district_code.value = "BD3059") : "";
                e.target.value == "Mymensingh" ? (district_code.value = "BD4561") : "";
                e.target.value == "Naogaon" ? (district_code.value = "BD5064") : "";

                e.target.value == "Narail" ? (district_code.value = "BD4065") : "";
                e.target.value == "Narayanganj" ? (district_code.value = "BD3067") : "";
                e.target.value == "Narsingdi" ? (district_code.value = "BD3068") : "";
                e.target.value == "Natore" ? (district_code.value = "BD5069") : "";
                e.target.value == "Nawabganj" ? (district_code.value = "BD5070") : "";
                e.target.value == "Netrokona" ? (district_code.value = "BD4572") : "";
                e.target.value == "Nilphamari" ? (district_code.value = "BD5573") : "";
                e.target.value == "Noakhali" ? (district_code.value = "BD2075") : "";
                e.target.value == "Pabna" ? (district_code.value = "BD5076") : "";

                e.target.value == "Panchagarh" ? (district_code.value = "BD5577") : "";
                e.target.value == "Patuakhali" ? (district_code.value = "BD1078") : "";
                e.target.value == "Pirojpur" ? (district_code.value = "BD1079") : "";
                e.target.value == "Rajbari" ? (district_code.value = "BD3082") : "";
                e.target.value == "Rajshahi" ? (district_code.value = "BD5081") : "";
                e.target.value == "Rangamati" ? (district_code.value = "BD2084") : "";
                e.target.value == "Rangpur" ? (district_code.value = "BD5585") : "";
                e.target.value == "Satkhira" ? (district_code.value = "BD4087") : "";
                e.target.value == "Shariatpur" ? (district_code.value = "BD3086") : "";
                e.target.value == "Sherpur" ? (district_code.value = "BD4589") : "";
                e.target.value == "Sirajganj" ? (district_code.value = "BD5088") : "";
                e.target.value == "Sunamganj" ? (district_code.value = "BD6090") : "";
                e.target.value == "Sylhet" ? (district_code.value = "BD6091") : "";
                e.target.value == "Tangail" ? (district_code.value = "BD3093") : "";
                e.target.value == "Thakurgaon" ? (district_code.value = "BD5594") : "";
            },

            add_district() {
                const district_obj = {
                    district_name: district_name.value,
                    district_code: district_code.value,
                };

                this.district.push(district_obj);
            },

            removeItem(index) {
                this.district.splice(index, 1);
            },
        },
    });
</script>

{{-- -------------------------- ajax call --------------------------- --}}

<!-- --------------- script --------------- -->

<script>
    // When the user clicks on div, open the popup
    function myFunction() {
        var popup = document.getElementById("myPopup");
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

    function myFunction15() {
        var popup = document.getElementById("myPopup15");
        popup.classList.toggle("show");
    }

    function myFunction16() {
        var popup = document.getElementById("myPopup16");
        popup.classList.toggle("show");
    }

    function myFunction17() {
        var popup = document.getElementById("myPopup17");
        popup.classList.toggle("show");
    }
</script>


<!-- --------------- script --------------- -->
