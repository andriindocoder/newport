<label class="contact-label"><span>Data Perusahaan</span></label>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('badan_usaha_id') ? 'has-error' : ''}} m-input">
            <label>Badan Usaha <sup>*</sup></label>
            {!! Form::text('badan_usaha', null, ['class'=> 'form-control','placeholder'=>Auth::user()->pmku->badan_usaha,'disabled']) !!}
            @if($errors->has('badan_usaha_id'))
            <span class="help-block badge badge-danger">{{ $errors->first('badan_usaha_id') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('jenis_usaha_id') ? 'has-error' : ''}} m-input">
            <label>Bidang Usaha <sup>*</sup></label>
            {!! Form::text('jenis_usaha_id', null, ['class'=> 'form-control','placeholder'=>Auth::user()->pmku->jenisUsaha->jenis_usaha,'disabled']) !!}
            @if($errors->has('jenis_usaha_id'))
            <span class="help-block badge badge-danger">{{ $errors->first('jenis_usaha_id') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('npwp') ? 'has-error' : ''}} m-input">
        <label>NPWP <sup>*</sup></label>
        
        {!! Form::text('npwp', null , ['class'=> 'form-control', 'placeholder' => Auth::user()->pmku->npwp ,'disabled']) !!}

        @if($errors->has('npwp'))
        <span class="help-block badge badge-danger">{{ $errors->first('npwp') }}</span>
        @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('nama_perusahaan') ? 'has-error' : ''}} m-input">
            <label>Nama Perusahaan <sup>*</sup></label>
            {!! Form::text('nama_perusahaan', Auth::user()->nama_perusahaan, ['class'=> 'form-control', 'placeholder' => Auth::user()->nama_instansi, 'disabled'=>'disabled' ]) !!}

            @if($errors->has('nama_perusahaan'))
            <span class="help-block badge badge-danger">{{ $errors->first('nama_perusahaan') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('nomor_siup') ? 'has-error' : ''}} m-input">
            <label>Nomor Siup<sup>*</sup></label>
            
            {!! Form::text('nomor_siup', null, ['class'=> 'form-control', 'placeholder' => Auth::user()->pmku->nomor_siup,'disabled']) !!}

            @if($errors->has('nomor_siup'))
            <span class="help-block badge badge-danger">{{ $errors->first('nomor_siup') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('tanggal_siup') ? 'has-error' : ''}} m-input">

            <label>Tanggal Terbit SIUP <sup>*</sup></label>
            
        <input class="form-control" id="date" name="tanggal_siup" placeholder={{ Auth::user()->pmku->tanggal_siup }} type="text" disabled>

            @if($errors->has('tanggal_siup'))
            <span class="help-block badge badge-danger">{{ $errors->first('tanggal_siup') }}</span>
            @endif
        </div>
        
        
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('file_npwp') ? 'has-error' : ''}} m-input">
            <label>NPWP Perusahaan <sup>*</sup></label><br>
            <button class="btn btn-secondary btn-sm"><i class="fa fa-search"></i> Lihat File NPWP</button>
        </div>
        <div class="form-group {{ $errors->has('file_struktur') ? 'has-error' : ''}} m-input">
            <label>Upload Dokumen Struktur Organisasi Perusahaan <sup>*</sup></label><br>
            <button class="btn btn-secondary btn-sm"><i class="fa fa-search"></i> Lihat File Struktur Organisasi Perusahaan</button>
        </div>
        <div class="form-group {{ $errors->has('file_akta') ? 'has-error' : ''}} m-input">
            <label>Upload Dokumen Akta SIUP KUM HAM <sup>*</sup></label><br>
            <button class="btn btn-secondary btn-sm"><i class="fa fa-search"></i> Lihat File Dokumen Akta SIUP KUM HAM</button>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('file_siup') ? 'has-error' : ''}} m-input">
            <label>Upload Dokumen SIUP <sup>*</sup></label><br>
            <button class="btn btn-secondary btn-sm"><i class="fa fa-search"></i> Lihat File Dokumen SIUP</button>
        </div>
        <div class="form-group {{ $errors->has('file_domisili') ? 'has-error' : ''}} m-input">
            <label>Upload Dokumen Surat Keterangan Domisili <sup>*</sup></label><br>
            <button class="btn btn-secondary btn-sm"><i class="fa fa-search"></i> Lihat File Surat Keterangan Domisili</button>
        </div>
    </div>
</div>
<label class="contact-label"><span>Data Kantor</span></label>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('nomor_akta') ? 'has-error' : ''}} m-input">
            <label>No. Akta Pendirian Perusahaan <sup>*</sup></label>

            {!! Form::text('nomor_akta', null, ['class'=> 'form-control','placeholder'=>Auth::user()->pmku->nomor_akta,'disabled']) !!}

            @if($errors->has('nomor_akta'))
            <span class="help-block badge badge-danger">{{ $errors->first('nomor_akta') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('wilayah_id') ? 'has-error' : ''}} m-input">
            <label>Wilayah Domisili Kantor <sup>*</sup></label>
            {!! Form::text('wilayah_id', null, ['class'=> 'form-control','placeholder'=>Auth::user()->pmku->wilayah->nama_wilayah,'disabled']) !!}
            @if($errors->has('wilayah_id'))
            <span class="help-block badge badge-danger">{{ $errors->first('wilayah_id') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('alamat_perusahaan') ? 'has-error' : ''}} m-input">
            <label>Alamat <sup>*</sup></label>

            {!! Form::textarea('alamat_perusahaan', null, ['class'=> 'form-control','rows'=>3,'placeholder'=>Auth::user()->pmku->alamat_perusahaan,'disabled']) !!}

            @if($errors->has('alamat_perusahaan'))
            <span class="help-block badge badge-danger">{{ $errors->first('alamat_perusahaan') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('fax') ? 'has-error' : ''}} m-input">
            <label>Fax</label>

            {!! Form::text('fax', null, ['class'=> 'form-control','placeholder'=>Auth::user()->pmku->fax,'disabled']) !!}

            @if($errors->has('fax'))
            <span class="help-block badge badge-danger">{{ $errors->first('fax') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('hotline') ? 'has-error' : ''}} m-input">
            <label>Hotline<sup>*</sup></label>

            {!! Form::text('hotline', null, ['class'=> 'form-control','placeholder'=>Auth::user()->pmku->hotline,'disabled']) !!}

            @if($errors->has('hotline'))
            <span class="help-block badge badge-danger">{{ $errors->first('hotline') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('file_ktp') ? 'has-error' : ''}} m-input">
            <label>Upload KTP Penanggung Jawab <sup>*</sup></label><br>
            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal" data-ktp= "{{ url(Auth::user() ? Auth::user()->pmku->file_ktp : 'empty.jpg') }}">
                    <i class="fa fa-search"></i> Lihat File KTP Penanggung Jawab
            </button>
        </div>
    </div>
    <div class="col-md-6">
            <div class="form-group {{ $errors->has('tempat_kantor') ? 'has-error' : ''}} m-input">
                <label>Tempat Kantor / Pemilik Usaha <sup>*</sup></label>
                {!! Form::select('tempat_kantor',$listTempatKantor,null,['class'=>'selectpicker','title' => 'Pilih Kantor Pusat / Cabang ...','id'=>'tempat-kantor','data-live-search'=>'true']) !!}
                @if($errors->has('tempat_kantor'))
                <span class="help-block badge badge-danger">{{ $errors->first('tempat_kantor') }}</span>
                @endif
            </div>
        <div class="form-group {{ $errors->has('telepon') ? 'has-error' : ''}} m-input">
            <label>Telepon Kantor <sup>*</sup></label>

            {!! Form::text('telepon', null, ['class'=> 'form-control','placeholder'=>Auth::user()->pmku->telepon,'disabled']) !!}

            @if($errors->has('telepon'))
            <span class="help-block badge badge-danger">{{ $errors->first('telepon') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('email_perusahaan') ? 'has-error' : ''}} m-input">
            <label>Email Kantor Perusahaan <sup>*</sup></label>

            {!! Form::text('email_perusahaan', Auth::user()->email, ['class'=> 'form-control', 'placeholder' => Auth::user()->email, 'disabled'=>'disabled']) !!}

            @if($errors->has('email_perusahaan'))
            <span class="help-block badge badge-danger">{{ $errors->first('email_perusahaan') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('penanggung_jawab') ? 'has-error' : ''}} m-input">
            <label>Nama Penanggung Jawab <sup>*</sup></label>

            {!! Form::text('penanggung_jawab', null, ['class'=> 'form-control','placeholder'=>Auth::user()->pmku->penanggung_jawab,'disabled']) !!}

            @if($errors->has('penanggung_jawab'))
            <span class="help-block badge badge-danger">{{ $errors->first('penanggung_jawab') }}</span>
            @endif
        </div>
    </div>
</div>
@include('frontend.pelayanan.dashscript')
@include('frontend.pelayanan.modal-ktp')