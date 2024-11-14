<header class="main-header bg-dark py-3 shadow-sm">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Logo -->
        <div class="logo">
            <a href="/" class="d-flex align-items-center">
                <img src="/img/logo.png" alt="Logo" class="me-2" style="height: 90px;">
            </a>
        </div>

        <!-- Navigation links -->
        <nav class="navigation d-none d-md-flex gap-4">
            <a href="/" class="text-light text-decoration-none">Homepage</a>
            <a href="/products" class="text-light text-decoration-none">Product</a>
            <a href="/kit" class="text-light text-decoration-none">Kit</a>
        </nav>

        <!-- Icons -->
        <div class="icons d-flex gap-3">
            <!-- Account Dropdown -->
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-lg"></i>
                    <span>Account</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    @guest
                        <li><a class="dropdown-item" href="{{ route('login') }}">Inloggen</a></li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">Registreren</a></li>
                    @else
                        <li><span class="dropdown-item-text"><strong>Email:</strong> {{ Auth::user()->email }}</span></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Uitloggen
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>

            <!-- Cart Dropdown -->
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-shopping-cart fa-lg"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    @if(session('cart') && count(session('cart')) > 0)
                        <!-- Als de winkelwagen niet leeg is -->
                        @foreach(session('cart') as $item)
                            <li class="dropdown-item">
                                <strong>{{ $item['name'] }}</strong> - Aantal: {{ $item['quantity'] }}
                            </li>
                        @endforeach
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item text-center" href="{{ route('cart.index') }}">Bekijk winkelwagen</a>
                        </li>
                    @else
                        <!-- Als de winkelwagen leeg is -->
                        <li class="dropdown-item text-center">Winkelwagen is leeg</li>
                    @endif
                </ul>
            </div>
        </div>

        <!-- Mobile navigation toggle (hamburger) -->
        <button class="navbar-toggler d-md-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <!-- Mobile menu dropdown -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <nav class="d-flex flex-column align-items-center mt-2">
            <a href="/" class="text-light text-decoration-none py-2">Homepage</a>
            <a href="/kit" class="text-light text-decoration-none py-2">Producten</a>
            <a href="/products" class="text-light text-decoration-none py-2">Dashbord</a>
        </nav>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
