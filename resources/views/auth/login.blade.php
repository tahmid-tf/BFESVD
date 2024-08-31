{{-- ----------------------------------------------------------------------- Test phase ------------------------------------------------------------------ --}}


<!DOCTYPE html>
<html>
<head>
    <title>Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/sign_in.css') }}" />
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
        rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap"
        rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
        rel="stylesheet"
    />
</head>
<body>
<!---------------------------------------------- navbar   ------------------------------------------------------->

<div class="content">
    <nav
        class="navbar navbar-expand-lg navbar-light"
        style="background-color: transparent"
    >
        <a
            class="navbar-brand"
            href="#"
            id="navbar-brand"
            style="color: #243413"
        >Bangladesh Forest Ecosystem Services Valuation (ESV) Database
        </a>
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
            <!-- <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#"
                  >Sign Up <span class="sr-only">(current)</span></a
                >
              </li>

              <li class="nav-item active">
                <button class="btn btn-outline-success nav-btn-language">
                  English
                </button>
              </li>
            </ul> -->
        </div>
    </nav>
</div>

<!------------------------------------------ end - navbar   ----------------------------------------------------->

<!---------------------------------------------- Login form   --------------------------------------------------->

<div class="test">
    <div class="row" style="margin: 0; padding: 0">
        <div class="col-md-12">
            <div>
                <div class="contain">
                    <h1 class="sign-title">Sign in</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label for="" style="margin-bottom: -30px; font-weight: 600"
                        >Email</label
                        >
                        <input placeholder="" id="email" type="email" class="input-email form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <label
                            for=""
                            style="
                    margin-bottom: -30px;
                    margin-top: 10px;
                    font-weight: 600;
                  "
                        >Password</label
                        >
                        <input id="password" type="password" class="input-password form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <div class="submit-btn-div">
                            <button class="input-button">{{ __('Login') }}</button>
                        </div>
                        <div class="remember-token-and-help">
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                                />
                                <label class="form-check-label" for="exampleCheck1"
                                >Remember me</label
                                >
                            </div>

                            @if (Route::has('password.request'))

{{--                                <a href="" class="forget_password">Forget Password?</a>--}}

                                <a class="forget_password" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------ end - Login form   --------------------------------------------------->
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
