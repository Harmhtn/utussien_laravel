<head>
    <link href="{{ asset('css/main.style.css') }}" rel="stylesheet">
</head>

<div class="navbar navbar-expand-lg navbar-light bg-light ">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/home') }}">
        't Kunstige Ussien
    </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('info.index')}}">Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('booking.index')}}">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
            </li>
        </ul>
    </div>
</div>



{{--            Admin link als je dit wilt toevoegen--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{route('admin.index')}}">Admin</a>--}}
{{--            </li>--}}


        <!-- Right Side Of Navbar -->
{{--        <ul class="navbar-nav ml-auto">--}}
{{--            <!-- Authentication Links -->--}}
{{--            @guest--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                </li>--}}
{{--                @if (Route::has('register'))--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--            @else--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
{{--                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                        {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                    </a>--}}

{{--                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                        <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                                                             document.getElementById('logout-form').submit();">--}}
{{--                            {{ __('Logout') }}--}}
{{--                        </a>--}}

{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            @endguest--}}
{{--        </ul>--}}

{{--</nav>--}}

{{--Go back button script--}}
<script>
    function goBack() {
        window.history.back();
    }
</script>
@yield('script')
