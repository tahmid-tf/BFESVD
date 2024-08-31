<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>View Users</title>
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
    <h3>View Users</h3>


    <div>
        <!-- ------------------------------------ Loop Here -------------------------------- -->
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>S/No</th>
                <th>Full Name</th>
                <th>Institution</th>
                <th>Education</th>
                <th>Purpose</th>
                <th>Email</th>
                <th>Address</th>
                <th>Role</th>
                <th>User</th>
                <th>Admin</th>
                <th>Reviewer</th>
                <th>Hold</th>
            </tr>
            </thead>
            <tbody>
            <?php $id = 0; ?>
            @foreach($users as $user)
                <tr>
                    <td>{{ $id+=1 }}</td>
                    <td>{{ $user->name ?? '' }}</td>
                    <td>{{ $user->institution ?? ''}}</td>
                    <td>{{ $user->education ?? ''}}</td>
                    <td>{{ $user->purpose ?? ''}}</td>
                    <td>{{ $user->email ?? ''}}</td>
                    <td>{{ $user->address ?? ''}}</td>
                    <td style="color: blue">{{ \Illuminate\Support\Str::ucfirst($user->role ?? '') }}</td>

                    @if($user->role != "super-admin")

                    <td>
                        <a href="{{ route('user-role-permission',['user',$user->id]) }}" class="btn btn-success btn-sm">User</a>
                    </td>

                    <td>
                        <a href="{{ route('user-role-permission',['admin',$user->id]) }}" class="btn btn-success btn-sm">Admin</a>
                    </td>

                    <td>
                        <a href="{{ route('user-role-permission',['reviewer',$user->id]) }}" class="btn btn-success btn-sm">Reviewer</a>
                    </td>

                    <td>
                        <a href="{{ route('user-role-permission',['waiting',$user->id]) }}" class="btn btn-danger btn-sm">Hold</a>
                    </td>
                    @else
                        <td>
                        </td>

                        <td>
                        </td>

                        <td>
                        </td>

                        <td>
                        </td>
                    @endif
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
</div>

</body>
</html>
