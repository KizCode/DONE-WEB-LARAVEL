<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Done</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                @guest
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                @endguest
                @auth
                    <li class="dropdown"><a href="#"><span><?= Auth::user()->name ?></span></a>
                        <ul>
                            <li><a href="{{ route('profiles.index') }}">Profile</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                @endauth
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        @guest
            <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
        @endguest

    </div>
</header>
