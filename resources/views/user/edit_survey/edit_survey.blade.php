<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Edit Surveys</title>
    <link rel="stylesheet" href="{{asset('css/user_home.css')}}"/>

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

<x-user_navbar></x-user_navbar>

<!-- ----------------------------------------------------------------------------------------------------------------------------- end - first section -->

<!-- -------------------------------------------------------- second section -------------------------------------------------------------------------- -->

<div class="container container-padding">
    <h3>Edit Surveys</h3>


    <div>
        <!-- ------------------------------------ Loop Here -------------------------------- -->
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>S/No</th>
                <th>Ecosystem Service Valuation ID</th>
                <th>Date of Submission</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $id = 0 ?>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $id+=1 }}</td>
                    <td>{{ $application->es_value_id }}</td>
                    <td>{{ $application->created_at->format('d-m-y') }}</td>
                    <td>
                        @if($application->status == 'u')
                            Unfinished

                        @elseif($application->status == 'p')
                            Pending For Reviewer Approval

                        @elseif($application->status == 'ur')
                            Under Review

                        @elseif($application->status == 'pa')
                            Pending For Admin Review

                        @elseif($application->status == 'er')
                            Editing Required

                        @elseif($application->status == 'a')
                            Approved

                        @elseif($application->status == 'd')
                            Disapproved
                        @endif
                    </td>
                    <td>
                        @if($application->status == 'u' || $application->status == 'p' || $application->status == 'er')
                            <a href="{{ route('view-edit.survey', $application->es_value_id) }}" class="btn btn-info btn-sm">Edit</a>
                        @endif

                    </td>
                </tr>
            @endforeach

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
