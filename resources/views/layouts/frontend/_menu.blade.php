<div class="nav-menu">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="navbar-header">
                    <nav class="navbar-menu">
                        <ul class="navbar-nav">
                        <li class="active"><a href="{{ url('/') }}">beranda</a></li>
                            <li><a href="{{ route('profil.index') }}">profil</a></li>
                            <li><a href="{{ route('berita.index') }}">berita</a></li>
                            <li><a href="#">galeri</a>
                                <ul>
                                    <li><a href="{{ route('galeri-foto') }}">Galeri Foto</a></li>
                                    <li><a href="{{ route('galeri-video') }}">Galeri Video</a></li>
                                </ul>
                            </li>
                            <li><a href="#">fasilitas pelabuhan</a>
                                <ul class="col-md-12">
                                    <li><a href="{{ route('fasilitas.batas') }}">Batas DLKr/DLKp</a></li>
                                    <li><a href="{{ route('fasilitas.rekapitulasi') }}">Rekapitulasi Fasilitas dan Peralatan</a></li>
                                    <li><a href="{{ route('fasilitas.dermaga') }}">Fasilitas Dermaga</a></li>
                                    <li><a href="{{ route('fasilitas.gudang') }}">Fasilitas Gudang</a></li>
                                    <li><a href="{{ route('fasilitas.lapangan') }}">Fasilitas Lapangan Penumpukan</a></li>
                                    <li><a href="{{ route('fasilitas.daerah-labuh') }}">Daerah Labuh</a></li>
                                    <li><a href="{{ route('fasilitas.breakwater') }}">Breakwater</a></li>
                                    <li><a href="{{ route('fasilitas.rencana-induk') }}">Rencana Induk Pelabuhan</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pelayanan</a>
                                <ul>
                                    <li><a href="{{ route('pelayanan.sop') }}">SOP Pelayanan</a></li>
                                    <li><a href="{{ route('registrasi') }}">PMKU</a></li>
                                    <li><a href="{{ route('pelayanan.rekomendasi') }}">Rekomendasi</a></li>
                                    <li><a href="{{ route('pelayanan.sikk') }}">Surat Izin Kerja Keruk</a></li>
                                </ul>
                            </li>
                            @role('perusahaan')
                            <li><a href="{{ route('pelaporan.index') }}">pelaporan</a></li>
                            @endrole
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>