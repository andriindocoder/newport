@extends('layouts.frontend.main')
@section('pageTitle','Beranda')
@section('content')
@include('layouts.frontend.slider')
@include('layouts.frontend.contact')
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
  .angka {
      font-size: 32pt;
      color: orange;
  }
  .angkahijau {
      font-size: 32pt;
      color: green;
  }
  .angkamerah {
      font-size: 32pt;
      color: red;
  }
</style>

<div id="splashscreen"><img src="{{ url($splashscreen->foto) }}"></div>
<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">{!! $judulgrafik ? $judulgrafik->konten : '' !!}</label>
            </div>
        </div>
        <div class="row">
            <div class="col" align="center">
                <h4>22 Februari 2019</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="row" style="background-color: rgb(43,36,114); padding: 15px;">
                    <div class="col-lg-9" style="margin: 0.5% 0.5% 0.5% 0.5%; background-color: #FFB900; border:1px solid #rgb(43,36,114); min-width: 23.5%; color: #fff; padding-bottom: 5px; height: 95px; top: 18%; left: 11%;">
                        <div class="col-lg-12" style="background-color: #fff; margin-top: 10px; padding: 5px 5px 5px 5px;">
                            <table class="col-md-12" border="0">
                                <tr>
                                    <td width="75%"><img src="/logo-terminal/average.png" width="75%"></td>
                                    <td><b class="angkahijau">3.02</b></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="container">
            <div class="row" style="background-color: rgb(43,36,114); padding: 15px;">
                <div class="col-lg-2" style="margin: 0.5% 0.5% 0.5% 0.5%; background-color: #FFB900; border:1px solid #rgb(43,36,114); min-width: 23.5%; color: #fff; padding-bottom: 5px; height: 95px; top: 18%; left: 1%;">
                    <div class="col-lg-12" style="background-color: #fff; margin-top: 10px; padding: 5px 5px 5px 5px;">
                        <table class="col-md-12" border="0">
                            <tr>
                                <td width="75%"><img src="/logo-terminal/jict.png" width="75%"></td>
                                <td><b class="angkahijau">3.14</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-2" style="margin: 0.5% 0.5% 0.5% 0.5%; background-color: #FFB900; border:1px solid #rgb(43,36,114); min-width: 23.5%; color: #fff; padding-bottom: 5px; height: 95px; top: 18%; left: 1%;">
                    <div class="col-lg-12" style="background-color: #fff; margin-top: 10px; padding: 5px 5px 5px 5px;">
                        <table class="col-md-12" border="0">
                            <tr>
                                <td width="75%"><img src="/logo-terminal/npct1.png" width="75%"></td>
                                <td><b class="angkamerah">4.67</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-2" style="margin: 0.5% 0.5% 0.5% 0.5%; background-color: #FFB900; border:1px solid #rgb(43,36,114); min-width: 23.5%; color: #fff; padding-bottom: 5px; height: 95px; top: 18%; left: 1%;">
                    <div class="col-lg-12" style="background-color: #fff; margin-top: 10px; padding: 5px 5px 5px 5px;">
                        <table class="col-md-12" border="0">
                            <tr>
                                <td width="75%"><img src="/logo-terminal/koja.png" width="75%"></td>
                                <td><b class="angkahijau">3.04</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-2" style="margin: 0.5% 0.5% 0.5% 0.5%; background-color: #FFB900; border:1px solid #rgb(43,36,114); min-width: 23.5%; color: #fff; padding-bottom: 5px; height: 95px; top: 18%; left: 1%;">
                    <div class="col-lg-12" style="background-color: #fff; margin-top: 10px; padding: 5px 5px 5px 5px;">
                        <table class="col-md-12" border="0">
                            <tr>
                                <td width="75%"><img src="/logo-terminal/tmal.png" width="75%"></td>
                                <td><b class="angkahijau">1.23</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-12">
                <div id="daily" style="min-width: 400px; height: 400px; margin: 0 auto;"></div>
                <div id="monthly" style="min-width: 400px; height: 400px; margin: 0 auto;"></div><br>
            </div>
        </div> 
    </div>
