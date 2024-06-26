<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
        <span class="hidden xl:block text-white text-lg ml-3"> Mid<span class="font-medium">one</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{route('symptoms.index')}}"
                class="side-menu {{ request()->routeIs('symptoms.*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                <div class="side-menu__title"> Gejala </div>
            </a>
        </li>

        <li>
            <a href="{{route('disease.index')}}"
                class="side-menu {{ request()->routeIs('disease.*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                <div class="side-menu__title"> Penyakit </div>
            </a>
        </li>
        <li>
            <a href="{{route('rules.index')}}"
                class="side-menu {{ request()->routeIs('rules.*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                <div class="side-menu__title"> Rules </div>
            </a>
        </li>

        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="{{route('rules.index')}}"
                class="side-menu {{ request()->routeIs('rules.*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                <div class="side-menu__title"> Diagnosa </div>
            </a>
        </li>


    </ul>
</nav>