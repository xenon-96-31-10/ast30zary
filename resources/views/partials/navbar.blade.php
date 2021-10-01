<nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/brandlogo.png' )}}" width="150" alt='База "Заря"' title='База "Заря"'>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Center Side Of Navbar -->
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                  <a class="nav-link" href="/">Главная</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}">О базе</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('okhota')}}">Охота и рыбалка</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('gallery')}}">Галерея</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('reviews.index')}}">Отзывы</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('price')}}">Цены</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
              </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="https://wa.me/79608641081">Напишите нам</a>
                    </li>
                    <!-- @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif -->
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
