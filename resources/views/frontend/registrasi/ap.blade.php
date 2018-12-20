@extends('layouts.frontend.main')

@section('pageTitle', 'Pendaftaran PMKU')

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
                    <label class="content-label">Registrasi PMKU</label>
                </div>
            </div>
            <p align="justify"><em>Apabila Perusahaan Anda merupakan <strong>Agen Pelayaran (AP), Perusahaan Bongkar Muat (PBM), atau Jasa Pengurusan Transportasi (JPT) </strong>, Anda perlu mendaftarkan melalui <a href="https://inaportnet.dephub.go.id/site/login" target="_blank">INAPORTNET</a> terlebih dahulu. Setelah melakukan pendaftaran di inaportnet dan sudah diproses oleh admin, silahkan kembali ke halaman ini.</em></p
            <h5><strong>Apakah Perusahaan Anda merupakan Agen Pelayaran?</strong></h5>
            
            <div class="form-group m-input">
                    {!! Form::radio('agen_pelayaran',1) !!} Ya (Jika Merupakan AP)
                    <br>
                    {!! Form::radio('agen_pelayaran',2) !!} Tidak (Jika Merupakan PBM/JPT)
            </div>

            {!! Form::open([
                'method' => 'POST',
                'route' => 'registrasi.cek-siupkk',
                'id' => 'form-siupkk',
            ]) !!}
            <div class="row">
                <div class="col">
                    <div class="contact-form">
                            <label class="contact-label"><span>Data SIUPKK/SIUPAL</span></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('siupkk') ? 'has-error' : ''}} m-input">
                                        <label>Nomor SIUPKK/SIUPAL Inaportnet <sup>*</sup></label>

                                        {!! Form::text('siupkk', null, ['class'=> 'form-control']) !!}

                                        @if($errors->has('siupkk'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('siupkk') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                </div>
                            </div>
                            <div class="row">

                            </div>
                            <small><sup>*</sup> <i>Tidak boleh kosong</i></small>
                            <div class="btn-box">
                                <button type="submit" class="btn btn-blue"><span>Send Form</span></button>
                                <a href="{{ url('/') }}" class="btn btn-warning"> Cancel</a>
                            </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            
            {!! Form::open([
                'method' => 'GET',
                'route' => 'registrasi.cek-nib',
                'id' => 'form-nib',
            ]) !!}
            <div class="row">
                <div class="col">
                    <div class="contact-form">
                            <label class="contact-label"><span>Data NIB</span></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('tipe_perusahaan') ? 'has-error' : ''}} m-input">
                                        <label>Tipe Perusahaan<sup>*</sup></label>

                                        {!! Form::select('tipe_perusahaan',['PBM' => 'PBM', 'JPT' => 'JPT', 'BB' => 'BB', 'SALVAGE' => 'SALVAGE' , 'BUP' => 'BUP', 'TK' => 'TK', 'EMKL' => 'EMKL', 'OGA' => 'OGA', 'TUKS' => 'TUKS'],null,['class'=>'selectpicker','title' => 'Pilih tipe perusahaan ...','id'=>'perusahaan-tipe','data-live-search'=>'true']) !!}

                                        @if($errors->has('tipe_perusahaan'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('tipe_perusahaan') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('nib') ? 'has-error' : ''}} m-input">
                                        <label>Nomor NIB Inaportnet <sup>*</sup></label>

                                        {!! Form::text('nib', null, ['class'=> 'form-control']) !!}

                                        @if($errors->has('nib'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('nib') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                </div>
                            </div>
                            <div class="row">

                            </div>
                            <small><sup>*</sup> <i>Tidak boleh kosong</i></small>
                            <div class="btn-box">
                                <button type="submit" class="btn btn-blue"><span>Send Form</span></button>
                                <a href="{{ url('/') }}" class="btn btn-warning"> Cancel</a>
                            </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            

            {!! Form::open([
                'method' => 'POST',
                'route' => 'registrasi.store',
                'id' => 'registrasi-pmku-form',
                'files' => true,
            ]) !!}
            <div class="row">
                <div class="col">
                    @include('frontend.registrasi.form')
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</section>
@endsection
@include('frontend.registrasi.script')