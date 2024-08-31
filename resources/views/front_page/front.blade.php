<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Bangladesh Forest Ecosystem Services Valuation</title>
    <link rel="stylesheet" href="{{ asset('assets_landing_page/css/landing.css') }}"/>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
            integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
<!-- ------------------------------------------------------------ first section ------------------------------------------------------------------  -->

<section id="first_section">
    <!-- ------------------------------------------ first content ---------------------------------------------------- -->
    <div class="content">
        <div class="row" style="margin: 0; padding: 0">
            <!-- -------------------------------------- icon --------------------------------------- -->
            <div class="col-3">
                <div style="display: flex">
                    <img
                        src="{{ asset('assets_landing_page/images/govt_1.png') }}"
                        alt=""
                        class="icon-img-1"
                    />
                    <img
                        src="{{ asset('assets_landing_page/images/govt_2.png') }}"
                        alt=""
                        class="icon-img-2"
                    />
                </div>
            </div>

            <!-- ------------------------------------------------------------------------- end - icon -->

            <!-- --------------------------------------- title -------------------------------------- -->

            <div class="col-6">
                <p class="title">
                    Bangladesh Forest Ecosystem Services Valuation (ESV) Database
                </p>
            </div>

            <!-- ------------------------------------------------------------------------- end - title -->

            <!-- --------------------------------------- login -------------------------------------- -->

            <div class="col-3">
                <div class="login_btn_div">
                    @if(auth()->user() == null)
                        <a href="{{ route('login') }}" style="text-decoration: none">
                            <button class="login_btn">Login</button>
                        </a>
                    @else
                        <div style="display: flex">
                            <a href="@if(auth()->user()->role == "user")  {{ route('user.panel') }} @elseif(auth()->user()->role == "reviewer") {{ route('reviewer.panel') }} @elseif(auth()->user()->role == "admin") {{ route('admin.panel') }} @elseif(auth()->user()->role == 'super-admin') {{ route('super_admin.panel') }} @endif"
                               style="text-decoration: none; margin-right: 5px">
                                <button class="login_btn">Dashboard</button>
                            </a>

                            <a href="{{ route('logout') }}" style="text-decoration: none">
                                <button class="login_btn">Logout</button>
                            </a>
                        </div>

                    @endif
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ end - login -->
        </div>
    </div>

    <!-- ------------------------------------------------------------------------------------------ end - first content -->
</section>

<!-- ----------------------------------------------------------------------------------------------------------------------------- end - first section -->

<!-- -------------------------------------------------------------------- second section ------------------------------------------------------------- -->

<section id="second_section" class="img-fluid">
    <!-- ---------------------------- navbar ------------------------------ -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- <a class="navbar-brand" href="#">Brand</a> -->
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" id="nav-link" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" id="nav-link">Data</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" id="nav-link">Library</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" id="nav-link">Community</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" id="nav-link">BFIS</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ----------------------------------------------------- end - navbar -->

    <!-- ---------------------------- welcome ------------------------------ -->

    <div class="welcome_part">
        <h1 class="welcome_part_h1">
            Connecting People for a Better Forest Management
        </h1>
    </div>

    <div class="welcome_before_end">
        <img
            src="{{ asset('assets_landing_page/images/welcome_before_end.png') }}"
            alt=""
            class="img-fluid"
        />
    </div>

    <!-- ----------------------------------------------------- end - welcome -->
</section>

<!-- ---------------------------------------------------------------------------------------------------------------------------- end -  second section -->

<!-- ------------------------------------------------------------------- third section ---------------------------------------------------------------- -->

<section id="third_section">
    <div>
        <p class="third_section_p">
            The forest ecosystem services and valuation database (ESVD)
        </p>
        <button class="third_section_button">View Data</button>
    </div>
</section>
<!-- ----------------------------------------------------------------------------------------------------------------------------- end - third section  -->

