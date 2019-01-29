<div class="contact-form">
    <label class="contact-label"><span>Rekomendasi Surat Izin Kerja Keruk</span></label>
        <div class="row">
            <div class="col-md-12">

                <div class="form-group {{ $errors->has('maksud_tujuan') ? 'has-error' : ''}} m-input">
                        {!! Form::label('Keterangan Maksud dan Tujuan Kegiatan Pengerukan') !!}
                        {!! Form::textarea('maksud_tujuan', null, ['class'=> 'form-control','id'=>'maksud_tujuan','rows'=>5]) !!}
    
                        @if($errors->has('maksud_tujuan'))
                        <span class="help-block text-danger">{{ $errors->first('maksud_tujuan') }}</span>
                        @endif
                      </div>

            </div>
            <div class="col-md-12">
                <div class="form-group {{ $errors->has('keterangan_lokasi') ? 'has-error' : ''}} m-input">
                        {!! Form::label('Lokasi dan Koordinat Geografis Areal yang Akan Dikeruk') !!}
                        {!! Form::textarea('keterangan_lokasi', null, ['class'=> 'form-control','id'=>'keterangan_lokasi','rows'=>5]) !!}
    
                        @if($errors->has('keterangan_lokasi'))
                        <span class="help-block text-danger">{{ $errors->first('keterangan_lokasi') }}</span>
                        @endif
                        </div>

            </div>
        </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('file_lokasi') ? 'has-error' : ''}} m-input">
                <label>File Lokasi dan Koordinat Geografis Areal yang Akan Dikeruk <sup>*</sup></label>
                {!! Form::file('file_lokasi',['class'=>'form-control-file']) !!}
                @if($errors->has('file_lokasi'))
                <span class="help-block badge badge-danger">{{ $errors->first('file_lokasi') }}</span>
                @endif
            </div>

        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <div class="form-group {{ $errors->has('rencana_kedalaman') ? 'has-error' : ''}} m-input">
            <label>Rencana Kedalaman (Dalam minus M.LWS) <sup>*</sup></label>

            {!! Form::text('rencana_kedalaman', null, ['class'=> 'form-control','placeholder'=>'Contoh : 8.00 s/d 10.00']) !!}

            @if($errors->has('rencana_kedalaman'))
            <span class="help-block badge badge-danger">{{ $errors->first('rencana_kedalaman') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('volume') ? 'has-error' : ''}} m-input">
            <label>Volume (Dalam m3) <sup>*</sup></label>

            {!! Form::text('volume', null, ['class'=> 'form-control']) !!}

            @if($errors->has('volume'))
            <span class="help-block badge badge-danger">{{ $errors->first('volume') }}</span>
            @endif
        </div>
    <div class="form-group {{ $errors->has('keterangan_peta') ? 'has-error' : ''}} m-input">
            {!! Form::label('Peta Pengukuran Kedalaman Awal (preredge sounding) dari lokasi yang akan dikerjakan') !!}
            {!! Form::textarea('keterangan_peta', null, ['class'=> 'form-control','id'=>'keterangan_peta','rows'=>5]) !!}

            @if($errors->has('keterangan_peta'))
            <span class="help-block text-danger">{{ $errors->first('keterangan_peta') }}</span>
            @endif
            </div>

            </div>
        </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('file_peta') ? 'has-error' : ''}} m-input">
                <label>File Peta Pengukuran Kedalaman Awal <sup>*</sup></label>
                {!! Form::file('file_peta',['class'=>'form-control-file']) !!}
                @if($errors->has('file_peta'))
                <span class="help-block badge badge-danger">{{ $errors->first('file_peta') }}</span>
                @endif
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('file_distrik_navigasi') ? 'has-error' : ''}} m-input">
                <label>File Rekomendasi Distrik Navigasi <sup>*</sup></label>
                <p><em>Rekomendasi dari Kantor Distrik Navigasi terhadap aspek keselamatan pelayaran setelah mendapat pertimbangan dari Kepala Kantor Distrik Navigasi setempat.</em></p>
                {!! Form::file('file_distrik_navigasi',['class'=>'form-control-file']) !!}
                @if($errors->has('file_distrik_navigasi'))
                <span class="help-block badge badge-danger">{{ $errors->first('file_distrik_navigasi') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('file_rekomendasi_syahbandar') ? 'has-error' : ''}} m-input">
                <label>File Rekomendasi Teknis dari Kantor Syahbandar <sup>*</sup></label>
                <p><em>Rekomendasi dari Kantor Syahbandar setempat berkoordinasi dengan Kantor Distrik Navigasi setempat terhadap aspek keselamatan pelayaran setelah mendapat pertimbangan dari Kepala Kantor Distrik Navigasi setempat.</em></p>
                {!! Form::file('file_rekomendasi_syahbandar',['class'=>'form-control-file']) !!}
                @if($errors->has('file_rekomendasi_syahbandar'))
                <span class="help-block badge badge-danger">{{ $errors->first('file_rekomendasi_syahbandar') }}</span>
                @endif
            </div>

        </div>
    </div>
    
    <small><sup>*</sup> <i>Tidak boleh kosong</i></small>
    <div class="btn-box">
        <button type="submit" class="btn btn-blue"><span>Send Form</span></button>
        <a href="{{ url()->previous() }}" class="btn btn-warning"> Cancel</a>
	</div>
</div>