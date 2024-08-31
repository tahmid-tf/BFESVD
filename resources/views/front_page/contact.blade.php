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

    @if (session('mail-contact'))
        <p style="background-color: lightgreen; margin: 0; padding: 0; padding: 10px; text-align: center">Mail sent
            successfully</p>
    @endif


    <x-public_navbar></x-public_navbar>

    <!-- ----------------------------------------------------------------------------------------------------------------------------- end - first section -->

    <!-- -------------------------------------------------------------------- second section ------------------------------------------------------------- -->

    <section id="second_section" class="img-fluid">
        <x-navbar_before_title></x-navbar_before_title>
        <div class="welcome_part">
            <h1 class="welcome_part_h1">Contact Us</h1>
        </div>

    </section>
    <!-- ---------------------------------------------------------------------------------------------------------------------------- end -  second section -->

    <!-- ------------------------------------------------------------------- third section ---------------------------------------------------------------- -->

    <section id="third_section">
        <div>
            <h1 class="contact-title">Have some question ?</h1>
            <div class="statistic-data">
                <div class="email-image">
                    <img src="{{ asset('assets_contact_about_us/images/fxemoji_email.png') }}" />
                </div>
                <div class="email-form-wrap">
                    <form class="email-form" method="post" action="{{ route('send-contact-mail') }}">
                        {{ csrf_field() }}
                        <input class="email-input" type="text" name="name" placeholder="USER NAME" />
                        <input class="email-input" type="email" name="email" placeholder="EMAIL" />
                        <textarea class="question-input" name="question" placeholder="YOUR QUESTION ..."></textarea>
                        <input class="email-submit-button" type="submit" value="SEND MESSAGE" name="submit" />
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script></script>

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
    <script src="assets_contact_about_us/js/landing.js"></script>
</body>

</html>
