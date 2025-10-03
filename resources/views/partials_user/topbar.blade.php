<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light border-bottom border-2 border-white">
            <a href="index.html" class="navbar-brand">
                <h1>UKM Pencak Silat</h1>
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('tentang')}}" class="nav-item nav-link">Tentang</a>
                    <a href="{{route('keanggotaan')}}" class="nav-item nav-link">Keanggotaan</a>
                    <a href="{{ route('galeri.index') }}" class="nav-item nav-link">Galeri</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#!" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="feature.html" class="dropdown-item">Berita</a>
                            <a href="team.html" class="dropdown-item">Kegiatan & Prestasi</a>
                        </div>
                    </div> -->
                    <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->