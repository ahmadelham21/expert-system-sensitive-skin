<nav class="navbar navbar-expand-lg bg-main">
    <div class=" container">
        <a class="navbar-brand text-white" href="/"> <i class="bi bi-bandaid"></i> Sistem Pakar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active text-white " aria-current="page" href="/">Home</a>
                <a class="nav-link text-white" href="{{route('expert-system.info-penyakit')}}">Info Penyakit</a>
                <a class="nav-link text-white" href="{{route('expert-system.profile')}}">Profile</a>
                <a class="nav-link text-white" href="{{route('expert-system.about-us')}}">Tentang</a>
                <a class="nav-link text-white" href="{{route('login')}}">Login Admin</a>
            </div>
        </div>
    </div>
</nav>