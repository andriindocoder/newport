<label class="contact-label"><span>Data Perusahaan</span></label>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('badan_usaha_id') ? 'has-error' : ''}} m-input">
            <label>Badan Usaha <sup>*</sup></label>
            {!! Form::select('badan_usaha_id',$listBadanUsaha,null,['class'=>'selectpicker','title' => 'Pilih Badan Usaha ...','id'=>'badan-usaha-id','data-live-search'=>'true']) !!}
            @if($errors->has('badan_usaha_id'))
            <span class="help-block badge badge-danger">{{ $errors->first('badan_usaha_id') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('jenis_usaha_id') ? 'has-error' : ''}} m-input">
            <label>Bidang Usaha <sup>*</sup></label>
            {!! Form::select('jenis_usaha_id',App\Model\JenisUsaha::pluck('jenis_usaha','id'),null,['class'=>'selectpicker','title' => 'Pilih Jenis Usaha ...','id'=>'jenis-usaha-id','data-live-search'=>'true']) !!}
            @if($errors->has('jenis_usaha_id'))
            <span class="help-block badge badge-danger">{{ $errors->first('jenis_usaha_id') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('npwp') ? 'has-error' : ''}} m-input">
        <label>NPWP <sup>*</sup></label>
        
        {!! Form::text('npwp', null , ['class'=> 'form-control', 'placeholder' => Auth::user()->pmku->npwp ]) !!}

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
            
            {!! Form::text('nomor_siup', null, ['class'=> 'form-control', 'placeholder' => Auth::user()->pmku->nomor_siup]) !!}

            @if($errors->has('nomor_siup'))
            <span class="help-block badge badge-danger">{{ $errors->first('nomor_siup') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('tanggal_siup') ? 'has-error' : ''}} m-input">

            <label>Tanggal Terbit SIUP <sup>*</sup></label>
            
        <input class="form-control" id="date" name="tanggal_siup" placeholder='yyyy-mm-dd (Contoh : 2018-12-24)' type="text">

            @if($errors->has('tanggal_siup'))
            <span class="help-block badge badge-danger">{{ $errors->first('tanggal_siup') }}</span>
            @endif
        </div>
        
        
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('file_npwp') ? 'has-error' : ''}} m-input">
            <label>NPWP Perusahaan <sup>*</sup></label>
            <img src="{{ url(Auth::user()->pmku->file_npwp) }}" width="400">
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
            {!! Form::select('wilayah_id',App\Model\Wilayah::pluck('nama_wilayah','id'),null,['class'=>'selectpicker','title' => 'Domisili Kantor ...','id'=>'nama-wilayah-id','data-live-search'=>'true']) !!}
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
            <label>Hotline<sup>*</sup></label>

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
                {!! Form::select('tempat_kantor',$listTempatKantor,null,['class'=>'selectpicker','title' => 'Pilih Kantor Pusat / Cabang ...','id'=>'tempat-kantor','data-live-search'=>'true']) !!}
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

            {!! Form::text('email_perusahaan', Auth::user()->email, ['class'=> 'form-control', 'placeholder' => Auth::user()->email, 'disabled'=>'disabled']) !!}

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