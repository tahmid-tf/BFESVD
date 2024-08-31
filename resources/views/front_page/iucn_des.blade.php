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

    <!-- data table links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css" />
</head>

<body>
    <!-- ------------------------------------------------------------ first section ------------------------------------------------------------------  -->

    <x-public_navbar></x-public_navbar>

    <!-- ----------------------------------------------------------------------------------------------------------------------------- end - first section -->

    <!-- -------------------------------------------------------------------- second section ------------------------------------------------------------- -->

    <section id="second_section" class="img-fluid">
        <x-navbar_before_title></x-navbar_before_title>
        <div class="welcome_part">
            <h1 class="welcome_part_h1">
                IUCN Function Description
            </h1>
        </div>

    </section>

    <!-- ---------------------------------------------------------------------------------------------------------------------------- end -  second section -->

    <!-- ------------------------------------------------------------------- third section ---------------------------------------------------------------- -->

    <section id="third_section">
        <div class="teeb-table">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th colspan="2" style="text-align: center;">IUCN Function</th>
                        <th style="text-align: center;">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Primary</td>
                        <td>Primary ecological function</td>
                        <td>Primary ecological functions are the services required for the production of all other
                            natural ecosystems services. They are originated from the functional processes of ecosystems
                            that occur without human intervention and this, irrespective of their direct utilization by
                            human. These are notably production services that directly yield ecosystems products such as
                            soil formation, nutrients and water recycling and primary production.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Secondary</td>
                        <td>Secondary ecological function</td>
                        <td>These are services obtained from the ecosystem regulatory processes such as maintenance of
                            air quality, climate regulation, water regulatory processes (ground water recharge,
                            levelling-off peak floods etc.), water purification and waste treatment, biological
                            regulations (plant diseases), pollination, and storm regulation.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Potential</td>
                        <td>Potential of nature</td>
                        <td>The potential of nature represents the potential value associated with the various services
                            provided by a natural ecosystem in the absence of any use by human. It can only be under
                            effective utilization if anthropogenic inputs, such as infrastructures, are brought into the
                            natural ecosystems by human
                            beings.</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Actual</td>
                        <td>Actual use</td>
                        <td>Economic, recreational and cultural activities are the benefits which human enjoys through
                            the effective use of ecological services of natural ecosystems. The actual use of such
                            services can be materialized through religious and cultural values, scientific interest,
                            educational value, inspiration for arts and
                            architecture as well as the beauty of landscapes.</td>
                    </tr>
                </tbody>
            </table>
            <p>Source: Somda, J. and Awaïss, A. (2013). Economic valuation of ecological functions and services of
                natural ecosystems : Guide on the use of simple methods. Ouagadougou, Burkina
                Faso : IUCN. 32pp.</p>
        </div>
    </section>
    <!-- ----------------------------------------------------------------------------------------------------------------------------- end - third section  -->



    <!-- ------------------------------------------------------------------- sixth section ---------------------------------------------------------------- -->

    <br />
    <x-public_footer></x-public_footer>

    <!-- ------------------------------------------------------------------------------------------------------------------------------ end - sixth section -->

    <!-- datatable script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#example").DataTable();
        });
    </script>
    <!-- datatable script end -->
</body>

</html>
