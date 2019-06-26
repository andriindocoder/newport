@extends('layouts.frontend.main')

@section('pageTitle', 'Rencana Strategis')

@section('content')
<section>
    <div class="content-header">
        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="desc">
                        <small class="breadcrumb-list"><span><a href="#">Portal OP</a></span><span>Informasi</span></small>
                        <h2>Rencana Strategis Kantor OP Tanjung Priok</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label class="content-label">{{ $renstra->judul_informasi }}</label>
                </div>
            </div>
        	@include('frontend.message')
            <div class="row">
                <div class="col-md-12">
					{!! htmlspecialchars_decode(stripslashes($renstra->konten))!!}
                    <br>
                    @if($renstra->gambar)
                    <a href="{{ url($renstra->gambar) }}" download> <span class="btn btn-sm btn-dark"><i class="fa fa-file-pdf-o"></i> Download File</span></a>
                    @else
                    -
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection