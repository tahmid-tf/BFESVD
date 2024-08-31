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
    <title>Data Entry And QC Info</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>
<body>
{{-- --------------------------------- navbar ------------------------------------ --}}

<x-navbar></x-navbar>

{{-- --------------------------------- navbar ------------------------------------ --}}

<section class="container">

    {{--  ---------------------------- rendered by blade template --------------------------------------------- --}}
    <h2 style="text-align: center; margin-bottom: 20px">Data Entry And QC Info</h2>
    <form action="{{ route('data.store') }}" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="es_value_id" value="{{ session('tracker') }}">
        <!-- data entered by -->
        <lebel>Data Entered By
            <span class="popup" onclick="myFunction()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup">Name of researcher/intern who entered the data</span>
            </span>
        </lebel>
        <br>
        <input type="text" name="data_entered_by" value="{{ auth()->user()->name }}"><br><br>


        <!-- reviewed by name section -->
        <lebel>Reviewer Name
            <span class="popup" onclick="myFunction40()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup40">Name of reviewer</span>
            </span>
        </lebel>
        <br>
        <input type="text" name="reviewer_name" @if(auth()->user()->role == "user") readonly @endif> <br><br>

        <!-- reviewed by date section -->
        <lebel>Reviewer Date
            <span class="popup" onclick="myFunction40()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup40">Reviewed date</span>
            </span>
        </lebel>
        <br>
        <input type="date" name="reviewer_date" @if(auth()->user()->role == "user") readonly @endif> <br><br>

        <!-- survey status section -->
        <lebel>Notes
            <span class="popup" onclick="myFunction4()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup4">Comments regarding the value/quantity information or any other important observation regarding the study.</span>
            </span>
        </lebel>
        <br>

        <br>

        <textarea name="notes" id="" cols="30" rows="10" @if(auth()->user()->role == "user") readonly @endif></textarea>

        <div class="nextButton" style="text-align: left">
            <button class="btn btn-success">Save</button>
        </div>
    </form>

    {{--  ---------------------------- rendered by blade template --------------------------------------------- --}}

</section>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<script>
    // When the user clicks on div, open the popup
    function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }

    function myFunction4() {
        var popup = document.getElementById("myPopup4");
        popup.classList.toggle("show");
    }

</script>
