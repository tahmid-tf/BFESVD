    <!-- ---------------------------- navbar ------------------------------ -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- <a class="navbar-brand" href="#">Brand</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" id="nav-link" href="{{ env('FOLDER_STRUCTURED_ROOT') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('visitor-list-view') }}" id="nav-link">Data</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="http://bfis.bforest.gov.bd/bfis/" id="nav-link"
                        target="_blank">BFIS</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ----------------------------------------------------- end - navbar -->
