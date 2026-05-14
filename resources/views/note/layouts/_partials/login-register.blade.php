@if (Route::has('login'))
<div class="buttons">
        @auth
            <a
                href="{{ url('/dashboard') }}"
                class="auth-btn"
            >
                Dashboard
            </a>
        @else
            <a class="btn-register"
                href="{{ route('login') }}"
                class="auth-btn"
            >
                Login
            </a>
            <br>

            @if (Route::has('register'))
                <a class="btn-login"
                href="{{ route('register') }}"
                class="auth-btn register-btn">
                Register
            </a>
            @endif
        @endauth
            </div>
@endif