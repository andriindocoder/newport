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
            <div class="col-md-12">
                <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto;"></div>
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
                        <h5><a href="http://jdih.dephub.go.id/" target="_blank">Informasi Hukum</a></h5>
                        <p>
                        Informasi Peraturan, Perundang-undangan, dan Peraturan Kepala Kantor Otoritas Tanjung Priok
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
    // jict = [0, 5.18, 3.31, 3.38, 4.42, 5.85, 4.25, 4.59, 4.05, 5.04, 3.32, 3.12];
    jict = fetch('http://localhost:8000/api/dt')
        .then((response) => {
            return response.json();
        })
        .then((data)=>{
            $('#container').highcharts({
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
                    data:data['npct1']
                }, {
                    name: 'NPCT1',
                    lineWidth: 5,
                    data: data['npct1']
                }, {
                    name: 'KOJA',
                    lineWidth: 5,
                    data: data['koja']
                }, {
                    name: 'TER3',
                    lineWidth: 5,
                    data: [0, 3.75, 5.77, 3.99, 0.89, 3.59, 3.26, 3.37, 1.97, 2.65, 2.37, 3.33]
                }, {
                    name: 'TMAL',
                    lineWidth: 5,
                    data: data['tmal']
                }]
            });
        })
  });
</script>
@endsection