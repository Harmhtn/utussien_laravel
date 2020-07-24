<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
    <a class="navbar-brand" href="{{ url('/home') }}">
        't Kunstige Ussien
    </a>

    <div class="navbar" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('info.index')}}">Info <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('booking.index')}}">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.index')}}">Admin</a>
            </li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Zoek</button>
        </form>
        <ul class="navbar-nav ml-auto px-lg-5">
            <li>
                <button class="btn btn-outline-info mb-2  my-2 my-sm-0" onclick="goBack()">Ga terug</button>
            </li>
        </ul>
    </div>
</nav>

{{--Go back button script--}}
<script>
    function goBack() {
        window.history.back();
    }
</script>
@yield('script')
