<header class='nav-scrolled'>
    <nav style="margin: auto; align-content: center">
        <ul class="nav-links right-part-links">
            <div class="hamburger-menu">
                <input id="menu-toggle" type="checkbox" style="z-index: 999"/>
                <label class="menu-btn" for="menu-toggle" style="z-index: 999">
                    <span style="z-index: 999"></span>
                </label>

                <ul class="menu-box">
                    <li><a class="menu-item" href="{{route('home')}}">Home</a></li>
                    <li><a class="menu-item" href="{{route('catalogue')}}">Catalogue</a></li>
                    <li><a class="menu-item" href="{{route('delivery')}}">Delivery</a></li>
                    <li><a class="menu-item" href="{{route('contact')}}">Contact</a></li>
                    <li><a class="menu-item" href="{{route('about')}}">About</a></li>
                    @auth('web')
                        <li><a class="menu-item" href="{{route('logout')}}">Logout</a></li>
                    @endauth

                    @guest('web')
                        <li><a class="menu-item" href="{{route('login')}}">Login</a></li>
                    @endguest
                </ul>

            </div>
            <li><a href="{{route('catalogue')}}" class="icon catalog-icon"></a></li>
        </ul>
        <div class="logo">
            <a href="{{route('home')}}"><h4 style="margin-top: 2%">želtas</h4></a>
        </div>
        <ul class="nav-links left-part-links">
            <li><a href="#" class="icon search-icon"></a></li>
            <li><a href="{{ route('checkout.cart') }}" class="icon basket-icon"></a></li>
        </ul>
    </nav>
</header>
