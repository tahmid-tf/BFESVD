<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}">
    <title>Bilbliographic Details</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>
<body>

{{-- --------------------------------- navbar ------------------------------------ --}}

<x-navbar></x-navbar>

{{-- --------------------------------- navbar ------------------------------------ --}}


<section class="container">

    {{--  ------------------------------ laravel blade form format for this page -------------------------------- --}}

    <h2 style="text-align: center; margin-bottom: 20px">Bibliographic Details</h2>
    <form action="{{ route('bibilographic.store') }}" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="es_value_id" value="{{ session('tracker') }}">

        <!-- Authors -->
        <label style="font-weight: 600">Authors
            <span class="popup" onclick="myFunction()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup">Author names directly copied from the study.</span>
            </span>
        </label>
        <br>
        <textarea name="author" required></textarea><br>

        <!-- Year Publication -->
        <label style="font-weight: 600">Year Publication
            <span class="popup" onclick="myFunction2()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup2">The year in which the study was published.</span>
            </span>
        </label>
        <br>
        <input type="" name="year_publication" required><br>

        <!-- title -->
        <label style="font-weight: 600">Title
            <span class="popup" onclick="myFunction3()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup3">The title of the publication directly copied from the study.</span>
            </span>
        </label>
        <br>
        {{--        <input type="" name="title" required><br>--}}

        <textarea name="title"></textarea><br>


        <!-- fullReference -->
        <label style="font-weight: 600">Full Reference
            <span class="popup" onclick="myFunction4()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup4">Full reference in APA format. </span>
            </span>
        </label>
        <br>
        <textarea name="full_reference" required></textarea><br>

        <!-- Study Link -->
        <label style="font-weight: 600">Study Link
            <span class="popup" onclick="myFunction5()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext"
                    id="myPopup5">Website or PDF link of the reference. Leave blank if unavailable.</span>
            </span>
        </label>
        <br>
        <textarea name="study_link"></textarea><br>


        <!-- Study Link -->
        <label style="font-weight: 600">Upload the google drive link for research
            <span class="popup" onclick="myFunction6()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext"
                    id="myPopup6">Accessible link of the study. This will be used only for review purposes and will not be visible to public eyes.</span>
            </span>
        </label>
        <br>
        <textarea name="research_link" required></textarea><br>

        <div class="nextButton" style="text-align: left">
            <button class="btn btn-success">Next</button>
        </div>

    </form>

    {{--  ------------------------------ laravel blade form format for this page -------------------------------- --}}

</section>


{{-- ------------------------ ajax call ------------------------------ --}}



{{-- ------------------------ ajax call ------------------------------ --}}

<script>
    // When the user clicks on div, open the popup
    function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }

    function myFunction2() {
        var popup = document.getElementById("myPopup2");
        popup.classList.toggle("show");
    }

    function myFunction3() {
        var popup = document.getElementById("myPopup3");
        popup.classList.toggle("show");
    }

    function myFunction4() {
        var popup = document.getElementById("myPopup4");
        popup.classList.toggle("show");
    }

    function myFunction5() {
        var popup = document.getElementById("myPopup5");
        popup.classList.toggle("show");
    }

    function myFunction6() {
        var popup = document.getElementById("myPopup6");
        popup.classList.toggle("show");
    }
</script>