</div>
<div class="content-box bg-grey">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">{!! $judulkegiatanotoritas ? $judulkegiatanotoritas->konten : '' !!}</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="function-box">
                    <span><i class="fa fa-edit"></i></span>
                    <div class="desc">
                        <h5><a href="{{ route('ppid') }}">PPID</a></h5>
                        <p>
                            Profil Pejabat Pengelola Informasi dan Dokumentasi (PPID) Kantor Otoritas Pelabuhan Tanjung Priok dan Formulir pengajuan permohonan informasi secara online.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span><i class="fa fa-map-o"></i></span>
                    <div class="desc">
                        <h5><a href="{{ url('/info/informasi-publik') }}">informasi publik</a></h5>
                        <p>
                            Informasi berkala, informasi serta merta dan informasi setiap saat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span><i class="fa fa-anchor"></i></span>
                    <div class="desc">
                        <h5><a href="{{ url('/info/program-dan-kegiatan') }}">Program Dan Kegiatan</a></h5>
                        <p>
                            Program-progam dan kegiatan yang tertuang dalam Renstra maupun kegiatan lainnya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span><i class="fa fa-info-circle"></i></span>
                    <div class="desc">
                    <h5><a href="{{ url('/info/data-dan-informasi') }}">Data Dan Informasi</a></h5>
                        <p>
                            Data dan informasi seperti data penumpang maupun sarana dan prasarana, LHKPN dll...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span><i class="fa fa-line-chart"></i></span>
                    <div class="desc">
                    <h5><a href="{{ url('/info/kinerja-kantor-otoritas-pelabuhan') }}">Kinerja Kantor Otoritas Pelabuhan Tanjung Priok</a></h5>
                        <p>
                            Pertanggungjawaban pelaksanaan kebijakan, pengukuran kinerja, LAKIP dll...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span><i class="fa fa-balance-scale"></i></span>
                    <div class="desc">
                        <h5><a href="#">Informasi Hukum</a></h5>
                        <p>
                        <a href="http://jdih.dephub.go.id" target="_blank">JDIH Kementerian Perhubungan</a><br>
                        <a href="{{ url('/info/informasi-hukum') }}">Produk Hukum Kepala Kantor OP Tanjung Priok</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span><i class="fa fa-credit-card"></i></span>
                    <div class="desc">
                        <h5><a href="{{ url('/info/tarif-pnbp') }}">Tarif PNBP</a></h5>
                        <p>
                        Informasi Tarif Penerimaan Negara Bukan Pajak (PNBP)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span><i class="fa fa-smile-o"></i></span>
                    <div class="desc">
                        <h5><a href="{{ url('/info/indeks-kepuasan-masyarakat') }}">Indeks Kepuasan Masyarakat</a></h5>
                        <p>
                        Informasi Indeks Kepuasan Masyarakat terhadap Kantor Otoritas Pelabuhan Tanjung Priok
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="function-box">
                    <span><i class="fa fa-building-o"></i></span>
                    <div class="desc">
                        <h5><a href="{{ url('/info/reformasi-birokrasi') }}">Reformasi Birokrasi</a></h5>
                        <p>
                        Informasi Reformasi Birokrasi pada Lingkungan Kantor Otoritas Pelabuhan Tanjung Priok.
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
                <label class="content-label">{!! $berita ? $berita->konten : '' !!}</label>
            </div>
        </div>
        <div class="row">
            @foreach($beritas as $berita)
            <div class="col-md-4">
                <div class="news-box">
                    <div class="img-box">
                        <img src="{{ url($berita->image) }}" width="100%" />
                    </div>
                    <div class="desc">
                        <h5><a href="{{ route('berita.show', $berita->slug) }}">{{ $berita->title }}</a></h5>
                        <small><i class="fa fa-clock-o"></i> {{ date('d M Y H:i:s',strtotime($berita->created_at)) }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="content-box bg-grey">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">{!! $judulgalerifoto ? $judulgalerifoto->konten : '' !!}</label>
            </div>
        </div>
        <div class="row">
            @foreach($gallerys as $gallery)
                <div class="col-md-4 gambar">
                    <div class="news-box" data-kategori="{{ $gallery->kategoriFoto->slug }}">
                        <div class="img-box">
                            <a class="gallery-image-link" href="{{ url($gallery->namafile) }}" data-fancybox="gallery-set" data-caption="{{ $gallery->caption }}"><img src="{{ url($gallery->namafile) }}" width="350px" height="180px" /></a>
                        </div>
                        <div class="desc">
                            <h5><a href="#">{{ $gallery->title }}</a></h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">{!! $judulgalerivideo ? $judulgalerivideo->konten : '' !!}</label>
            </div>
        </div>
        <div class="row">
            @foreach($galleryVideos as $galleryVideo)
            <div class="col-md-4">
                <div class="news-box">
                    <div class="img-box">
                        <iframe width="350" height="180" src="{{ $galleryVideo->link_video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="desc">
                        <h5><a href="{{ $galleryVideo->link_video }}" target="_blank">{{ $galleryVideo->judul_video }}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="content-box bg-grey">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">Social Media Feed</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                @foreach($instagrams as $instagram)
                    {!! htmlspecialchars_decode(stripslashes($instagram->konten))!!}
                @endforeach
            </div>
            <div class="col-md-6">
                @foreach($facebooks as $facebook)
                    {!! htmlspecialchars_decode(stripslashes($facebook->konten))!!}
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="col">
                <label class="content-label">{!! $judullinkterkait ? $judullinkterkait->konten : '' !!}</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="function-box flex-container">
                    @foreach($linkTerkaits as $linkTerkait)
                <span style="margin-right: 50px"><a href="{{ $linkTerkait->nama_instansi }}" target="_blank" title="{{ $linkTerkait->deskripsi }}"><img src="{{ url($linkTerkait->logo_instansi) }}" height="77px"></a></span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="http://code.highcharts.com/highcharts.js" type="text/javascript"></script>
<script src="http://code.highcharts.com/modules/exporting.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).on('ready', function() {
    $('#monthly').highcharts({
        title: {
            text: 'Dwelling Time 2018',
            x: -20 //center
        },
        subtitle: {
            text: 'Data Dwelling Time Per Bulan 2018',
            x: -20
        },
        xAxis: {
            categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
        },
        yAxis: {
            title: {
                text: 'Dwelling Time (hari)'
            },
            plotLines: [{
                value: 3,
                width: 5,
                color: 'yellow'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        
        series: [{
            name: 'JICT',
            lineWidth: 5,
            data: [0, 5.18, 3.31, 3.38, 4.42, 5.85, 4.25, 4.59, 4.05, 5.04, 3.32, 3.26]
        }, {
            name: 'NPCT1',
            lineWidth: 5,
            data: [0.79, 2.18, 3.71, 3.20, 0, 0, 2.95, 3.26, 3.51, 2.97, 3.67, 3.05]
        }, {
            name: 'KOJA',
            lineWidth: 5,
            data: [0, 4.77, 2.56, 3.27, 3.47, 5.11, 4.83, 3.61, 3.67, 5.10, 3.04, 3.14]
        },  {
            name: 'TMAL',
            lineWidth: 5,
            data: [0, 0, 2.95, 3.64, 4.17, 5.56, 3.60, 3.03, 3.31, 2.65, 2.57, 2.79]
        }, {
            name: 'TER3',
            lineWidth: 5,
            data: [0, 3.75, 5.77, 3.99, 0.89, 3.59, 3.26, 3.37, 1.97, 2.65, 2.28, 4.16]
        },]
    });

    $('#daily').highcharts({
        title: {
            text: 'Dwelling Time 2019',
            x: -20 //center
        },
        subtitle: {
            text: 'Data Dwelling Time Per Hari Tahun 2019',
            x: -20
        },
        xAxis: {
            categories: ['01-Jan','02-Jan','03-Jan','04-Jan','05-Jan','06-Jan','07-Jan','08-Jan','09-Jan','10-Jan','11-Jan','12-Jan','13-Jan','14-Jan','15-Jan','16-Jan','17-Jan','18-Jan','19-Jan','20-Jan','21-Jan','22-Jan','23-Jan','24-Jan','25-Jan','26-Jan','27-Jan','28-Jan','29-Jan','30-Jan','31-Jan','01-Feb','02-Feb','03-Feb','04-Feb','05-Feb','06-Feb','07-Feb','08-Feb','09-Feb','10-Feb','11-Feb','12-Feb','13-Feb','14-Feb','15-Feb','16-Feb','17-Feb','18-Feb','19-Feb','20-Feb','21-Feb','22-Feb']
        },
        yAxis: {
            title: {
                text: 'Dwelling Time (hari)'
            },
            plotLines: [{
                value: 3,
                width: 5,
                color: 'yellow'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        
        series: [{
            name: 'JICT',
            lineWidth: 5,
            data: [3.24, 5.21, 5.58, 4.74, 4.32, 3.86, 4.76, 4.51, 4.22, 4.27, 4.79, 3.25, 2.81, 3.86, 3.49, 3.70, 3.83, 4.61, 3.63, 3.48, 3.61, 3.50, 3.41, 3.08, 3.27, 2.49, 2.25, 3.39, 3.32, 3.42, 3.29, 2.90, 2.08, 1.99, 2.69, 2.88, 3.46, 3.58, 3.55, 3.17, 2.73, 3.57, 5.07, 4.14, 4.00, 4.04, 2.84, 2.74, 3.97, 3.32, 3.13, 3.49, 3.14]
        }, {
            name: 'NPCT1',
            lineWidth: 5,
            data: [3.24, 4.79, 4.34, 4.25, 3.94, 3.58, 3.92, 3.80, 3.71, 4.13, 3.79, 3.05, 3.42, 3.54, 2.64, 3.10, 4.00, 3.04, 2.34, 1.62, 2.76, 2.85, 2.80, 3.22, 2.42, 2.38,  2.13, 2.30, 3.45, 3.68, 2.98, 2.81, 2.29, 1.21, 2.87, 3.38, 3.48, 4.30, 3.18, 2.53, 1.90, 2.79, 2.82, 1.68, 3.51, 2.95, 2.15, 1.23, 1.93, 2.36, 2.74, 3.52, 4.67]
        }, {
            name: 'KOJA',
            lineWidth: 5,
            data: [4.45, 6.13, 4.84, 4.64, 3.47, 2.88, 4.67, 4.73, 3.44, 4.07, 4.78, 3.88, 2.57, 4.06, 3.48, 2.59, 3.21, 3.59, 2.52, 1.81, 3.04, 3.38, 3.51, 1.85, 2.47, 2.38, 1.58, 3.69, 3.69, 3.47, 2.96, 4.03, 2.33, 1.62, 2.75, 2.86, 3.66, 3.40, 4.07, 3.61, 1.45, 3.12, 3.29, 3.47, 2.98, 3.80, 3.11, 1.55, 3.80, 3.59, 5.06, 5.64, 3.04]
        }, {
            name: 'TMAL',
            lineWidth: 5,
            data: [2.32, 4.11, 5.11, 3.97, 2.36, 1.26, 3.17, 3.19, 3.73, 2.91, 1.93, 3.56, 1.63, 4.15, 3.55, 3.86, 1.83, 1.41, 1.88, 2.63, 3.86, 4.69, 5.88, 1.45, 1.47, 2.34, 1.38, 2.19, 2.96, 2.97, 1.60, 1.10, 1.82, 2.58, 2.74, 2.32, 3.63, 2.62, 2.08, 1.69, 0.00, 4.38, 5.26, 5.40, 0.99, 1.10, 2.03, 1.49, 2.71, 3.36, 6.17, 1.65, 1.23]
        }]
    });
  });
</script>
@endsection
