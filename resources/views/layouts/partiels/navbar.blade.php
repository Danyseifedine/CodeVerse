<header class="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="#" class="nav__logo">
                <span class="bracket">{</span> CODEⓋERSE <span class="bracket">}</span>
            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__toggle-menu"></i>
                <i class="ri-close-line nav__toggle-close"></i>
            </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li>
                    <a href="{{ route('home') }}" class="nav__link">Home</a>
                </li>

                <!--=============== DROPDOWN 1 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Components <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-code-s-slash-line"></i>
                                </div>

                                <span class="dropdown__title">Components</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="{{ route('Components') }}" class="dropdown__link">All components</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Button</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Card</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Alert</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Checkbox</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Carousel</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Dropdown</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Footer</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Form</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Header</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Input</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Menu</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Modal</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Navbar</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Spinner</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Sidebar</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Switch</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Table</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Tooltip</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Pagination</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Icon</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="{{ route('CreateSnippet') }}" class="nav__link">Create</a>
                </li>
                <li>
                    <a href="{{ route('Blog') }}" class="nav__link">Blog</a>
                </li>
                @guest
                    <li>
                        <a href="{{ route('RegisterPage') }}" class="nav__link">Register</a>
                    </li>
                    <li>
                        <a href="{{ route('LoginPage') }}" class="nav__link">Login</a>
                    </li>
                @endguest
                @auth
                    <li>
                        <a href="{{ route('ProfilePage') }}" class="nav__link">Profile</a>
                    </li>

                    @if (auth()->user()->role == 2)
                        <li>
                            <a href="{{ route('dashboard') }}" class="nav__link">Admin</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    </nav>
</header>
