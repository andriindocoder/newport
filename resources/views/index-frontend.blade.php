@extends('layouts.frontend.main')
@section('pageTitle','Beranda')
@section('content')

<style>
  .flex-container{
    display: flex;
    justify-content: center;
  }
  .desc a{
    text-decoration: none;
    color: #1F2A22;
  }
  .desc a:hover{
    text-decoration: none;
    color: #3C3487;
    font-size: 22px;
  }
</style>

<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">Pelayanan Pelabuhan</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="img-box">
                    <img src="{{ asset('frontend-asset/images/service1.jpg') }}" />
                    <div class="desc">
                        <div class="detail">
                            <h5>Otoritas Pelabuhan</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-box">
                    <img src="{{ asset('frontend-asset/images/service1.jpg') }}" />
                    <div class="desc">
                        <div class="detail">
                            <h5>Tata Usaha</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-box">
                    <img src="{{ asset('frontend-asset/images/service1.jpg') }}" />
                    <div class="desc">
                        <div class="detail">
                            <h5>Fasilitas Pelabuhan</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-box bg-grey">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">Kegiatan Otoritas</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-user"></i></span>
                    <div class="desc">
                        <h5><a href="http://localhost:1234/profil-ppid">PPID</a></h5>
                        <p>
                            Profil Pejabat Pengelola Informasi dan Dokumentasi (PPID) Kantor Otoritas Pelabuhan Tanjung Priok dan Formulir pengajuan permohonan informasi secara online.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-user"></i></span>
                    <div class="desc">
                        <h5><a href="http://localhost:1234/informasi-publik">informasi publik</a></h5>
                        <p>
                            Informasi berkala, informasi serta merta dan informasi setiap saat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-user"></i></span>
                    <div class="desc">
                        <h5><a href="http://localhost:1234/program-dan-kegiatan">Program Dan Kegiatan</a></h5>
                        <p>
                            Program-progam dan kegiatan yang tertuang dalam Renstra maupun kegiatan lainnya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-user"></i></span>
                    <div class="desc">
                    <h5><a href="http://localhost:1234/data-dan-informasi">Data Dan Informasi</a></h5>
                        <p>
                            Data dan informasi seperti data penumpang maupun sarana dan prasarana, LHKPN dll...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-user"></i></span>
                    <div class="desc">
                    <h5><a href="http://localhost:1234/kinerja">Kinerja Kantor Otoritas Pelabuhan Tanjung Priok</a></h5>
                        <p>
                            Pertanggungjawaban pelaksanaan kebijakan, pengukuran kinerja, LAKIP dll...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-user"></i></span>
                    <div class="desc">
                        <h5><a href="http://localhost:1234/ppid">Permohonan Informasi</a></h5>
                        <p>
                            Formulir untuk pengajuan permohonan informasi secara online
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-balance-scale"></i></span>
                    <div class="desc">
                        <h5><a href="http://jdih.dephub.go.id/" target="_blank">Informasi Hukum</a></h5>
                        <p>
                        Informasi Peraturan, Perundang-undangan, dan Peraturan Kepala Kantor Otoritas Tanjung Priok
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-credit-card"></i></span>
                    <div class="desc">
                        <h5><a href="http://localhost:1234/tarif-pnbp">Tarif PNBP</a></h5>
                        <p>
                        Informasi Tarif Penerimaan Negara Bukan Pajak (PNBP)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span class="icon-hex"><i class="fa fa-user"></i></span>
                    <div class="desc">
                        <h5><a href="http://localhost:1234/indeks-kepuasan-masyarakat">Indeks Kepuasan Masyarakat</a></h5>
                        <p>
                        Informasi Indeks Kepuasan Masyarakat terhadap Kantor Otoritas Pelabuhan Tanjung Priok
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">Berita Pilihan</label>
            </div>
        </div>
        <div class="row">
                        <div class="col-md-4">
                <div class="news-box">
                    <div class="img-box">
                        <img src="http://localhost:1234/gambar-berita/2018/08/RIq2DfKabizjN39uU731oZZwscQKI6t1B5dwJqwn.jpeg" width="100%" />
                    </div>
                    <div class="desc">
                        <h5><a href="http://localhost:1234/berita/kapal-kemanusiaan-dengan-750-ton-bantuan-siap-berlayar-ke-sulteng">Kapal Kemanusiaan dengan 750 Ton Bantuan Siap Berlayar ke Sulteng</a></h5>
                        <small><i class="fa fa-clock-o"></i> 19 Oct 2018 09:47:36</small>
                    </div>
                </div>
            </div>
                        <div class="col-md-4">
                <div class="news-box">
                    <div class="img-box">
                        <img src="http://localhost:1234/gambar-berita/2018/08/RIq2DfKabizjN39uU731oZZwscQKI6t1B5dwJqwn.jpeg" width="100%" />
                    </div>
                    <div class="desc">
                        <h5><a href="http://localhost:1234/berita/kemenhub-akan-siapkan-bus-ke-pelabuhan-tanjung-priok">Kemenhub Akan Siapkan Bus Ke Pelabuhan Tanjung Priok</a></h5>
                        <small><i class="fa fa-clock-o"></i> 27 Aug 2018 10:09:16</small>
                    </div>
                </div>
            </div>
                        <div class="col-md-4">
                <div class="news-box">
                    <div class="img-box">
                        <img src="http://localhost:1234/gambar-berita/2018/08/RIq2DfKabizjN39uU731oZZwscQKI6t1B5dwJqwn.jpeg" width="100%" />
                    </div>
                    <div class="desc">
                        <h5><a href="http://localhost:1234/berita/tingkatkan-keselamatan-pelayaran-kemenhub-berikan-pelatihan-pada-masyarakat-di-selayar-dan-bira">Tingkatkan Keselamatan Pelayaran, Kemenhub Berikan Pelatihan pada Masyarakat di Selayar dan Bira</a></h5>
                        <small><i class="fa fa-clock-o"></i> 14 Aug 2018 12:01:42</small>
                    </div>
                </div>
            </div>
                    </div>
    </div>
