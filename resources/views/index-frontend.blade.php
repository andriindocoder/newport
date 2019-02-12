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
                <div id="monthly" style="min-width: 400px; height: 400px; margin: 0 auto;"></div><br>
                <div id="daily" style="min-width: 400px; height: 400px; margin: 0 auto;"></div>
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
                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/BtrpgVKgBuU/?utm_source=ig_embed&amp;utm_medium=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/BtrpgVKgBuU/?utm_source=ig_embed&amp;utm_medium=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div><div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BtrpgVKgBuU/?utm_source=ig_embed&amp;utm_medium=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#Repost from @kemenhub151 with @regram.app ... #KawulaModa, Sabtu (9/2) Menhub @budikaryas menerima penghargaan Anugerah Kepedulian Pers kategori Instansi Pemerintah. Menhub menyampaikan apresiasinya kepada rekan-rekan Pers Indonesia. Kehadiran pers sangat penting karena media dapat memberikan saran, masukan, serta meng-evaluasi kebijakan dalam meningkatkan kinerja instansi pemerintah.</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/op_tanjungpriok/?utm_source=ig_embed&amp;utm_medium=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Otoritas Pelabuhan Tg.Priok</a> (@op_tanjungpriok) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2019-02-10T00:59:00+00:00">Feb 9, 2019 at 4:59pm PST</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Btmrx-FAlXL/?utm_source=ig_embed&amp;utm_medium=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/Btmrx-FAlXL/?utm_source=ig_embed&amp;utm_medium=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div><div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/Btmrx-FAlXL/?utm_source=ig_embed&amp;utm_medium=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Senam Bersama Jum&#39;at (8/2) Kantor Otoritas Pelabuhan Utama Tanjung Priok . . . @djplkemenhub151 @kemenhub151 #djplkemenhub151 #djplkemenhub #kemenhub #kemenhub151 #humasoppriok</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/op_tanjungpriok/?utm_source=ig_embed&amp;utm_medium=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Otoritas Pelabuhan Tg.Priok</a> (@op_tanjungpriok) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2019-02-08T02:42:41+00:00">Feb 7, 2019 at 6:42pm PST</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHumasOP%2Fposts%2F2304564499778130&width=500" width="500" height="745" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHumasOP%2Fposts%2F2304059963161917&width=500" width="500" height="814" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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
            categories: ['01-Jan','02-Jan','03-Jan','04-Jan','05-Jan','06-Jan','07-Jan','08-Jan','09-Jan','10-Jan','11-Jan','12-Jan','13-Jan','14-Jan','15-Jan','16-Jan','17-Jan','18-Jan','19-Jan','20-Jan','21-Jan','22-Jan','23-Jan','24-Jan','25-Jan','26-Jan','27-Jan','28-Jan','29-Jan','30-Jan','31-Jan','01-Feb','02-Feb','03-Feb','04-Feb','05-Feb','06-Feb','07-Feb','08-Feb','09-Feb']
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
            data: [3.24, 5.21, 5.58, 4.74, 4.32, 3.86, 4.76, 4.51, 4.22, 4.27, 4.79, 3.25, 2.81, 3.86, 3.49, 3.70, 3.83, 4.61, 3.63, 3.48, 3.61, 3.50, 3.41, 3.08, 3.27, 2.49, 2.25, 3.39, 3.32, 3.42, 3.29, 2.90, 2.08, 1.99, 2.69, 2.88, 3.46, 3.58, 3.55, 3.17]
        }, {
            name: 'NPCT1',
            lineWidth: 5,
            data: [3.24, 4.79, 4.34, 4.25, 3.94, 3.58, 3.92, 3.80, 3.71, 4.13, 3.79, 3.05, 3.42, 3.54, 2.64, 3.10, 4.00, 3.04, 2.34, 1.62, 2.76, 2.85, 2.80, 3.22, 2.42, 2.38,  2.13, 2.30, 3.45, 3.68, 2.98, 2.81, 2.29, 1.21, 2.87, 3.38, 3.48, 4.30, 3.18, 2.53]
        }, {
            name: 'KOJA',
            lineWidth: 5,
            data: [4.45, 6.13, 4.84, 4.64, 3.47, 2.88, 4.67, 4.73, 3.44, 4.07, 4.78, 3.88, 2.57, 4.06, 3.48, 2.59, 3.21, 3.59, 2.52, 1.81, 3.04, 3.38, 3.51, 1.85, 2.47, 2.38, 1.58, 3.69, 3.69, 3.47, 2.96, 4.03, 2.33, 1.62, 2.75, 2.86, 3.66, 3.40, 4.07, 3.61]
        }, {
            name: 'TMAL',
            lineWidth: 5,
            data: [2.32, 4.11, 5.11, 3.97, 2.36, 1.26, 3.17, 3.19, 3.73, 2.91, 1.93, 3.56, 1.63, 4.15, 3.55, 3.86, 1.83, 1.41, 1.88, 2.63, 3.86, 4.69, 5.88, 1.45, 1.47, 2.34, 1.38, 2.19, 2.96, 2.97, 1.60, 1.10, 1.82, 2.58, 2.74, 2.32, 3.63, 2.62, 2.08, 1.69]
        }]
    });
  });
</script>
@endsection