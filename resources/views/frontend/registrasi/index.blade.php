@extends('layouts.frontend.main')

@section('pageTitle', 'Pendaftara PMKU')

@section('content')
<section>
    <div class="content-header">
        <img src="{{ asset('frontend-asset/images/bg-header3.png') }}" />
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="desc">
                    <small class="breadcrumb-list"><span><a href="{{ url('/') }}">Beranda</a></span><span>Pendaftaran PMKU</span></small>
                        <h2>Pendaftaran PMKU</h2>
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
                    <label class="content-label">Pendaftaran PMKU</label>
                </div>
            </div>
            {!! Form::open([
                'method' => 'POST',
                'route' => 'registrasi.tipe-perusahaan',
                'id' => 'form-registrasi-tipe-perusahaan',
            ]) !!}
            <div class="row">
                <div class="col">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-6">
                                <h6>Apakah Perusahaan Anda merupakan <strong>Agen Pelayaran(AP), Perusahaan Bongkar Muat(PBM), </strong>atau <strong>Jasa Pengurusan Transportasi(JPT) </strong>yang terdaftar di Inaportnet ?</h6>
                                <div class="form-group m-input">
                                    {!! Form::radio('agen_pelayaran',1,true) !!} Ya
                                    <br>
                                    {!! Form::radio('agen_pelayaran',2) !!}
                                        Tidak
                                </div>
                                <div class="btn-box" align="center">
                                    <button type="submit" class="btn btn-blue"><span> Lanjut</span></button>
                                    <a href="{{ url('/') }}" class="btn btn-warning"> Batal</a>
                                </div>
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
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