<header class='nav-scrolled' style="display: block">
    <nav style="margin: auto; align-content: center">
        <ul class="nav-links right-part-links">
            <div class="hamburger-menu">
                <input id="menu-toggle" type="checkbox" style="z-index: 999"/>
                <label class="menu-btn" for="menu-toggle" style="z-index: 999">
                    <span style="z-index: 999"></span>
                </label>

                <ul class="menu-box">
                    <li><a class="menu-item" href="#">Dashboard</a></li>
                    <li><a class="menu-item" href="#">Categories</a></li>
                    <li><a class="menu-item" href="#">Collections</a></li>
                    <li><a class="menu-item" href="#">Metals</a></li>
                    <li><a class="menu-item" href="#">Products</a></li>
                    <li><a class="menu-item" href="#">Images</a></li>
{{--                    @auth('admin')--}}
{{--                        <li><a class="menu-item" href="{{route('logout')}}">Logout</a></li>--}}
{{--                    @endauth--}}

{{--                    @guest('admin')--}}
{{--                        <li><a class="menu-item" href="{{route('login')}}">Login</a></li>--}}
{{--                    @endguest--}}
                </ul>
            </div>
        </ul>
        <div class="logo">
            <h4 style="margin-top: 2%">želtas</h4>
        </div>
        <ul class="nav-links left-part-links">
        </ul>
    </nav>
</header>
