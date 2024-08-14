<nav>
    @auth
        <a href="{{ url('/dashboard') }}" class="btn btn-register">
            Dashboard
        </a>
    @else
        <a href="{{ route('login') }}" class="btn btn-register">
            Log in
        </a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-register">
                Register
            </a>
        @endif
    @endauth
</nav>
