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
                    <div class="contact-form">
                            <label class="contact-label"><span>Data Perusahaan</span></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}} m-input">
                                        <label>Name <sup>*</sup></label>

                                        {!! Form::text('name', null, ['class'=> 'form-control']) !!}

                                        @if($errors->has('name'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('badan_usaha_id') ? 'has-error' : ''}} m-input">
                                        <label>Badan Usaha <sup>*</sup></label>
                                        {!! Form::select('badan_usaha_id',['1'=>1],null,['class'=>'selectpicker','title' => 'Pilih Badan Usaha ...','id'=>'badan-usaha-id','data-live-search'=>'true']) !!}
                                        @if($errors->has('badan_usaha_id'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('badan_usaha_id') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('jenis_usaha_id') ? 'has-error' : ''}} m-input">
                                        <label>Bidang Usaha <sup>*</sup></label>
                                        {!! Form::select('jenis_usaha_id',['1'=>1],null,['class'=>'selectpicker','title' => 'Pilih Jenis Usaha ...','id'=>'jenis-usaha-id','data-live-search'=>'true']) !!}
                                        @if($errors->has('jenis_usaha_id'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('jenis_usaha_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('tanggal_siup') ? 'has-error' : ''}} m-input">

                                        <label>Tanggal Terbit SIUP <sup>*</sup></label>
                                        
                                        <input class="form-control" id="date" name="tanggal_siup" placeholder="YYYY-MM-DD" type="text"/>

                                        @if($errors->has('tanggal_siup'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('tanggal_siup') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('nama_perusahaan') ? 'has-error' : ''}} m-input">
                                        <label>Nama Perusahaan <sup>*</sup></label>

                                        {!! Form::text('nama_perusahaan', null, ['class'=> 'form-control']) !!}

                                        @if($errors->has('nama_perusahaan'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('nama_perusahaan') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('npwp') ? 'has-error' : ''}} m-input">
                                        <label>NPWP <sup>*</sup></label>

                                        {!! Form::text('npwp', null, ['class'=> 'form-control']) !!}

                                        @if($errors->has('npwp'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('npwp') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('file_npwp') ? 'has-error' : ''}} m-input">
                                        <label>Upload NPWP Perusahaan <sup>*</sup></label>
                                        {!! Form::file('file_npwp',['class'=>'form-control-file']) !!}
                                        @if($errors->has('file_npwp'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('file_npwp') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('file_struktur') ? 'has-error' : ''}} m-input">
                                        <label>Upload Dokumen Struktur Organisasi Perusahaan <sup>*</sup></label>
                                        <input type="file" class="form-control-file" name="file_struktur">
                                        @if($errors->has('file_struktur'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('file_struktur') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('file_akta') ? 'has-error' : ''}} m-input">
                                        <label>Upload Dokumen Akta SIUP KUM HAM <sup>*</sup></label>
                                        <input type="file" class="form-control-file" name="file_akta">
                                        @if($errors->has('file_akta'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('file_akta') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('file_siup') ? 'has-error' : ''}} m-input">
                                        <label>Upload Dokumen SIUP <sup>*</sup></label>
                                        <input type="file" class="form-control-file" name="file_siup">
                                        @if($errors->has('file_siup'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('file_siup') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('file_domisili') ? 'has-error' : ''}} m-input">
                                        <label>Upload Dokumen Surat Keterangan Domisili <sup>*</sup></label>
                                        <input type="file" class="form-control-file" name="file_domisili">
                                        @if($errors->has('file_domisili'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('file_domisili') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <label class="contact-label"><span>Data Kantor</span></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('nomor_akta') ? 'has-error' : ''}} m-input">
                                        <label>No. Akta Pendirian Perusahaan <sup>*</sup></label>

                                        {!! Form::text('nomor_akta', null, ['class'=> 'form-control']) !!}

                                        @if($errors->has('nomor_akta'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('nomor_akta') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('wilayah_id') ? 'has-error' : ''}} m-input">
                                        <label>Wilayah Domisili Kantor <sup>*</sup></label>
                                        {!! Form::select('wilayah_id',['1'=>1],null,['class'=>'selectpicker','title' => 'Domisili Kantor ...','id'=>'nama-wilayah-id','data-live-search'=>'true']) !!}
                                        @if($errors->has('wilayah_id'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('wilayah_id') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('alamat_perusahaan') ? 'has-error' : ''}} m-input">
                                        <label>Alamat <sup>*</sup></label>

                                        {!! Form::textarea('alamat_perusahaan', null, ['class'=> 'form-control','rows'=>3]) !!}

                                        @if($errors->has('alamat_perusahaan'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('alamat_perusahaan') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('fax') ? 'has-error' : ''}} m-input">
                                        <label>Fax</label>

                                        {!! Form::text('fax', null, ['class'=> 'form-control']) !!}

                                        @if($errors->has('fax'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('fax') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('hotline') ? 'has-error' : ''}} m-input">
                                        <label>Hotline</label>

                                        {!! Form::text('hotline', null, ['class'=> 'form-control']) !!}

                                        @if($errors->has('hotline'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('hotline') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('file_ktp') ? 'has-error' : ''}} m-input">
                                        <label>Upload KTP Penanggung Jawab <sup>*</sup></label>
                                        <input type="file" class="form-control-file" name="file_ktp">
                                        @if($errors->has('file_ktp'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('file_ktp') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('tempat_kantor') ? 'has-error' : ''}} m-input">
                                            <label>Tempat Kantor / Pemilik Usaha <sup>*</sup></label>
                                            {!! Form::select('tempat_kantor',['1'=>1],null,['class'=>'selectpicker','title' => 'Pilih Kantor Pusat / Cabang ...','id'=>'tempat-kantor','data-live-search'=>'true']) !!}
                                            @if($errors->has('tempat_kantor'))
                                            <span class="help-block badge badge-danger">{{ $errors->first('tempat_kantor') }}</span>
                                            @endif
                                        </div>
                                    <div class="form-group {{ $errors->has('telepon') ? 'has-error' : ''}} m-input">
                                        <label>Telepon Kantor <sup>*</sup></label>

                                        {!! Form::text('telepon', null, ['class'=> 'form-control']) !!}

                                        @if($errors->has('telepon'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('telepon') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('email_perusahaan') ? 'has-error' : ''}} m-input">
                                        <label>Email Kantor Perusahaan <sup>*</sup></label>

                                        {!! Form::text('email_perusahaan', null, ['class'=> 'form-control']) !!}

                                        @if($errors->has('email_perusahaan'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('email_perusahaan') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('penanggung_jawab') ? 'has-error' : ''}} m-input">
                                        <label>Nama Penanggung Jawab <sup>*</sup></label>

                                        {!! Form::text('penanggung_jawab', null, ['class'=> 'form-control']) !!}

                                        @if($errors->has('penanggung_jawab'))
                                        <span class="help-block badge badge-danger">{{ $errors->first('penanggung_jawab') }}</span>
                                        @endif
                                    </div>
                                </div>
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
        </div>
    </div>
</section>
@endsection
@include('frontend.registrasi.script')