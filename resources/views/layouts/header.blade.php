<div class="container">
    <nav class="navbar fixed-top bg-black p-0">
        <div class="flex-container">
            <div>
                @if (Auth::check())
                    <img id="profile" class="margin-equal mt-3" src="{{ asset('includes/resources/profile_icon_workout.png') }}">
                @endif
            </div>
            <div class="logo">
                <a class="navbar-brand margin-equal mt-1" href="/login">
                    <img id="logo2" src="{{ asset('includes/resources/white_gb_words_logo.png') }}">
                </a>
            </div>
            <div></div>
        </div>
    </nav>
</div>
