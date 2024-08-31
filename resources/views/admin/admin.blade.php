<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin Dashboard</title>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <link rel="stylesheet" href="{{ asset('css/user_home.css') }}"/>
</head>
<body>
<!-- ------------------------------------------------------------ first section ------------------------------------------------------------------  -->

<x-user_navbar></x-user_navbar>

<!-- ----------------------------------------------------------------------------------------------------------------------------- end - first section -->

<!-- -------------------------------------------------------- second section -------------------------------------------------------------------------- -->

<div class="container container-padding">
    <h3 class="dashboard-text">Dashboard</h3>

    <div class="row" style="margin: 0; padding: 0">
        <!-- ------------------------------------ First Row -------------------------------- -->
        <div class="col-md-12">
            <div class="left-side-div-padding">
                <p class="left-side-div-title">Data Entry Tutorials</p>
                <div class="tutorial text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/B7bCCyrNbPc"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>


    <!-- ------------------------------------ Second Row -------------------------------- -->
    <div class="row" style="margin: 0; padding: 0">
        <!-- ------------------------------------ left side -------------------------------- -->
        <div class="col-md-6">
            <div class="left-side-div-padding">
                <!-- -------------- Database management ---------------- -->
                <div class="col-md-12">
                    <div class="right-side-div-padding">
                        <p class="right-side-div-title">Database Management</p>
                        <div class="right-side-button-div">


                            {{--  -------------------- data list for reviewer ----------------- --}}
                            <div>
                                <a href="{{ route('view-admin-table') }}">
                                    <button class="view-data-button">View Data</button>
                                </a>
                            </div>
                            {{--  -------------------- data list for reviewer ----------------- --}}


                            {{-- ----------------------- review survey ---------------------------- --}}

                            <a href="{{ route('admin.survey') }}">
                                <div>
                                    <button class="view-data-button">Review Surveys</button>
                                </div>
                            </a>

                            {{-- ----------------------- review survey ---------------------------- --}}

                        </div>
                    </div>
                </div>

                <!-- -------------- end - Database management ---------- -->
            </div>
        </div>

        <!-- --------------------------------------------------------- end - left side  -->

        <!-- ------------------------------- right side ------------------------------- -->
        <div class="col-md-6 right-side-mobile">
            <div class="row" style="margin-top: 30px; padding: 0">
                <!-- ------------------- Settings ---------------------- -->
                <div class="col-md-12" style="margin-bottom: 30px;">
                    <div class="right-side-div-padding settings-margin">
                        <p class="settings-title">Settings</p>

                        <!-- -------- change password form ------ -->
                        <div class="change-password-div">
                            <p class="settings-title">Change Password</p>
                            <div class="form-div">
                                <form action="{{ route('change-password') }}" method="post">
                                    {{ csrf_field() }}
                                    <div>
                                        <input
                                            type="text"
                                            class="form-input"
                                            placeholder="Old Password"
                                            name="current_password"
                                        />
                                    </div>

                                    <div>
                                        <input
                                            type="text"
                                            class="form-input"
                                            placeholder="new Password"
                                            name="new_password"
                                        />
                                    </div>

                                    <div>
                                        <input
                                            type="text"
                                            class="form-input"
                                            placeholder="Confirm New Password"
                                            name="verify_password"
                                        />
                                    </div>
                                    <div>
                                        <input
                                            type="submit"
                                            class="submit"
                                            value="Change Password"
                                        />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- --------- end - change password form -->
                    </div>

                    <h4 style="text-align: center">{{ session('password_change') }}</h4>
                </div>

                <!-- ------------------------------------ end - Settings -->
            </div>
        </div>
        <!-- --------------------------------------------------------- end - right side -->
    </div>
</div>

<!-- ----------------------------------------------------------------------------------------------------------------------------- end - second section -->

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
</body>
</html>
