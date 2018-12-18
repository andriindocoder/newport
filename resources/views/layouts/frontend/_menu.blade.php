<div class="nav-menu">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="navbar-header">
                    <nav class="navbar-menu">
                        <ul class="navbar-nav">
                        <li class="active"><a href="{{ url('/') }}">beranda</a></li>
                            <li><a href="#">profil</a></li>
                            <li><a href="{{ route('berita.index') }}">berita</a></li>
                            <li><a href="#">galeri</a>
                                <ul>
                                    <li><a href="#">Galeri Foto</a></li>
                                    <li><a href="#">Galeri Video</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pelayanan</a>
                                <ul>
                                    <li><a href="#">PMKU (AP,PBM,JPT)</a></li>
                                    <li><a href="#">Rekomendasi</a></li>
                                    <li><a href="#">Surat Izin Kerja Keruk</a></li>
                                    <li><a href="#">Pelayanan Supplier</a></li>
                                    <li><a href="#">Bunker Darat</a></li>
                                    <li><a href="#">Docking</a></li>
                                    <li><a href="#">Fumigasi</a></li>
                                </ul>
                            </li>
                            @role('perusahaan')
                            <li><a href="#">pelaporan</a></li>
                            @endrole
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>