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
    <form action="{{ route('data.update',session('tracker')) }}" method="post">
        {{ csrf_field() }}
        @method('put')

        <input type="hidden" name="es_value_id" value="{{ session('tracker') }}">
        <!-- data entered by -->
        <lebel>Data Entered By
            <span class="popup" onclick="myFunction()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup">Name of researcher/intern who entered the data</span>
            </span>
        </lebel>
        <br>
        <input type="text" name="data_entered_by" value="{{ $tracking->data_entered_by }}"><br><br>


    <!-- reviewed by name section -->
        <lebel>Reviewer Name
            <span class="popup"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup40">Name of reviewer</span>
            </span>
        </lebel>
        <br>
        <input type="text" name="reviewer_name" @if(auth()->user()->role == "user") readonly
               @endif value="{{ $tracking->reviewer_name  }}"> <br><br>

        <!-- reviewed by date section -->
        <lebel>Reviewer Date
            <span class="popup" onclick="myFunction40()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup40">Reviewed date</span>
            </span>
        </lebel>
        <br>
        <input type="date" name="reviewer_date" @if(auth()->user()->role == "user") readonly
               @endif value="{{ $tracking->reviewer_date  }}"> <br><br>

        <lebel>Notes
            <span class="popup" onclick="myFunction4()"> <i class="fas fa-info-circle"></i>
              <span class="popuptext" id="myPopup4">Comments regarding the value/quantity information or any other important observation regarding the study.</span>
            </span>
        </lebel>

        <br>

        <textarea name="notes" id="" cols="30" rows="10"
                  @if(auth()->user()->role == "user") readonly @endif>{{  $tracking->notes }}</textarea>


        <div class="nextButton" style="text-align: left">
            <button class="btn btn-secondary">Save</button>
        </div>
        <br><br>
    </form>

    {{--  ----------------------------------------------------------------------------- reviewer option in form ------------------------------------------------------ --}}

    @if(auth()->user()->role === "reviewer")
        <div>
            <a href="{{ route('reviewer.decision',[$tracking->es_value_id,'pa']) }}" type="btn" class="btn btn-success">Recommend for approval</a>
            <a href="{{ route('reviewer.decision',[$tracking->es_value_id,'d']) }}" type="btn" class="btn btn-danger">Disapprove</a>
            <a href="{{ route('reviewer.decision',[$tracking->es_value_id,'er']) }}" type="btn" class="btn btn-warning">Edit Required</a>
        </div>
    @endif

    {{--  ------------------------------------------------------------------------------- reviewer option in form ---------------------------------------------------- --}}


    {{--  ----------------------------------------------------------------------------- admin option in form ------------------------------------------------------ --}}

    @if(auth()->user()->role === "admin")
        <div>
            <a href="{{ route('admin.decision',[$tracking->es_value_id,'a']) }}" type="btn" class="btn btn-success">Approve</a>
            <a href="{{ route('admin.decision',[$tracking->es_value_id,'d']) }}" type="btn" class="btn btn-danger">Disapprove</a>
        </div>
    @endif

    {{--  ------------------------------------------------------------------------------- admin option in form ---------------------------------------------------- --}}

    {{--  ----------------------------------------------------------------------------- super admin option in form ------------------------------------------------------ --}}

    @if(auth()->user()->role === "super-admin")
        <div>
            <a href="{{ route('super-admin.decision',[$tracking->es_value_id,'er']) }}" type="btn" class="btn btn-warning">Edit Required</a>
            <a href="{{ route('super-admin.decision',[$tracking->es_value_id,'a']) }}" type="btn" class="btn btn-success">Approve</a>
            <a href="{{ route('super-admin.decision',[$tracking->es_value_id,'d']) }}" type="btn" class="btn btn-danger">Disapprove</a>
        </div>
    @endif

    {{--  ------------------------------------------------------------------------------- super admin option in form ---------------------------------------------------- --}}


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
