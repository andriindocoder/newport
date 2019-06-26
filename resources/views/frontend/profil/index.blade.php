@extends('layouts.frontend.main')
@section('pageTitle','Profil OP Priok')
@section('content')
	<section>
	    <div class="content-header">
	        <img src="{{ asset('frontend-asset/images/head.png') }}" />
	        <div class="container">
	            <div class="row">
	                <div class="col">
	                    <div class="desc" id="breadcrumb">
	                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Sejarah</span></small>
	                        <h2>Profil</h2>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="news-detail">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-9" id="profil">
	                    <p class="breadcrumb-list">
	                        <span><a href="#">Portal OP</a></span>
	                        <span><a href="#">Profil</a></span>
	                        <span>Sejarah Singkat Otoritas Pelabuhan</span>
	                    </p>
	                    <div class="news-desc">
	                        <article>
	                            <div class="news-header">
	                                <h2>Sejarah <small>Sejarah Singkat Kantor Otoritas Pelabuhan Utama</small></h2>

	                            </div>
	                            <div class="news-img">
                                    @if(!empty($sejarah->gambar1))
                                    <img src="{{ url($sejarah->gambar1) }}" width="100%" /><br>
                                    @endif
                                    @if(!empty($sejarah->gambar2))
                                    <img src="{{ url($sejarah->gambar1) }}" width="100%" /><br>
                                    @endif
                                    @if(!empty($sejarah->gambar3))
                                    <img src="{{ url($sejarah->gambar1) }}" width="100%" /><br>
                                    @endif
                                    @if(!empty($sejarah->gambar4))
                                    <img src="{{ url($sejarah->gambar1) }}" width="100%" /><br>
                                    @endif
                                    @if(!empty($sejarah->gambar5))
                                    <img src="{{ url($sejarah->gambar1) }}" width="100%" /><br>
                                    @endif
                                </div>
                                {!! htmlspecialchars_decode(stripslashes($sejarah->konten))!!}
	                        </article>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="sidebar-list">
	                        <div class="sidebar-box sidebar-btn">
	                            <a href="#" class="btn btn-blue"><i class="fa fa-file-pdf-o"></i> Company Profile</a>
	                        </div>
	                        <div class="sidebar-box sidebar-nav">
	                            <ul class="list">
	                                <li class="active"><a href="#sejarah">Sejarah</a></li>
	                                <li><a href="#struktur">Struktur Organisasi</a></li>
	                                <li><a href="#visimisi">Visi dan Misi</a></li>
	                                <li><a href="#tupoksi">Tugas Pokok dan Fungsi</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="info-box">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    <h4>How can we help you?</h4>
	                </div>
	                <div class="col-md-6 right">
	                    <a href="#" class="btn btn-blue">Send Feedback <i class="fa fa-chevron-right"></i></a>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
@endsection
@section('script')
<script>
	$(document).ready(function(){
		$("ul.list>li a").on('click',function(){
			var $desc = $('#profil');
			var $bread = $('#breadcrumb');
			switch($(this).attr('href')) {
				case '#sejarah' :
					$desc.load('/profil/sejarah');
					$bread.html('<small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Sejarah</span></small><h2>Profil</h2>');
						$('li').removeClass();
						$(this).parent().addClass('active');
					break;
				case '#struktur' :
					$desc.load('/profil/struktur');
					$bread.html('<small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Struktur Organisasi</span></small><h2>Profil</h2>');
						$('li').removeClass();
						$(this).parent().addClass('active');
					break;
				case '#visimisi' :
					$desc.load('/profil/visi-misi');
					$bread.html('<small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Visi dan Misi</span></small><h2>Profil</h2>');
						$('li').removeClass();
						$(this).parent().addClass('active');
					break;
				case '#tupoksi' :
					$desc.load('/profil/tupoksi');
					$bread.html('<small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Tugas Pokok dan Fungsi</span></small><h2>Profil</h2>');
						$('li').removeClass();
						$(this).parent().addClass('active');
					break;
			}
		});
	});
</script>
@endsection