<section class="nav-bar">
    <!-- nav bar -->
    <nav class="nav nav-pills nav-fill">
        <a class="nav-link" href="@if(auth()->user()->role == 'user') {{ route('user.panel') }} @elseif(auth()->user()->role == 'reviewer') {{ route('reviewer.panel') }} @elseif(auth()->user()->role == 'admin') {{ route('admin.panel') }} @elseif(auth()->user()->role == 'super-admin') {{ route('super_admin.panel') }} @endif">Dashboard</a>

        {{-- --------------------------------- ecosystem ------------------------------------- --}}

                @if(\App\Ecosystem::where('es_value_id','=',session('tracker'))->orderBy('id', 'desc')->count() <= 0)
                    <a class="nav-link" aria-current="page" href="{{ route('ecosystem.index') }}"
                    >Add Ecosystem Information</a
                    >
                @else
                    <a class="nav-link" aria-current="page" href="{{ route('ecosystem.edit',session('tracker')) }}"
                    >Edit Ecosystem Information</a
                    >
                @endif

        {{-- --------------------------------- ecosystem ------------------------------------- --}}

        {{-- --------------------------------- es ------------------------------------- --}}

        @if(\App\Es::where('es_value_id','=',session('tracker'))->orderBy('id', 'desc')->count() <= 0)
            <a class="nav-link" aria-current="page" href="{{ route('es.index') }}"
            >Add ES & SubES Information</a
            >
        @else
            <a class="nav-link" aria-current="page" href="{{ route('es.edit',session('tracker')) }}"
            >Edit ES & SubES Information</a
            >
        @endif

        {{-- --------------------------------- es ------------------------------------- --}}

        {{-- --------------------------------- study ------------------------------------- --}}

        @if(\App\Study::where('es_value_id','=',session('tracker'))->orderBy('id', 'desc')->count() <= 0)
            <a class="nav-link" aria-current="page" href="{{ route('study.index') }}"
            >Add Study Site Information</a
            >
        @else
            <a class="nav-link" aria-current="page" href="{{ route('study.edit',session('tracker')) }}"
            >Edit Study Site Information</a
            >
        @endif

        {{-- --------------------------------- study ------------------------------------- --}}

        {{-- --------------------------------- valuation ------------------------------------- --}}

        @if(\App\Valuation::where('es_value_id','=',session('tracker'))->orderBy('id', 'desc')->count() <= 0)
            <a class="nav-link" aria-current="page" href="{{ route('valuation.index') }}"
            >Add Valuation Information</a
            >
        @else
            <a class="nav-link" aria-current="page" href="{{ route('valuation.edit',session('tracker')) }}"
            >Edit Valuation Information</a
            >
        @endif

        {{-- --------------------------------- valuation ------------------------------------- --}}

        {{-- --------------------------------- bibliographic ------------------------------------- --}}

        @if(\App\Bibilographic::where('es_value_id','=',session('tracker'))->orderBy('id', 'desc')->count() <= 0)
            <a class="nav-link" aria-current="page" href="{{ route('bibilographic.index') }}"
            >Add Bibliographic Information</a
            >
        @else
            <a class="nav-link" aria-current="page" href="{{ route('bibilographic.edit',session('tracker')) }}"
            >Edit Bibliographic Information</a
            >
        @endif

        {{-- --------------------------------- bibliographic ------------------------------------- --}}

        {{-- --------------------------------- bibliographic ------------------------------------- --}}

        @if(\App\Data::where('es_value_id','=',session('tracker'))->orderBy('id', 'desc')->count() <= 0)
            <a class="nav-link" aria-current="page" href="{{ route('data.index') }}"
            >Add Data Information</a
            >
        @else
            <a class="nav-link" aria-current="page" href="{{ route('data.edit',session('tracker')) }}"
            >Edit Data Information</a
            >
        @endif

        {{-- --------------------------------- bibliographic ------------------------------------- --}}


    </nav>
</section>
