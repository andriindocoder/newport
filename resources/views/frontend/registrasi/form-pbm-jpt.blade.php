<div class="contact-form">
    <label class="contact-label"><span>Register Username dan Password Portal OP Tanjung Priok</span></label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('kode_perusahaan') ? 'has-error' : ''}} m-input">
                <?php $placeholderKodePerusahaan = $perusahaan->data->ina_perusahaan? $perusahaan->data->ina_perusahaan->kode_perusahaan : '';?>
                {!! Form::hidden('kode_perusahaan', $placeholderKodePerusahaan, ['class'=> 'form-control','placeholder'=>$placeholderKodePerusahaan]) !!}

                @if($errors->has('kode_perusahaan'))
                <span class="help-block badge badge-danger">{{ $errors->first('kode_perusahaan') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('no_pmku') ? 'has-error' : ''}} m-input">
                <?php $placeholderNoPmku = $perusahaan->data->ina_perusahaan? $perusahaan->data->ina_perusahaan->no_pmku : '';?>
                {!! Form::hidden('no_pmku', $placeholderNoPmku, ['class'=> 'form-control','placeholder'=>$placeholderNoPmku]) !!}

                @if($errors->has('no_pmku'))
                <span class="help-block badge badge-danger">{{ $errors->first('no_pmku') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('id') ? 'has-error' : ''}} m-input">
                <?php $placeholderId = $perusahaan->data->ina_perusahaan? $perusahaan->data->ina_perusahaan->id : '';?>
                {!! Form::hidden('id', $placeholderId, ['class'=> 'form-control','placeholder'=>$placeholderId]) !!}

                @if($errors->has('id'))
                <span class="help-block badge badge-danger">{{ $errors->first('id') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}} m-input">
                <label>Username yang Akan Digunakan<sup>*</sup></label>

                {!! Form::text('name', null, ['class'=> 'form-control']) !!}

                @if($errors->has('name'))
                <span class="help-block badge badge-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}} m-input">
                <label>Password <sup>*</sup></label>

                {!! Form::password('password', ['class'=> 'form-control']) !!}

                @if($errors->has('password'))
                <span class="help-block badge badge-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''}} m-input">
                <label>Ulangi Password <sup>*</sup></label>

                {!! Form::password('password_confirmation', ['class'=> 'form-control']) !!}

                @if($errors->has('password_confirmation'))
                <span class="help-block badge badge-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
        </div>
    </div>
    <label class="contact-label"><span>Data Perusahaan</span></label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('badan_usaha') ? 'has-error' : ''}} m-input">
                <label>Badan Usaha <sup>*</sup></label>
                {!! Form::select('badan_usaha',$listBadanUsaha,null,['class'=>'selectpicker','title' => 'Pilih Badan Usaha ...','id'=>'badan-usaha-id','data-live-search'=>'true']) !!}
                @if($errors->has('badan_usaha'))
                <span class="help-block badge badge-danger">{{ $errors->first('badan_usaha') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('jenis_usaha_id') ? 'has-error' : ''}} m-input">
                <label>Bidang Usaha <sup>*</sup></label>
                <?php $placeholderJenisUsaha = $perusahaan->data->ina_perusahaan? $perusahaan->data->ina_perusahaan->kode_tipe_perusahaan : '';?>
                {!! Form::text('jenis_usaha_id', $placeholderJenisUsaha , ['class'=> 'form-control', 'placeholder' => $placeholderJenisUsaha ]) !!}
                @if($errors->has('jenis_usaha_id'))
                <span class="help-block badge badge-danger">{{ $errors->first('jenis_usaha_id') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('nomor_siup') ? 'has-error' : ''}} m-input">
                <label>Nomor SIUP <sup>*</sup></label>
                <?php $placeholderSiup = $perusahaan->data->ina_perusahaan ? $perusahaan->data->ina_perusahaan->nomor_siupal : '';?>
                {!! Form::text('nomor_siup', $placeholderSiup, ['class'=> 'form-control','placeholder'=>$placeholderSiup]) !!}

                @if($errors->has('nomor_siup'))
                <span class="help-block badge badge-danger">{{ $errors->first('nomor_siup') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('tanggal_siup') ? 'has-error' : ''}} m-input">

                <label>Tanggal Terbit SIUP <sup>*</sup></label>
                <?php $placeholderTanggal = $perusahaan->data->ina_perusahaan ? $perusahaan->data->system_response->tglIzin : 'yyyy-mm-dd';?>
                <input class="form-control" id="date" name="tanggal_siup" placeholder="{{$placeholderTanggal}}" type="text" value="{{$placeholderTanggal}}" />

                @if($errors->has('tanggal_siup'))
                <span class="help-block badge badge-danger">{{ $errors->first('tanggal_siup') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('nama_perusahaan') ? 'has-error' : ''}} m-input">
                <label>Nama Perusahaan <sup>*</sup></label>
                <?php $placeholderNamaPerusahaan = $perusahaan->data->ina_perusahaan ? $perusahaan->data->ina_perusahaan->nama_perusahaan : '';?>
                {!! Form::text('nama_perusahaan', $placeholderNamaPerusahaan, ['class'=> 'form-control','placeholder'=>$placeholderNamaPerusahaan]) !!}

                @if($errors->has('nama_perusahaan'))
                <span class="help-block badge badge-danger">{{ $errors->first('nama_perusahaan') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('npwp') ? 'has-error' : ''}} m-input">
                <label>NPWP <sup>*</sup></label>
                <?php $placeholderNpwp = $perusahaan->data->ina_perusahaan? $perusahaan->data->ina_perusahaan->npwp : '';?>
                {!! Form::text('npwp', $placeholderNpwp, ['class'=> 'form-control','placeholder'=>$placeholderNpwp]) !!}

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
                <?php $placeholderFax = $perusahaan->data->system_response? $perusahaan->data->system_response->nofax : '';?>
                {!! Form::text('fax', $placeholderFax, ['class'=> 'form-control','placeholder'=>$placeholderFax]) !!}

                @if($errors->has('fax'))
                <span class="help-block badge badge-danger">{{ $errors->first('fax') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('hotline') ? 'has-error' : ''}} m-input">
                <label>Hotline <sup>*</sup></label>
                <?php $placeholderHotline = $perusahaan->data->system_response? $perusahaan->data->system_response->notelpon : '';?>
                {!! Form::text('hotline', $placeholderHotline, ['class'=> 'form-control','placeholder'=>$placeholderHotline]) !!}

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
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}} m-input">
                <label>Email Kantor Perusahaan <sup>*</sup></label>
                <?php $placeholderEmail = $perusahaan->data->system_response? $perusahaan->data->system_response->email : '';?>

                {!! Form::text('email', $placeholderEmail, ['class'=> 'form-control', 'placeholder'=>$placeholderEmail]) !!}

                @if($errors->has('email'))
                <span class="help-block badge badge-danger">{{ $errors->first('email') }}</span>
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
    <small><sup style="color:red">*</sup> <i>Tidak boleh kosong</i></small>
    <div class="btn-box">
        <button type="submit" class="btn btn-blue"><span>Send Form</span></button>
        <a href="{{ url('/') }}" class="btn btn-warning"> Cancel</a>
    </div>
</div>