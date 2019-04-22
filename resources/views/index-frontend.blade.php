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
                <h4>{{ $tanggalDt }}</h4>
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
                                    <td><b class="{{$classAvg}}">{{ $averageDt }}</b></td>
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
                                <td><b class="{{ $classJict }}">{{ $jict }}</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-2" style="margin: 0.5% 0.5% 0.5% 0.5%; background-color: #FFB900; border:1px solid #rgb(43,36,114); min-width: 23.5%; color: #fff; padding-bottom: 5px; height: 95px; top: 18%; left: 1%;">
                    <div class="col-lg-12" style="background-color: #fff; margin-top: 10px; padding: 5px 5px 5px 5px;">
                        <table class="col-md-12" border="0">
                            <tr>
                                <td width="75%"><img src="/logo-terminal/npct1.png" width="75%"></td>
                                <td><b class="{{ $classNpct1 }}">{{ $npct1 }}</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-2" style="margin: 0.5% 0.5% 0.5% 0.5%; background-color: #FFB900; border:1px solid #rgb(43,36,114); min-width: 23.5%; color: #fff; padding-bottom: 5px; height: 95px; top: 18%; left: 1%;">
                    <div class="col-lg-12" style="background-color: #fff; margin-top: 10px; padding: 5px 5px 5px 5px;">
                        <table class="col-md-12" border="0">
                            <tr>
                                <td width="75%"><img src="/logo-terminal/koja.png" width="75%"></td>
                                <td><b class=" {{ $classKoja }}">{{ $koja }}</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-2" style="margin: 0.5% 0.5% 0.5% 0.5%; background-color: #FFB900; border:1px solid #rgb(43,36,114); min-width: 23.5%; color: #fff; padding-bottom: 5px; height: 95px; top: 18%; left: 1%;">
                    <div class="col-lg-12" style="background-color: #fff; margin-top: 10px; padding: 5px 5px 5px 5px;">
                        <table class="col-md-12" border="0">
                            <tr>
                                <td width="75%"><img src="/logo-terminal/tmal.png" width="75%"></td>
                                <td><b class="{{ $classTmal }}">{{ $tmal }}</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-12">
                <div id="daily" style="min-width: 400px; height: 400px; margin: 0 auto;"></div>
                <div style="padding-left: 100px;">*) Keterangan: Data Dwelling Time TER3 2019 tidak lengkap. </div><br />
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
                        <h5><a href="{{ route('reformasi-birokrasi') }}">Reformasi Birokrasi</a></h5>
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
    // fetch('http://oppriok.dephub.go.id/api/dt')
    fetch('http://oppriok.dephub.go.id/api/dt')
        .then((response) => {
            return response.json();
        })
        .then((dt) => {
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
                    categories: dt['labels']
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
                    data: dt['jict']
                }, {
                    name: 'NPCT1',
                    lineWidth: 5,
                    data: dt['npct1']
                }, {
                    name: 'KOJA',
                    lineWidth: 5,
                    data: dt['koja']
                }, {
                    name: 'TMAL',
                    lineWidth: 5,
                    data: dt['tmal']
                }]
            });
        })
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
  });
</script>
@endsection
