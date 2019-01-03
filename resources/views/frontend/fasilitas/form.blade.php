<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <label class="content-label" id="label-fasilitas">Batas DLKr/DLKp Pelabuhan Tanjung Priok dan Pelabuhan Pasar Ikan</label>
            </div>
            <div class="col-md-9" style="padding-right: 50px;" id="fasilitas">
                Form.blade.php
            </div>
            <div class="col-md-3">
                <div class="sidebar-list">
                    <div class="sidebar-box sidebar-nav">
                        <ul class="list">
                            <li class="active"><a href="#batas">Batas DLKr/DLKp</a></li>
                            <li><a href="#rekapitulasi-fasilitas">Rekapitulasi Fasilitas dan Peralatan</a></li>
                            <li><a href="#fasilitas-dermaga">Fasilitas Dermaga</a></li>
                            <li><a href="#fasilitas-gudang">Fasilitas Gudang</a></li>
                            <li><a href="#fasilitas-lapangan-penumpukan">Fasilitas Lapangan Penumpukan</a></li>
                            <li><a href="#daerah-labuh">Daerah Labuh</a></li>
                            <li><a href="#breakwater">Breakwater</a></li>
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
			var $desc = $('#fasilitas');
            var $label = $('#label-fasilitas');
			switch($(this).attr('href')) {
                case '#batas' :
                    $desc.load('/fasilitas-pelabuhan/batas-dlkr-dlkp');
                    $label.html('Batas DLKr/DLKp Pelabuhan Tanjung Priok dan Pelabuhan Pasar Ikan');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#rekapitulasi-fasilitas' :
                    $desc.load('/fasilitas-pelabuhan/rekapitulasi-fasilitas-dan-peralatan');
                    $label.html('Rekapitulasi Fasilitas dan Peralatan Pelabuhan Tanjung Priok');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#fasilitas-dermaga' :
                $label.html('Fasilitas Dermaga Pelabuhan Tanjung Priok');
                    $desc.load('/fasilitas-pelabuhan/fasilitas-dermaga');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#fasilitas-gudang' :
                $label.html('Fasilitas Gudang di Pelabuhan Tanjung Priok');
                    $desc.load('/fasilitas-pelabuhan/fasilitas-gudang');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#fasilitas-lapangan-penumpukan' :
                $label.html('Fasilitas Lapangan Penumpukan di Pelabuhan Tanjung Priok');
                    $desc.load('/fasilitas-pelabuhan/fasilitas-lapangan-penumpukan');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#daerah-labuh' :
                $label.html('Daerah Labuh Sesuai Dengan Kepentingannya di Pelabuhan Tanjung Priok');
                    $desc.load('/fasilitas-pelabuhan/daerah-labuh');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
                case '#breakwater' :
                $label.html('Breakwater');
                    $desc.load('/fasilitas-pelabuhan/breakwater');
                        $('li').removeClass();
                        $(this).parent().addClass('active');
                    break;
            }
		});
	});
</script>
@endsection