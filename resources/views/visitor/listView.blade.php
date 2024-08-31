<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>List View</title>
    <link rel="stylesheet" href="{{ asset('map_and_list_view/css/user_home.css') }}"/>

    <!-- data table links -->
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css"
    />
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
{{--    <h3>Search Keywords : Economic Service Class, Forest Zone, Location</h3>--}}


    <div>
        <table
            id="example"
            class="display"
            style="width: 100%; text-align: center"
        >
            <thead>
            <tr>
                <th>Valuation Database</th>
            </tr>
            </thead>
            <tbody>


            <!--------------------- loop start here ----------------------->

            @foreach($applications as $application)

                <tr>
                    <td>
                        <div>
                            <div class="table-title">
                                <div class="title-left">
                                    <h4>ESV ID : {{ $application->es_value_id }}</h4>
                                </div>
                                <div class="title-right">
                                    <a href="{{ route('view-single-data',$application->es_value_id) }}">Detailed
                                        Information</a>
                                </div>
                            </div>
                            <div class="table-info" style="background-color: transparent; text-align: left">
                                <table style="width: 100%;">
                                    <tr>
                                        <td>Ecosystem Class</td>
                                        <td>{{ \App\Es::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->es_class ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Forest Zone</td>
                                        <td>
                                            {{--  --------------------------------------- laravel string replace --------------------------------------------- --}}

                                            {{ str_replace(array('[',']',"\""), ' ', \App\Ecosystem::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->zone ?? 'N/A') . ', '. \App\Ecosystem::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->others  }}

                                            {{--  --------------------------------------- laravel string replace --------------------------------------------- --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sub Ecosystem All Text</td>
                                        <td>{{ \App\Es::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->sub_es_text ?? 'N/A' }}</td>

                                    </tr>
                                    <tr>
                                        <td>Value Original</td>
                                        <td>{{ \App\Valuation::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->value_original ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Valuation Method</td>
                                        <td>{{ str_replace(array('[',']',"\""), ' ', \App\Valuation::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->valuation_method ?? 'N/A') }}</td>

                                    </tr>
                                    <tr>
                                        <td>Value Year</td>
                                        <td>{{ \App\Valuation::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->value_year ?? 'N/A' }}</td>

                                    </tr>
                                    <tr>
                                        <td>Reference</td>
                                        <td>{{ \App\Bibilographic::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->full_reference ?? 'N/A' }}</td>

                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>

            @endforeach

            <!--------------------- loop end here ----------------------->


            </tbody>
        </table>

    </div>


    <!-- datatable script -->
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
            $("#example").DataTable();
        });
    </script>
    <!-- datatable script end -->


</body>
</html>
