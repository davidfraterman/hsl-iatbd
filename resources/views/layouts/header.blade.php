<header class="header">
    <article class="headerItems">
        <a href="/" class="header__logoWrapper"><img class="header__logo" src="/img/time2share_logo.png" alt="app logo"></a>
        <span class="iconify header__hamburger" id="js--header__hamburger" data-icon="cil:hamburger-menu" style="color: var(--clr-white); font-size: 30px;"></span>
        <!-- desktop nav -->
        <ul class="header__links">
            <li class="header__link u-hover-underline-animation"><a href="/">Alle Producten</a></li>
            <li class="header__link u-hover-underline-animation"><a href="/my-products">Mijn Producten</a></li>
            <li class="header__link u-hover-underline-animation">
                <a href="/users/{{Auth::user()->id}}">
                    Mijn Profiel ({{Auth::user()->name}})
                </a>
            </li>
            <li class="header__link">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <!-- logout icon -->
                        <span class="iconify" data-icon="carbon:logout" style="color: #FBFBFB; font-size: 20px;"></span>                    </x-dropdown-link>
                </form>
            </li>
        </ul>
        <!-- mobile nav -->
        <ul class="header__mobileLinks" id="js--header__mobileLinks">
            <span class="iconify header__mobileLinks--close" id="js--header__mobileLinks--close" data-icon="carbon:close" style="font-size: 40px;"></span>
            <li class="header__mobileLink"><a href="/">Alle Producten</a></li>
            <li class="header__mobileLink"><a href="/my-products">Mijn Producten</a></li>
            <li class="header__mobileLink">
                <a href="/users/{{Auth::user()->id}}">
                    Mijn Profiel ({{Auth::user()->name}})
                </a>
            </li>
            <li class="header__mobileLink">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <!-- logout icon -->
                        <span class="iconify" data-icon="carbon:logout" style="color: #FBFBFB; font-size: 30px;"></span> 
                   </x-dropdown-link>
                </form>
            </li>
        </ul>
    </article>
</header>