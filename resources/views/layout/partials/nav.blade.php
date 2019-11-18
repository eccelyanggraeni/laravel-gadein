<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="/">
    <img src="{{ asset('/img/logo.png') }}" width="200" class="d-inline-block align-top" alt="">
  </a>
  <ul class="nav justify-content-end">
        @if (Route::has('login'))
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Poin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profil') }}">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('bantuan') }}">Bantuan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('keluar') }}">Keluar</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Masuk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">|</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Daftar</a>
            </li>
            @endauth
        @endif
    </ul>
</nav>