</div>
<div class="content-box bg-grey">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">Aplikasi dan Layanan Online</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="function-box flex-container">
                                    <span style="margin-right: 50px"><a href="http://dephub.go.id" target="_blank" title="Website Kementerian Perhubungan Republik Indonesia"><img src="http://localhost:1234/logo-instansi/2018/12/yh0PuWMPIXzRLymM6TpCgDQuL5ZX4kaiuXk8Zbzi.svg" height="77px"></a></span>
                                    <span style="margin-right: 50px"><a href="http://lpse.dephub.go.id" target="_blank" title="LPSE Kementerian Perhubungan merupakan sistem atau aplikasi yang telah menjadi standar dalam hal proses pelelangan pekerjaan di lingkungan instansi pemerintah, yang dikembangkan oleh Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah (LKPP)."><img src="http://localhost:1234/logo-instansi/2018/12/t1BHFhKb0Sl4QDWLXrMLNU7aes3wgVhTemcxvrdc.png" height="77px"></a></span>
                                    <span style="margin-right: 50px"><a href="https://simadu.dephub.go.id" target="_blank" title="Simadu adalah aplikasi Whistleblowing System (WBS) Kementerian Perhubungan untuk memproses pengaduan dan pemberian informasi oleh whistleblower sehubungan dengan adanya perbuatan yang melanggar perundang-undangan, peraturan/standar, kode etik, dan kebijakan, serta tindakan lain yang sejenis berupa ancaman langsung atas kepentingan umum, serta Korupsi, Kolusi, dan Nepotisme (KKN)."><img src="http://localhost:1234/logo-instansi/2018/12/dCVu6DUsljvwuf8uXU5gkNlEOS0aJHKS9rJBAxff.png" height="77px"></a></span>
                                    <span style="margin-right: 50px"><a href="https://kapal.dephub.go.id" target="_blank" title="Aplikasi Pendaftaran Kapal Online merupakan layanan yang digunakan untuk membantu proses permohonan pendaftaran kapal baru ataupun balik nama, penyusunan Grosse Akta dan Minute Akta, kemudian penomoran Grosse Akta dan Minute Akta, serta Daftar Pendaftaran Kapal Baru."><img src="http://localhost:1234/logo-instansi/2018/12/XSQghr7jCnhcw9vSWnr7q7bNkWYuattlaMuKBV9s.png" height="77px"></a></span>
                                    <span style="margin-right: 50px"><a href="http://simlala.dephub.go.id" target="_blank" title="Sistem Informasi ini merupakan layanan yang digunakan untuk membantu proses permohonan Izin Usaha Perusahaan Angkutan Laut (SIUPAL), Izin Operasi Angkutan Laut (SIOPSUS), Spesifikasi Kapal (SPEK), Rencana Pengoperasian Kapal (RPK) dan Pemberitahuan Keagenan Kapal Asing (PKKA) yang dilakukan secara online."><img src="http://localhost:1234/logo-instansi/2018/12/FhOq8hbRFdNFrcbrWBb69usKrP6Eqnspti0I3vt2.png" height="77px"></a></span>
                                    <span style="margin-right: 50px"><a href="https://inaportnet.dephub.go.id" target="_blank" title="Sistem Informasi Inaportnet merupakan layanan yang dipergunakan untuk membantu proses permohonan pelayanan kapal sampai dikeluarkannya izin pengoperasian kapal, mulai dari kapal masuk, kapal tambat, kapal tunda hingga kapal keluar termasuk pembayaran PNBP."><img src="http://localhost:1234/logo-instansi/2018/12/2M5izEfpvdYy46F9mA2r8hS2GX3gYu0cp9frQPxK.png" height="77px"></a></span>
                                    <span style="margin-right: 50px"><a href="https://www.kpk.go.id/id/splash" target="_blank" title="KPK Meningkatkan Efisiensi dan efektivitas penegakan hukum dan menurunkan tingkat korupsi di Indonesia melalui koordinasi, Supervisi, Monitor, Pencegahan, dan Penindakan dengan peran serta seluruh elemen bangsa."><img src="http://localhost:1234/logo-instansi/2018/12/NwZ7gTeGwRboaM8rUcyeg47ivXttqihpxb90BwY4.png" height="77px"></a></span>
                                    </div>
            </div>
        </div>
    </div>
</div>
@endsection