<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <label class="content-label" id="label-ppid">Reformasi Birokrasi</label>
            </div>
            <div class="col-md-9" style="padding-right: 50px;" id="reformasi">
                @include('frontend.reformasi-birokrasi.profil')
            </div>
            <div class="col-md-3">
                <div class="sidebar-list">
                    <div class="sidebar-box sidebar-nav">
                        <ul class="list">
                            @foreach($subMenus as $subMenu)
                                <li class="active"><a href="{{ $subMenu->slug }}">{{ $subMenu->judul_menu }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
<script>
	$(document).ready(function(){
		$("ul.list>li a").on('click',function(){
			var $desc = $('#ppid');
            var $label = $('#label-ppid');
			switch($(this).attr('href')) {
                case '#formulir-ppid' :
                    $desc.load('/ppid/form');
                    $label.html('Form Layanan Permohonan Informasi');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#profil-ppid' :
                    $desc.load('/ppid/profil');
                    $label.html('Profil PPID');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#dasar-hukum-ppid' :
                $label.html('Dasar Hukum PPID');
                    $desc.load('/ppid/dasar-hukum');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#maklumat-pelayanan' :
                $label.html('Maklumat Pelayanan');
                    $desc.load('/ppid/maklumat-pelayanan');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#standar-layanan' :
                $label.html('Standar Layanan');
                    $desc.load('/ppid/standar-layanan');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#simpul-layanan' :
                $label.html('Simpul Layanan');
                    $desc.load('/ppid/simpul-layanan');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#jumlah-permintaan-informasi' :
                $label.html('Jumlah Permintaan Informasi');
                    $desc.load('/ppid/jumlah-permintaan-informasi');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#prosedur-permohonan' :
                $label.html('Prosedur Permohonan');
                    $desc.load('/ppid/prosedur-permohonan');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#tata-cara-informasi' :
                $label.html('Tata Cara Memperoleh Informasi Publik');
                    $desc.load('/ppid/tata-cara-memperoleh-informasi-publik');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#tata-cara-keberatan' :
                $label.html('Tata Cara Pengajuan Keberatan');
                    $desc.load('/ppid/tata-cara-pengajuan-keberatan');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#hak-kewajiban-publik' :
                $label.html('Hak dan Kewajiban Badan Publik');
                    $desc.load('/ppid/hak-dan-kewajiban-badan-publik');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#hak-kewajiban-pemohon' :
                $label.html('Hak dan Kewajiban Pemohon Informasi');
                    $desc.load('/ppid/hak-dan-kewajiban-pemohon-informasi');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
            }
		});
	});
</script>
@endsection