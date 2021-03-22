<div class="container">
    <nav class="navbar fixed-bottom bg-black justify-content-center p-0">
        <div class="col-lg-4 col-md-6 col-12 pt-1">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-3 col-3">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        @yield('home')
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-3">
                    <a class="navbar-brand" href="{{ url('/wods') }}">
                        @yield('wods')
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-3">
                    <a class="navbar-brand" href="{{ url('/workouts') }}">
                        @yield('workouts')
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-3">
                    <a class="navbar-brand" href="{{ url('/me') }}">
                        @yield('me')
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>