<!-- ------------------------------------------------------------------- forth section ---------------------------------------------------------------- -->
<h4 class="forth_section_header">Background</h4>

<section id="forth_section">
    <div class="forth-section-first">
        <div class="row" style="margin: 0; padding: 0">
            <div class="col-md-5">
                <div class="forth-section-first__div">
                    <h4 class="forth-section-first__title">What is ESV?</h4>
                    <p class="forth-section-first__content">
                        The Compass program is assisting the Bangladesh Forest
                        Department (BFD) to formulate a forest ecosystem valuation (ESV)
                        framework. This framework development exercise is expected to
                        foster national capacity development and knowledge transfer
                        through learning by doing, workshops, and training to BFD and
                        relevant government officials, academicians, and other
                        stakeholders.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ----------------------------------------------------------------------------------------------------------------------------- end -  forth section -->

<!-- ------------------------------------------------------------------- fifth section ---------------------------------------------------------------- -->
<br/>
<section id="forth_section">
    <div class="fifth-section-first">
        <div class="row" style="margin: 0; padding: 0">
            <div class="col"></div>
            <div class="col-md-5">
                <div class="forth-section-first__div">
                    <h4 class="forth-section-first__title">Why ESV?</h4>
                    <p class="forth-section-first__content">
                        The Compass program is assisting the Bangladesh Forest
                        Department (BFD) to formulate a forest ecosystem valuation (ESV)
                        framework. This framework development exercise is expected to
                        foster national capacity development and knowledge transfer
                        through learning by doing, workshops, and training to BFD and
                        relevant government officials, academicians, and other
                        stakeholders.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ------------------------------------------------------------------------------------------------------------------------------ end - fifth section -->

<!-- ------------------------------------------------------------------- sixth section ---------------------------------------------------------------- -->

<br/>
<section id="sixth_section">
    <div class="row" style="margin: 0; padding: 0">
        <div class="col-md-8">
            <div class="footer-left-content">
                <h2 class="footer-left-content__heading">
                    Bangladesh Forest Ecosystem Services Valuation (ESV) Database
                </h2>
                <hr style="background-color: white"/>
                <p class="footer-left-content__p">
                    The Compass program is assisting the Bangladesh Forest Department
                    (BFD) to formulate a forest ecosystem valuation (ESV) framework.
                    This framework development exercise is expected to foster national
                    capacity development and knowledge transfer through learning by
                    doing, workshops, and training to BFD and relevant government
                    officials, academicians, and other stakeholders.
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="footer-right-content">
                <div>
                    <h5 class="footer-left-content__p">About Us</h5>
                    <h5 class="footer-left-content__p">Contact Us</h5>
                    {{--                    <h5 class="footer-left-content__p">FAQ</h5>--}}
                </div>
                <div>
                    <small class="footer-left-content__p"
                    >Funded and Supported by</small
                    >
                </div>
                <div>
                    <img
                        src="assets_landing_page/images/forest_service.png"
                        alt=""
                        class="footer_pic_1"
                    />
                    <img
                        src="{{ asset('assets_landing_page/images/usaid.png') }}"
                        alt=""
                        class="footer_pic_2"
                    />
                </div>
            </div>
        </div>
    </div>
    <p style="text-align: center; padding-bottom: 20px; color: white">
        Designed and developed by SIS Inflexionpoint Technologies
        BD - 2022
    </p>
</section>

<!-- ------------------------------------------------------------------------------------------------------------------------------ end - sixth section -->

{{-- ---------------------------------------------- ajax code part -------------------------------------------------- --}}

<script>

    {{-- ---------------- total visit ------------------ --}}

    axios.post('{{route('visitor-counter')}}');

    {{-- ---------------- total visit ------------------ --}}

</script>

{{-- ---------------------------------------------- ajax code part -------------------------------------------------- --}}


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
{{--<script src="js/landing.js"></script>--}}
</body>
</html>
