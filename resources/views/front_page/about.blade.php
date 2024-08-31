<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bangladesh Forest Ecosystem Services Valuation</title>
    <link rel="stylesheet" href="{{ asset('assets_contact_about_us/css/landing.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <!-- chart js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- chart js end -->
</head>

<body>
    <!-- ------------------------------------------------------------ first section ------------------------------------------------------------------  -->

    <section id="second_section" class="img-fluid">



        <div class="welcome_part">
            <h1 class="welcome_part_h1">About Us</h1>
        </div>

    </section>

    <!-- ----------------------------------------------------------------------------------------------------------------------------- end - first section -->

    <!-- -------------------------------------------------------------------- second section ------------------------------------------------------------- -->

    <x-navbar_before_title></x-navbar_before_title>

    <!-- ---------------------------------------------------------------------------------------------------------------------------- end -  second section -->

    <!-- ------------------------------------------------------------------- third section ---------------------------------------------------------------- -->

    <section id="third_section">
        <div>
            <div class="statistic-data" style="margin-top: 30px; margin-bottom: 50px">
                <div class="email-image">
                    <img {{-- src="{{ asset('storage/'.\App\About::aboutUsImage()->image)  }}" --}}
                        src="{{ \App\About::aboutUsImage() != null ? asset('storage/' . \App\About::aboutUsImage()->image) : asset('assets_contact_about_us/images/sal 1.png') }}"
                        style="margin-top: 25px" />
                </div>
                <div class="email-form-wrap">
                    <p style="padding: 20px; max-width: 700px">

                        @foreach (\App\About::aboutUsContent() as $about)
                            <b>{{ $about->title }}</b> <br />
                            {{ $about->content }}<br /><br />
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------------------------------------------------------------------------------------------------------------- end - third section  -->

    <!-- ------------------------------------------------------------------- sixth section ---------------------------------------------------------------- -->

    <br />


    <x-public_footer></x-public_footer>

    <!-- ------------------------------------------------------------------------------------------------------------------------------ end - sixth section -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    {{-- <script src="js/landing.js"></script> --}}
</body>

</html>
