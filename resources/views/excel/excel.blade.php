<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Excel Data</title>
    <link rel="stylesheet" href="{{ asset('assets_landing_page_v2/css/landing.css') }}"/>

    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css"
    />
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js"
            integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/table2excel.js') }}"></script>
</head>
<body>

<style>
    * {
        box-sizing: border-box;
    }
</style>

<div>

    {{-- -------------------- navbar -------------------- --}}

    <x-public_navbar></x-public_navbar>

    {{-- -------------------- navbar -------------------- --}}


    <div style="padding: 20px; display: flex; justify-content: center">
        <div style="margin: 5px">
            <button onclick="downloadExcel()" class="btn btn-success">Download Excel</button>
        </div>
        <div style="margin: 5px">
            <a href="{{ route('excel.json') }}" target="_blank" class="btn btn-warning">Download Json</a>
        </div>
    </div>

    <h3>Search Data</h3>
    <hr>
    <div>
        <table id="example" class="display">
            <thead>
            <tr>
                <th>ES Value Id</th>

                <th>FAO Biome</th>
                <th>Ecosystem</th>
                <th>TEEB Ecosystem code</th>
                <th>Forest Zone</th>
                <th>Forest Zone Others</th>
                <th>Forest Zone text</th>

                <th>ES Class</th>
                <th>ES Information</th>
                <th>ES All Text</th>
                <th>Sub ES Text</th>
                <th>TEEB subES code</th>
                <th>IUCN Function</th>

                <th>District</th>
                <th>Division</th>
                <th>Site Scale</th>
                <th>study others</th>
                <th>TEEB scale code</th>
                <th>Location Name</th>
                <th>Legal Status</th>
                <th>Study Other_2</th>
                <th>Site Area</th>
                <th>Site Unit</th>
                <th>Site Ha</th>
                <th>Site Condition Text</th>
                <th>Site Condition</th>
                <th>Latitude</th>
                <th>Longitude</th>

                <th>Valuation Method</th>
                <th>Valuation Other_1</th>
                <th>Valuation Other_2</th>
                <th>Valuation Measured Text</th>
                <th>Value Original</th>
                <th>Value total</th>
                <th>Value Currency</th>
                <th>Value Year</th>
                <th>Spatial Unit</th>
                <th>Temporal Unit</th>
                <th>Beneficial Unit</th>
                <th>Beneficial Other_1</th>
                <th>Beneficial Other_2</th>
                <th>Beneficial Number</th>
                <th>Beneficial Text</th>

                <th>Author</th>
                <th>Year Publication</th>
                <th>Title</th>
                <th>Full Reference</th>
                <th>Study Link</th>
                <th>Research Link</th>

                <th>Reviewer Name</th>
                <th>Review Date</th>

                <th>Data Entered By</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>


            @foreach($excel_data as $excel)

                <tr>
                    <td>{{ $excel->es_value_id }}</td>

                    <td>{{ $excel->fao_biome }}</td>
                    <td>{{ $excel->ecosystem }}</td>
                    <td>{{ $excel->ecosystem_teeb }}</td>
                    <td>{{ join(' , ',$excel->zone) }}</td>
                    <td>{{ $excel->others }}</td>
                    <td>{{ $excel->zone_text }}</td>

                    <td>{{ \Illuminate\Support\Str::ucfirst($excel->es_class) }}</td>
                    <td>
                        @foreach($excel->es_bundle as $key=>$bundle)
                            <p>Es Name : <span
                                    style="color: darkgreen; font-weight: bold">{{ $bundle->subes_item }}</span></p>
                            <p>SubES name : <span
                                    style="color: darkgreen; font-weight: bold">{{ $bundle->subes_name }}</span></p>
                            <p>SubES Quantity : <span
                                    style="color: darkgreen; font-weight: bold">{{ $bundle->subes_quantity }}</span></p>
                            <p>SubES Quantity Unit : <span
                                    style="color: darkgreen; font-weight: bold">{{ $bundle->subes_quantity_unit }}</span>
                            </p>
                            <p>SubES Value : <span
                                    style="color: darkgreen; font-weight: bold">{{ $bundle->subes_value }}</span></p>
                            <p>SubES Value Unit: <span
                                    style="color: darkgreen; font-weight: bold">{{ $bundle->subes_value_unit }}</span>
                            </p>
                            <p>SubES Valuation: <span
                                    style="color: darkgreen; font-weight: bold">{{ $bundle->subes_validation }}</span>
                            </p>
                            <p>--------</p>
                        @endforeach
                    </td>
                    <td>{{ $excel->es_text }}</td>
                    <td>{{ $excel->sub_es_text }}</td>
                    <td>{{ $excel->es_teeb }}</td>
                    <td>{{ $excel->iucn }}</td>

                    <td>
                        @foreach($excel->district as $district)
                            <p>{{ $district->district_name }},</p>
                        @endforeach
                    </td>

                    <td>{{ join(' , ',$excel->division) }}</td>
                    <td>{{ $excel->site_scale }}</td>
                    <td>{{ $excel->study_others_1 }}</td>
                    <td>{{ $excel->study_teeb }}</td>
                    <td>{{ $excel->location_name }}</td>
                    <td>{{ $excel->legal_status }}</td>
                    <td>{{ $excel->study_other_2 }}</td>
                    <td>{{ $excel->site_area }}</td>
                    <td>{{ $excel->site_unit }}</td>
                    <td>{{ $excel->site_ha }}</td>
                    <td>{{ $excel->site_condition_text }}</td>
                    <td>{{ $excel->site_condition }}</td>
                    <td>{{ $excel->latitude }}</td>
                    <td>{{ $excel->longitude }}</td>

                    <td>{{ join(',', $excel->valuation_method) }}</td>
                    <td>{{ $excel->valuation_other_1 }}</td>
                    <td>{{ $excel->valuation_other_2 }}</td>
                    <td>{{ $excel->valuation_measured_text }}</td>
                    <td>{{ $excel->value_original }}</td>
                    <td>{{ $excel->value_total }}</td>
                    <td>{{ $excel->value_currency }}</td>
                    <td>{{ $excel->value_year }}</td>
                    <td>{{ $excel->spatial_unit }}</td>
                    <td>{{ $excel->temporal_unit }}</td>
                    <td>{{ join(',',$excel->beneficial_unit) }}</td>
                    <td>{{ $excel->beneficial_other_1 }}</td>
                    <td>{{ $excel->beneficial_other_2 }}</td>
                    <td>{{ $excel->beneficial_number }}</td>
                    <td>{{ $excel->beneficial_text }}</td>

                    <td>{{ $excel->author }}</td>
                    <td>{{ $excel->year_publication }}</td>
                    <td>{{ $excel->title }}</td>
                    <td>{{ $excel->full_reference }}</td>
                    <td>{{ $excel->study_link }}</td>
                    <td>{{ $excel->research_link }}</td>

                    <td>{{ $excel->reviewer_name }}</td>
                    <td>{{ $excel->reviewer_date }}</td>

                    <td>{{ $excel->data_entered_by }}</td>
                    <td>{{ $excel->created->format('d-m-y') }}</td>
                </tr>

            @endforeach
            </tbody>

        </table>


    </div>
</div>

</body>
</html>

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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $("#example").DataTable({
            "lengthMenu": [{{ count($excel_data) + 1 }}, 10, 20, 50, 100, 200, 300]
        });
    });
</script>


<script>

    function downloadExcel() {

        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("#example"));
    }

</script>
