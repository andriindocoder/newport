@extends('layouts.frontend.main')

@section('pageTitle', 'Informasi Publik')

@section('content')
<section>
    <div class="content-header">
        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="desc">
                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Informasi</span></small>
                        <h2>Informasi Publik</h2>
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection