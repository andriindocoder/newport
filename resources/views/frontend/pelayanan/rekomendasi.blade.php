@extends('layouts.frontend.main')

@section('pageTitle', 'Rekomendasi')

@section('content')
<section>
    <div class="content-header">
        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="desc">
                        <small class="breadcrumb-list"><span><a href="#">Beranda</a></span><span>Rekomendasi</span></small>
                        <h2>Rekomendasi</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box">
        <div class="container">
            @include('frontend.message')
            <div class="row">
                <div class="col">
                    <label class="content-label">Menu Rekomendasi</label>
                </div>
            </div>
            <div class="contact-form">
                <form role="form">	                            
                    <div class="btn-box" align="center">
                    <a href="{{ route('pelayanan.rekomendasi-cabang-ap') }}" class="btn btn-blue btn-blocks" style="width: 500px;margin-bottom: 5px; margin-top:-30px;">Rekomendasi Pembukaan Kantor Cabang Pelayaran</a><br>
                        <a href="{{ route('pelayanan.rekomendasi-cabang-siupkk') }}" class="btn btn-blue btn-blocks" style="width: 500px;margin-bottom: 5px">Rekomendasi Cabang Keagenan Kapal</a><br>
                        <a href="{{ route('pelayanan.rekomendasi-sikk') }}" class="btn btn-blue btn-blocks" style="width: 500px;margin-bottom: 5px">Rekomendasi Surat Ijin Kerja Keruk</a><br>
                        <a href="#" class="btn btn-blue btn-blocks" style="width: 500px;margin-bottom: 5px">Rekomendasi JPT</a><br>
                        <a href="{{ route('pelayanan.rekomendasi-siup-pbm') }}" class="btn btn-blue btn-blocks" style="width: 500px;margin-bottom: 5px">Rekomendasi PBM</a><br>
                        <a href="{{ route('pelayanan.rekomendasi-tps') }}" class="btn btn-blue btn-blocks" style="width: 500px;margin-bottom: 5px">Rekomendasi TPS</a>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="info-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-6 right">
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection