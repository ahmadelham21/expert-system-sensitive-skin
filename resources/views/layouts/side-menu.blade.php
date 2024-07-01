<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <span class="hidden xl:block text-white text-xl ml-3 font-bold">Sistem Pakar </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{route('dashboard.index')}}"
                class="side-menu {{ request()->routeIs('dashboard.*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
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
            <a href="{{route('diagnoses.index')}}"
                class="side-menu {{ request()->routeIs('diagnoses.*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                <div class="side-menu__title"> Diagnosa </div>
            </a>
        </li>


    </ul>
</nav>