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
            <h1 class="welcome_part_h1"> Valuation Methods </h1>
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
                        <th style="text-align: center;">Valuation method</th>
                        <th style="text-align: center;">Example ecosystem service</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Choice Modelling (Discrete Choice Experiment; Conjoint Analysis)</td>
                        <td>Biodiversity; recreation; landscape aesthetics; flood risk attenuation</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Contingent Valuation</td>
                        <td>Biodiversity; recreation; landscape aesthetics; flood risk attenuation</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Damage Cost Avoided</td>
                        <td>Coastal protection by dunes; river flow control by wetlands; landslide protection by
                            forests; carbon
                            sequestration
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Defensive Expenditure</td>
                        <td>Recreation and aesthetic values from protected areas</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Group Valuation (Participatory Valuation)</td>
                        <td>Biodiversity; recreation; landscape aesthetics; flood risk attenuation</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Hedonic Pricing</td>
                        <td>Urban green open space; air quality moderated by ecosystems</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Input-Output Modelling</td>
                        <td>Ecosystem inputs into agriculture; or into the tourism sector</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Market Prices (Gross Revenue)</td>
                        <td>Timber and fuel wood from forests; clean water from wetlands</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Net Factor Income (Residual Value; Resource Rent)</td>
                        <td>Filtration of water by wetlands; commercial fisheries supported by coastal wetlands</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Opportunity Cost</td>
                        <td>The opportunity cost of ecosystem services from a natural ecosystem might be the value of
                            agricultural output if the land is converted to agricultural instead of conserved in a
                            natural
                            state.
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Production Function</td>
                        <td>Soil quality or water quality as an input to agricultural production</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Public Pricing</td>
                        <td>Watershed protection to provide drinking water; Purchase of land for protected area</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Replacement Cost</td>
                        <td>Coastal protection by dunes (replaced my seawalls); water storage and filtration by wetlands
                            (replaced by reservation and filtration plant)
                        </td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Restoration Cost</td>
                        <td>Coastal protection by dunes; water storage and filtration by wetlands</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Social Cost of Carbon</td>
                        <td>Carbon sequestered and stored by protected or restored forests</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Travel Cost</td>
                        <td>Recreational use of national parks</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Value Transfer (Benefits Transfer)</td>
                        <td>Biodiversity; recreation; landscape aesthetics; flood risk attenuation</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Other</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p>Source: TEEB Valuation Database.</p>
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
