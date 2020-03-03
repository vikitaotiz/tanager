<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="/">{{ __('TANAGER') }}</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    @if (Route::has('login'))
                            @if (!Auth::check())
                                @if(config('auth.users.registration'))
                                    <li class="nav-item"><a href="{{ url('/register') }}" class="nav-link">Register</a></li>
                                @endif
                                <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
                            @else
                                @if(auth()->user()->hasRole('administrator'))
                                    <li class="nav-item"><a href="{{ url('/admin') }}" class="nav-link">Admin</a></li>
                                @endif
                                <li class="nav-item"><a href="{{ url('/logout') }}" class="nav-link">Logout</a></li>
                            @endif
                        @endif
                </li>
                <li class="nav-item @if($activePage == 'register') active @endif">
                    <a href="{{ route('register') }}" class="nav-link">
                        <i class="nc-icon nc-badge"></i> {{ __('Register') }}
                    </a>
                </li>
                {{-- <li class="nav-item @if($activePage == 'login') active @endif">
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="nc-icon nc-mobile"></i> {{ __('Login') }}
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
