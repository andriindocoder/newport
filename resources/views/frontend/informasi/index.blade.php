@extends('layouts.frontend.main')

@section('pageTitle', $konten->nama)

@section('content')
<section>
    <div class="content-header">
        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="desc">
                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Informasi</span></small>
                        <h2>{{ $konten->judul_informasi }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label class="content-label">{{ $konten->judul_informasi }}</label>
                </div>
            </div>
        	@include('frontend.message')
            <div class="row">
                <div class="col-md-12">
						<div align="center">
							@if($konten->gambar)
							<img class="img img-responsive" src="{{ url($konten->gambar) }}" alt="" width="50%">
							@endif
						</div>
					<br>
                   	{!! htmlspecialchars_decode(stripslashes($konten->konten))!!}
                    <?php
                        $path = $konten->gambar;
                        $ext = pathinfo($path, PATHINFO_EXTENSION);
                    ?>

                    @if($konten->gambar)
                        @if($ext == 'pdf')
                            <object type="application/pdf" data="{{ url($path) }}" width="100%" height="500" style="height: 85vh;" class="domisili">No Support</object>
                        @else 
                            <a href="{{ url($path) }}" target="_blank"><img src="{{ url($path) }}" width="100%"></a>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection