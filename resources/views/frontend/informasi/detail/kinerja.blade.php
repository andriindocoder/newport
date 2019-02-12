@extends('layouts.frontend.main')

@section('pageTitle', 'Laporan Kinerja')

@section('content')
<section>
    <div class="content-header">
        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="desc">
                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Informasi</span></small>
                        <h2>Laporan Kinerja Kantor OP Tanjung Priok</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label class="content-label">{{ $kinerja->judul_informasi }}</label>
                </div>
            </div>
        	@include('frontend.message')
            <div class="row">
                <div class="col-md-12">
					{!! htmlspecialchars_decode(stripslashes($kinerja->konten))!!}
                    <br><br>
                    @if($kinerja->gambar)
                    <a href="{{ url($kinerja->gambar) }}" download> Download File Laporan Kinerja</a>
                    @else
                    -
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection