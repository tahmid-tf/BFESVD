<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Approved Data List</title>
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

<x-user_navbar></x-user_navbar>

<!-- ----------------------------------------------------------------------------------------------------------------------------- end - first section -->

<!-- -------------------------------------------------------- second section -------------------------------------------------------------------------- -->

<div id="app">
    <div>
        <div class="container container-padding">
            <h3>Data List</h3>

{{--            <h4 class="mt-4">Showing: 5 entries</h4>--}}

            <div class="row" style="margin: 0; padding: 0">
                <!-- ------------------------------------ Loop Here -------------------------------- -->
                @foreach($applications as $application)

                    <div class="table-title mt-4">
                        <div class="table-title-left">
                            <h3 class="ml-3">ESV ID : {{ $application->es_value_id }}</h3>
                        </div>
                        <div class="table-title-right mr-3">
                            <a class="p-2" href="{{ route('view-single-data',$application->es_value_id) }}">Detailed Information</a>
                        </div>
                    </div>
                    <table style="width:100%">
                        <tr>
                            <th>Ecosystem Class</th>
                            <td>{{ \App\Es::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->es_class ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Forest Zone</th>
                            <td>
                                {{--  --------------------------------------- laravel string replace --------------------------------------------- --}}

                                {{ str_replace(array('[',']',"\""), ' ', \App\Ecosystem::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->zone ?? 'N/A') . ' , '. \App\Ecosystem::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->others }}

                                {{--  --------------------------------------- laravel string replace --------------------------------------------- --}}

                            </td>
                        </tr>
                        <tr>
                            <th>Sub Ecosystem All Text</th>
                            <td>{{ \App\Es::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->sub_es_text ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Value Original</th>
                            <td>{{ \App\Valuation::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->value_original ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Valuation Method</th>
                            <td>{{ str_replace(array('[',']',"\""), ' ', \App\Valuation::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->valuation_method ?? 'N/A') }}</td>
                        </tr>
                        <tr>
                            <th>Value Year</th>
                            <td>{{ \App\Valuation::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->value_year ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Reference</th>
                            <td>{{ \App\Bibilographic::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->full_reference ?? 'N/A' }}</td>
                        </tr>
{{--                        <tr>--}}
{{--                            <th>Legal Status</th>--}}
{{--                            <td>{{ str_replace('_',' ',\App\Study::where('es_value_id','=',$application->es_value_id)->orderBy('id','desc')->first()->legal_status ?? 'N/A' ) }}</td>--}}
{{--                        </tr>--}}
                    </table>
                    <!-- table loop end here -->
            @endforeach

            </div>

            <br><br>
            <div style="display: flex; justify-content: center">
                {{ $applications->links() }}
            </div>


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
        </div>
    </div>


</body>
</html>

<!-- ------------------------------ ajax call --------------------------------------- -->


<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'f'
        },
        methods: {},
        mounted() {
        }
    })
</script>

<!-- ------------------------------ ajax call --------------------------------------- -->
