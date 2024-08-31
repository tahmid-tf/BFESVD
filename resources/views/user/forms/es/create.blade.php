<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js"
            integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

{{-- --------------------------------- navbar ------------------------------------ --}}

<x-navbar></x-navbar>

{{-- --------------------------------- navbar ------------------------------------ --}}

<section class="container">
    <h2 style="text-align: center; margin-bottom: 20px">Es & SubES Information</h2>

    <div id="app">
        <div>
            <div class="add-edit-form">
                <!-- ----------------------- Add form --------------------- -->

                <div>

                    <form v-on:submit.prevent="send">
                        <div>
                            <label>
                                ES Class
                                <span class="popup" onclick="myFunction()"> <i class="fas fa-info-circle"></i>
                                  <span class="popuptext" id="myPopup"> Select appropriate ecosystem service class. You can select only one ES class for your data entry form, e.g., either provisioning or regulating. If your study has data on multiple ES class, use separate forms.  </span>
                                </span>
                            </label>
                        </div>
                        <div>
                            <!-- --------------------- es class items ------------------------ -->
                            <div>
                                <select name="" id="" style="width: 177px" v-model="es_class">
                                    <option value="provisioning">Provisioning</option>
                                    <option value="regulating">Regulating</option>
                                    <option value="supporting">Supporting</option>
                                    <option value="cultural">Cultural</option>
                                </select>
                            </div>

                            <!-- --------------------- es class items ------------------------ -->

                            <br/>

                            <div class="form-field">
                                <label for="">
                                    ES Name
                                    <span class="popup" onclick="myFunction7()"> <i class="fas fa-info-circle"></i>
                                      <span class="popuptext" id="myPopup7">Select ecosystem services name(s), e.g., food, climate regulation, aesthetic information. For multiple options use "Add Item".</span>
                                    </span>
                                </label><br/>

                                <!-- --------------------- provisioning -------------------------- -->

                                <select name="" id="subes_item" style="width: 177px">
                                    <option value="Food" v-if="es_class === 'provisioning'">
                                        Food
                                    </option>
                                    <option value="Water" v-if="es_class === 'provisioning'">
                                        Water
                                    </option>
                                    <option
                                        value="raw materials"
                                        v-if="es_class === 'provisioning'"
                                    >
                                        Raw Materials
                                    </option>
                                    <option
                                        value="Genetic Resources"
                                        v-if="es_class === 'provisioning'"
                                    >
                                        Genetic Resources
                                    </option>
                                    <option
                                        value="Medicinal resources"
                                        v-if="es_class === 'provisioning'"
                                    >
                                        Medicinal resources
                                    </option>
                                    <option
                                        value="Ornamental resources"
                                        v-if=" es_class === 'provisioning' "
                                    >
                                        Ornamental resources
                                    </option>

                                    <!-- --------------------- provisioning -------------------------- -->

                                    <!-- ----------------------- regulating -------------------------- -->

                                    <option
                                        value="Climate Regulation"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Climate Regulation
                                    </option>

                                    <option
                                        value="Air Quality Regulation"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Air Quality Regulation
                                    </option>

                                    <option
                                        value="Regulation of water flows"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Regulation of water flows
                                    </option>
                                    <option
                                        value="Moderation of extreme events"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Moderation of extreme events
                                    </option>

                                    <option
                                        value="Waste Treatment"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Waste Treatment
                                    </option>
                                    <option
                                        value="Erosion Prevention"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Erosion Prevention
                                    </option>
                                    <option
                                        value="Maintenance of soil fertility"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Maintenance of soil fertility
                                    </option>

                                    <option
                                        value="Pollination"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Pollination
                                    </option>

                                    <option
                                        value="Biological Control"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Biological Control
                                    </option>

                                    <!-- ----------------------- regulating -------------------------- -->

                                    <!-- ----------------------- supporting -------------------------- -->

                                    <option
                                        value="Maintenance of life cycles"
                                        v-if="es_class === 'supporting'"
                                    >
                                        Maintenance of life cycles
                                    </option>

                                    <option
                                        value="Maintenance of Genetic diversity"
                                        v-if="es_class === 'supporting'"
                                    >
                                        Maintenance of Genetic diversity
                                    </option>
                                    <!-- ----------------------- supporting -------------------------- -->

                                    <!-- ----------------------- cultural -------------------------- -->

                                    <option
                                        value="Aesthetic Information"
                                        v-if="es_class === 'cultural'"
                                    >
                                        Aesthetic Information
                                    </option>

                                    <option
                                        value="Opportunities for recreation and tourism"
                                        v-if="es_class === 'cultural'"
                                    >
                                        Opportunities for recreation and tourism
                                    </option>

                                    <option
                                        value="Inspiration for culture, art and design"
                                        v-if="es_class === 'cultural'"
                                    >
                                        Inspiration for culture, art and design
                                    </option>

                                    <option
                                        value="Inspiration for culture, art and design"
                                        v-if="es_class === 'cultural'"
                                    >
                                        Spiritual experience
                                    </option>

                                    <option
                                        value="Information for cognitive development"
                                        v-if="es_class === 'cultural'"
                                    >
                                        Information for cognitive development
                                    </option>

                                    <option
                                        value="Existence, bequest values"
                                        v-if="es_class === 'cultural'"
                                    >
                                        Existence, bequest values
                                    </option>

                                    <option
                                        value="Other"
                                    >
                                        Other
                                    </option>

                                    <!-- ----------------------- cultural -------------------------- -->
                                </select>

                                <br/>

                                <label for="">
                                    SubES Name
                                    <span class="popup" onclick="myFunction8()"> <i class="fas fa-info-circle"></i>
                                      <span class="popuptext" id="myPopup8">Write up ecosystem sub-service name from study, e.g., fish. Add items for more SubES (e.g. timber) under the same ES Class (in this example it's provisioning). </span>
                                    </span>
                                </label><br/>
                                <input type="text" id="subes_name"/><br/>

                                <label for="">
                                    SubES Quantity
                                    <span class="popup" onclick="myFunction9()"> <i class="fas fa-info-circle"></i>
                                      <span class="popuptext" id="myPopup9">Quantity of ecosystem sub-service from the
                                          study in numeric value, e.g., 30</span>
                                    </span>
                                </label><br/>
                                <input type="text" id="subes_quantity"/><br/>

                                <label for="">
                                    SubES Quantity Unit
                                    <span class="popup" onclick="myFunction10()"> <i class="fas fa-info-circle"></i>
                                      <span class="popuptext" id="myPopup10">Quantity unit of ecosystem sub-service from
                                          the study, e.g., kg</span>
                                    </span>
                                </label><br/>
                                <input type="text" id="subes_quantity_unit"/><br/>

                                <div>
                                    <label for="">
                                        SubES Value
                                        <span class="popup" onclick="myFunction11()"> <i class="fas fa-info-circle"></i>
                                          <span class="popuptext" id="myPopup11">Value of ecosystem sub-service from the study
                                              in numeric value, e.g., 600</span>
                                        </span>
                                    </label><br/>
                                    <input type="text" id="subes_value"/><br/>
                                </div>

                                <label for="">
                                    SubES Value Unit
                                    <span class="popup" onclick="myFunction12()"> <i class="fas fa-info-circle"></i>
                                        <span class="popuptext" id="myPopup12">Value unit of ecosystem sub-service from
                                            the study, e.g., BDT/kg</span>
                                    </span>
                                </label><br/>
                                <input type="text" id="subes_value_unit"/><br/>

                                <label for="">
                                    SubES Valuation Method
                                    <span class="popup" onclick="myFunction13()"> <i class="fas fa-info-circle"></i>
                                        <span class="popuptext" id="myPopup13">Select the valuation method used to obtain the value observation. <a
                                                href="{{ route('visitor.valuation') }}" target="_blank"> SubES Valuation Method</a></span>
                                    </span>
                                </label><br/>
                                <input type="text" id="subes_validation"/><br/>
                            </div>
                        </div>

                        <br>
                        <button class="m btn btn-primary">Add Item</button>

                        <br/><br>
                        <lebel>ES All Text
                            <span class="popup" onclick="myFunction2()"> <i class="fas fa-info-circle"></i>
              	<span class="popuptext" id="myPopup2"> Write up all the ecosystem services names (e.g. food, water, raw materials) under the selected ES Class (e.g. provisioning) considered in the study. Use commas (,) to separate the ES names. You may directly copy and paste texts from the study. Use a new data entry form for inserting information on other ES Class (e.g. regulating) mentioned in the same study.</span>
          		</span>
                        </lebel>
                        <br>
                        <textarea v-model="es_text"></textarea> <br><br>

                        <lebel>Sub ES All Text
                            <span class="popup" onclick="myFunction3()"> <i class="fas fa-info-circle"></i>
              	<span class="popuptext" id="myPopup3">Write up all the ecosystem sub-service names (e.g. meat, drinking water, fuelwood and charcoal) as mentioned in the study for the chosen ES Class. Use commas (,) to separate the SubES. </span>
          		</span>
                        </lebel>
                        <br>
                        <textarea v-model="sub_es_text"></textarea> <br><br>

                        <lebel>TEEB SubES Codes
                            <span class="popup" onclick="myFunction5()"> <i class="fas fa-info-circle"></i>
            <span class="popuptext" id="myPopup5">See "TEEB Services" worksheet. Note - be careful NOT to include "." or "-" in the code. Only use commas (,) to separate the codes. <a
                    href="{{ route('visitor.teeb_sub_es') }}" target="_blank">Teeb SubES Codes</a> </span>
          	</span>
                        </lebel>
                        <br>
                        <input type="" name="" v-model="teeb"><br><br>

                        <lebel>IUCN Function
                            <span class="popup" onclick="myFunction6()"> <i class="fas fa-info-circle"></i>
                              <span class="popuptext"
                                    id="myPopup6"> Identify the functions of the ecosystem services from the IUCN Functions list. For instance, provisioning & cultural ES generally have actual use.<a
                                      href="{{ route('visitor.iucn_des') }}" target="_blank">IUCN Description</a></span>
                            </span>
                        </lebel>
                        <br>
                        <div class="iucn-funtion">
                            <select name="iucnFunction" v-model="iucn">
                                <option value="N/A">--- Select ---</option>
                                <option value="Primary">Primary</option>
                                <option value="Secondary">Secondary</option>
                                <option value="Potential">Potential</option>
                                <option value="Actual">Actual</option>
                            </select>
                            <br>
                        </div>
                        <br>

                        {{--                        <button class="m btn btn-primary">Add Item</button>--}}
                        <button class="btn btn-success" type="button" v-on:click="submit">Next</button>
                    </form>
                </div>

                <!-- ----------------------- Add form --------------------- -->

                <!-- ----------------------- Edit Form -------------------- -->
                <div id="edit_form_class">
                    <h3>Edit Form</h3>

                    <form v-on:submit.prevent="edit">
                        <div>
                            <div>
                                <input type="hidden" id="edit_id"/><br/>

                                <label for="">SubES Item</label><br/>

                                <!-- --------------------- provisioning -------------------------- -->

                                <select name="" id="edit_subes_item" style="width: 177px">
                                    <option value="Food" v-if="es_class === 'provisioning'">
                                        Food
                                    </option>
                                    <option value="Water" v-if="es_class === 'provisioning'">
                                        Water
                                    </option>
                                    <option
                                        value="raw materials"
                                        v-if="es_class === 'provisioning'"
                                    >
                                        Raw Materials
                                    </option>
                                    <option
                                        value="Genetic Resources"
                                        v-if="es_class === 'provisioning'"
                                    >
                                        Genetic Resources
                                    </option>
                                    <option
                                        value="Medicinal resources"
                                        v-if="es_class === 'provisioning'"
                                    >
                                        Medicinal resources
                                    </option>
                                    <option
                                        value="Ornamental resources"
                                        v-if=" es_class === 'provisioning' || es_class === 'regulating' "
                                    >
                                        Ornamental resources
                                    </option>

                                    <!-- --------------------- provisioning -------------------------- -->

                                    <!-- ----------------------- regulating -------------------------- -->

                                    <option
                                        value="Climate Regulation"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Climate Regulation
                                    </option>
                                    <option
                                        value="Regulation of water flows"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Regulation of water flows
                                    </option>
                                    <option
                                        value="Moderation of extreme events"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Moderation of extreme events
                                    </option>

                                    <option
                                        value="Waste Treatment"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Waste Treatment
                                    </option>
                                    <option
                                        value="Erosion Prevention"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Erosion Prevention
                                    </option>
                                    <option
                                        value="Maintenance of soil fertility"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Maintenance of soil fertility
                                    </option>

                                    <option
                                        value="Pollination"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Pollination
                                    </option>

                                    <option
                                        value="Boilogical Control"
                                        v-if="es_class === 'regulating'"
                                    >
                                        Boilogical Control
                                    </option>

                                    <!-- ----------------------- regulating -------------------------- -->

                                    <!-- ----------------------- supporting -------------------------- -->

                                    <option
                                        value="Maintenance of life cycles"
                                        v-if="es_class === 'supporting'"
                                    >
                                        Maintenance of life cycles
                                    </option>

                                    <option
                                        value="Maintenance 2"
                                    >
                                        Maintenance 2
                                    </option>

                                    <option
                                        value="Maintenance of genetic diversity"
                                        v-if="es_class === 'supporting' "
                                    >
                                        Maintenance of genetic diversity
                                    </option>
                                    <!-- ----------------------- supporting -------------------------- -->

                                    <!-- ----------------------- cultural -------------------------- -->

                                    <option
                                        value="Opportunities for recreation and tourism"
                                        v-if="es_class === 'cultural'"
                                    >
                                        Opportunities for recreation and tourism
                                    </option>

                                    <option
                                        value="Inspiration for culture, art and design"
                                        v-if="es_class === 'cultural'"
                                    >
                                        Inspiration for culture, art and design
                                    </option>

                                    <option
                                        value="Inspiration for culture, art and design"
                                        v-if="es_class === 'cultural'"
                                    >
                                        Spiritual experience
                                    </option>

                                    <option
                                        value="Information for cognitive development"
                                        v-if="es_class === 'cultural'"
                                    >
                                        Information for cognitive development
                                    </option>

                                    <option
                                        value="Existence, bequest values"
                                        v-if="es_class === 'cultural'"
                                    >
                                        Existence, bequest values
                                    </option>

                                    <!-- ----------------------- cultural -------------------------- -->

                                    <option
                                        value="Other"
                                    >
                                        Other
                                    </option>

                                </select>

                                <br/>

                                <label for="">SubES Name</label><br/>
                                <input type="text" id="edit_subes_name"/><br/>

                                <label for="">SubES Quantity</label><br/>
                                <input type="text" id="edit_subes_quantity"/><br/>

                                <label for="">SubES Quantity Unit</label><br/>
                                <input type="text" id="edit_subes_quantity_unit"/><br/>

                                <div>
                                    <label for="">SubES Value</label><br/>
                                    <input type="text" id="edit_subes_value"/><br/>
                                </div>

                                <label for="">SubES Value Unit</label><br/>
                                <input type="text" id="edit_subes_value_unit"/><br/>

                                <label for="">SubES Valuation</label><br/>
                                <input type="text" id="edit_subes_validation"/><br/>
                            </div>
                        </div>

                        <br/>


                        <button>Save</button>


                    </form>
                </div>

                <!-- ----------------------- Edit Form -------------------- -->
            </div>

            <!-- ----------------------------------- table --------------------------------------------- -->

            <br/>
            <table style="width: 100%">
                <tr>
                    <th style="border: 1px solid red">ES Class</th>
                    <th style="border: 1px solid red">ES Name</th>
                    <th style="border: 1px solid red">SubES Name</th>
                    <th style="border: 1px solid red">SubES Quantity</th>
                    <th style="border: 1px solid red">SubES Quantity Unit</th>
                    <th style="border: 1px solid red">SubES Value</th>
                    <th style="border: 1px solid red">SubES Value Unit</th>
                    <th style="border: 1px solid red">SubES Valuation Method</th>
                    <th style="border: 1px solid red">Remove item</th>
                    <th style="border: 1px solid red">Edit item</th>
                </tr>

                <tr v-for="(item,index) in fullData" :key="item.subes_item">
                    <td style="border: 1px solid red">@{{ es_class }}</td>
                    <td style="border: 1px solid red">@{{ item.subes_item }}</td>
                    <td style="border: 1px solid red">@{{ item.subes_name }}</td>
                    <td style="border: 1px solid red">@{{ item.subes_quantity }}</td>
                    <td style="border: 1px solid red">
                        @{{ item.subes_quantity_unit }}
                    </td>
                    <td style="border: 1px solid red">@{{ item.subes_value }}</td>
                    <td style="border: 1px solid red">@{{ item.subes_value_unit }}</td>
                    <td style="border: 1px solid red">@{{ item.subes_validation }}</td>
                    <td style="border: 1px solid red">
                        <button v-on:click="removeItem(index)">Remove Item</button>
                    </td>

                    <td style="border: 1px solid red">
                        <button v-on:click="editItem(index)">Edit Item</button>
                    </td>
                </tr>
            </table>

            <!-- ----------------------------------- table --------------------------------------------- -->

            <!-- --------------------------------- edit form ------------------------------ -->

            <br/>

            <!-- --------------------------------- edit form ------------------------------ -->
        </div>
    </div>


</section>

{{-- ---------------------------------------- ajax script ----------------------------------- --}}

<script>
    var app = new Vue({
        el: "#app",
        data: {
            es_value_id: '{{ session('tracker') }}',
            fullData: [],
            es_class: "provisioning",
            es_text: '',
            sub_es_text: '',
            teeb: '',
            iucn: ''


        },
        methods: {

            // ---------------------------- submit -----------------------

            submit() {
                const formData = new FormData();
                formData.set("es_value_id", this.es_value_id);
                formData.set("es_bundle", JSON.stringify(this.fullData));
                formData.set("es_class", this.es_class);
                formData.set("es_text", this.es_text);
                formData.set("sub_es_text", this.sub_es_text);
                formData.set("teeb", this.teeb);
                formData.set("iucn", this.iucn);


                axios.post('{{ route('es.store') }}', formData).then(el => {
                    if (el.status == 200) {
                        window.location.href = "{{ route('study.index') }}";
                    }
                });
            },

            // ---------------------------- submit -----------------------


            // ---------------------------- add item ----------------------

            send() {
                let formData = {
                    subes_item: subes_item.value,
                    subes_name: subes_name.value,
                    subes_quantity: subes_quantity.value,
                    subes_quantity_unit: subes_quantity_unit.value,
                    subes_value: subes_value.value,
                    subes_value_unit: subes_value_unit.value,
                    subes_validation: subes_validation.value,
                };

                this.fullData.push(formData);
            },

            // ---------------------------- add item ----------------------

            // --------------------- remove item --------------------------

            removeItem(index) {
                this.fullData.splice(index, 1);
            },

            // --------------------- remove item --------------------------

            // ----------------- edit ----------------------------------

            editItem(index) {
                let data = this.fullData[index];
                edit_id.value = index;
                edit_subes_item.value = data.subes_item;
                edit_subes_name.value = data.subes_name;
                edit_subes_quantity.value = data.subes_quantity;
                edit_subes_quantity_unit.value = data.subes_quantity_unit;
                edit_subes_value.value = data.subes_value;
                edit_subes_value_unit.value = data.subes_value_unit;
                edit_subes_validation.value = data.subes_validation;

                edit_form_class.style.display = "inline";
            },

            edit() {
                let edit_id_var = edit_id.value;

                this.fullData[edit_id_var].subes_item = edit_subes_item.value;
                this.fullData[edit_id_var].subes_name = edit_subes_name.value;
                this.fullData[edit_id_var].subes_quantity = edit_subes_quantity.value;
                this.fullData[edit_id_var].subes_quantity_unit =
                    edit_subes_quantity_unit.value;
                this.fullData[edit_id_var].subes_value = edit_subes_value.value;
                this.fullData[edit_id_var].subes_value_unit = edit_subes_value_unit.value;
                this.fullData[edit_id_var].subes_validation = edit_subes_validation.value;

                edit_form_class.style.display = "none";
            },

            // ----------------- edit ----------------------------------
        },

        mounted() {
            // --------------- edit mounted ---------------------------
            edit_form_class.style.display = "none";

            // --------------- edit mounted ---------------------------
        },
    });

</script>

{{-- ---------------------------------------- ajax script ----------------------------------- --}}


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
</script>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>
