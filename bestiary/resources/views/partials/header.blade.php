
<header>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
               Bestiary
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto list-unstyled">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{URL::to('mythology')}}">Mythology</a>
                                <a class="dropdown-item" href="{{URL::to('cryptid')}}">Cryptids</a>
                                <a class="dropdown-item" href="{{URL::to('aliens')}}">Aliens</a>
                            </div>
                        </li>
                </ul>

                <!-- Search Widget -->
                <div class="form-inline my-2 my-lg-0">
                    <form action="/search" method="GET" role="search">
                        @csrf
                        {{csrf_field()}}
                        <div >
                            <input type="text" class="form-control" placeholder="Search for..." name="q">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go!</button>
          </span>
                        </div>
                    </form>
                </div>

                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item list-unstyled">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item list-unstyled">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown list-unstyled">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{Auth::user()->name}}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{route('users.show', Auth::user()->id)}}">Profile</a>
                                <a class="dropdown-item" href="{{route('creatures.userId', ['id' => Auth::user()->id])}}">Post overview</a>
                                <a class="dropdown-item" href="{{ route('logout')}}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
            </div>
        </div>
    </nav>
</header>


