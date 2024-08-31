<section id="first_section" style="background-color: #243413">
    <!-- ------------------------------------------ first content ---------------------------------------------------- -->
    <div class="content">
        <div class="row" style="margin: 0; padding: 0">
            <!-- -------------------------------------- icon --------------------------------------- -->
            <div class="custom-width-3">
                <div style="display: flex">
                    <a href="@if(auth()->user()->role == "user") {{ route('user.panel') }} @elseif(auth()->user()->role == "reviewer") {{ route('reviewer.panel') }} @elseif(auth()->user()->role == "admin") {{ route('admin.panel') }} @elseif(auth()->user()->role == 'super-admin') {{ route('super_admin.panel') }} @endif">
                        <div class="first-img-div">
                            <img
                                src="{{ asset('assets_landing_page_v2/images/govt_1.png') }}"
                                alt=""
                                class="icon-img-1 govt-1-pic"
                            />
                        </div>

                        <div>
                            <img
                                src="{{ asset('assets_landing_page_v2/images/govt_2.png') }}"
                                alt=""
                                class="icon-img-2 mobile-img govt-2-pic"
                            />
                        </div>

                    </a>

                </div>
            </div>

            <!-- ------------------------------------------------------------------------- end - icon -->

            <!-- --------------------------------------- title -------------------------------------- -->

            <div class="custom-width-6">
                <a href="@if(auth()->user()->role == "user") {{ route('user.panel') }} @elseif(auth()->user()->role == "reviewer") {{ route('reviewer.panel') }} @elseif(auth()->user()->role == "admin") {{ route('admin.panel') }} @elseif(auth()->user()->role == 'super-admin') {{ route('super_admin.panel') }} @endif">
                    <p class="title" style="margin-top: 10px">
                        Bangladesh Forest Ecosystem Services Valuation (ESV) Database
                    </p>
                </a>
            </div>

            <!-- ------------------------------------------------------------------------- end - title -->

            <!-- --------------------------------------- login -------------------------------------- -->


            <div class="custom-width-3">
                <div class="login_btn_div" style="display: flex; justify-content: space-between">
                    @if(auth()->user() == null)
                        <div style="display: flex">
                            <div style="display: flex; margin-top: 10px" class="media">
                                <a href="{{ route('login') }}" style="text-decoration: none">
                                    <button class="login_btn">Login</button>
                                </a>

                                <a href="{{ route('register') }}" style="text-decoration: none">
                                    <button class="login_btn">Register</button>
                                </a>

                                <a href="{{ env('FOLDER_STRUCTURED_ROOT') }}">
                                    <img src="{{ asset('assets_landing_page_v2/images/home.png') }}" alt=""
                                         class="home-icon">
                                </a>
                            </div>
                        </div>
                    @else
                        <div style="display: flex; margin-top: 10px">
                            <div style="display: flex" class="media">
                                <a href="{{ env('FOLDER_STRUCTURED_ROOT') }}"
                                   style="text-decoration: none; margin-right: 5px">
                                    <button class="login_btn">Home</button>
                                </a>

                                <a href="{{ route('logout') }}" style="text-decoration: none">
                                    <button class="login_btn">Logout</button>
                                </a>
                            </div>
                        </div>

                        <a href="{{ env('FOLDER_STRUCTURED_ROOT') }}">
                            <img src="{{ asset('assets_landing_page_v2/images/home.png') }}" alt=""
                                 class="home-icon">
                        </a>

                    @endif

                    <div class="second-img-div">
                        <img
                            src="{{ asset('assets_landing_page_v2/images/govt_2.png') }}"
                            alt=""
                            class="icon-img-2 desktop-image govt-2-pic"
                        />
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ end - login -->
        </div>
    </div>

    <!-- ------------------------------------------------------------------------------------------ end - first content -->


    <style>

        .home-icon {
            width: 30px;
            margin-top: 10px;
            margin-left: 8px
        }

        .custom-width-3 {
            width: 25%;
        }

        .custom-width-6 {
            width: 50%;
        }

        .govt-1-pic {
            width: 45px;
        }

        .govt-2-pic {
            width: 42px;
        }

        .mobile-img {
            display: none;
        }

        .govt-1-pic {
            margin-top: 10px;
        }

        .first-img-div {
            margin-left: 30%;
        }

        .second-img-div {
            margin-right: 8%;
        }

        @media only screen and (max-width: 600px) {

            .custom-width-3 {
                width: 32%;
            }

            .custom-width-6 {
                width: 0%;
                display: none;
            }

            .first-img-div {
                margin-left: 0%;
            }

            .second-img-div {
                margin-right: 0%;
            }

            .login_btn_div {
                display: flex;
                justify-content: right;
                padding-right: 10px;
            }

            img.govt-1-pic {
                margin-top: 10px;
                width: 35px;
            }

            .govt-2-pic {
                width: 35px;
            }

            /*.media {*/
            /*    flex-wrap: wrap;*/
            /*}*/
            .mobile-img {
                display: none;
            }

            .desktop-image {
                display: inline;
            }

            .govt-1-pic {
                margin-top: 0px;
            }
        }
    </style>
</section>
